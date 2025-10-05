<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;

class SiteController extends Controller
{
    public function index()
    {
        $stats = Cache::get('repo_stats', [
            'lines' => 'Fetching…',
            'files' => 'Fetching…',
            'folders' => 'Fetching…',
            'updated_at' => null,
        ]);
        return view('site.index', compact('stats')); // Loads a view named 'users/index.blade.php'
    }
}