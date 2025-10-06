<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;


class UpdateRepoStats extends Command
{
    protected $signature = 'repo:update-stats';
    protected $description = 'Fetch GitHub code frequency and store total lines';

    public function handle()
    {
        $owner = config('services.github.owner');
        $repo  = config('services.github.repo');
        $token = config('services.github.token');

        // ------------------------------
        // 1. Get the repo tree (recursive)
        // ------------------------------
        $treeUrl = "https://api.github.com/repos/{$owner}/{$repo}/git/trees/HEAD?recursive=1";

        $treeResponse = Http::withToken($token)->get($treeUrl);

        if (! $treeResponse->successful()) {
            $this->error("Failed to fetch repo tree: " . $treeResponse->status());
            return;
        }

        $tree = $treeResponse->json()['tree'] ?? [];

        // ------------------------------
        // 2. Define which paths to exclude
        // ------------------------------
        $excludedPaths = [
            'vendor/',
            'node_modules/',
            'bootstrap/',
            'storage/',
            'database/migrations/',
            'database/seeders/',
            'tests/',
            'config/',
            '.github/',
            'resources/views/vendor/',
        ];

        $filteredFiles = collect($tree)->filter(function ($item) use ($excludedPaths) {
            if ($item['type'] !== 'blob') {
                return false;
            }
            $path = $item['path'];
            foreach ($excludedPaths as $excluded) {
                if (str_starts_with($path, $excluded)) {
                    return false;
                }
            }
            // Only count code-like files (PHP, Blade, JS, etc.)
            return preg_match('/\.(php|js|vue|css|scss|blade\.php|html|json)$/i', $path);
        });

        $fileCount = $filteredFiles->count();
        $folderCount = collect($tree)->where('type', 'tree')->count();

        // ------------------------------
        // 3. Count lines of code
        // ------------------------------
        $totalLines = 0;

        foreach ($filteredFiles as $file) {
            $blobUrl = "https://api.github.com/repos/{$owner}/{$repo}/git/blobs/{$file['sha']}";
            $blobResponse = Http::withToken($token)->get($blobUrl);

            if ($blobResponse->successful()) {
                $blob = $blobResponse->json();
                $content = base64_decode($blob['content']);
                $lineCount = substr_count($content, "\n");
                $totalLines += $lineCount;
            } else {
                $this->warn("Skipping {$file['path']} (HTTP {$blobResponse->status()})");
            }

            // Optional: avoid hitting GitHub’s secondary rate limit
            usleep(200000); // 0.2 seconds per file (~5 req/s)
        }

        // ------------------------------
        // 4. Store in cache
        // ------------------------------

        Storage::disk('local')->put('psite_stats.json', json_encode([
            'lines' => $lines,
            'files' => $fileCount,
            'folders' => $folderCount,
            'updated_at' => now(),
        ], now()->addHours(12)));

        $this->info("Lines: {$totalLines}, Files: {$fileCount}, Folders: {$folderCount}");
    }
}
