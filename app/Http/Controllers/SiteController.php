<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class SiteController extends Controller
{
    public function index()
    {
        if (Storage::disk('local')->exists('psite_stats.json')) {
            $stats = json_decode(Storage::disk('local')->get('psite_stats.json'), true);
        } else {
            $stats = ['lines' => 'Fetching…', 'files' => 'Fetching…', 'folders' => 'Fetching…'];
        }
        return view('site.index', compact('stats')); // Loads a view named 'users/index.blade.php'
    }
}