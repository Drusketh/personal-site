<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/quattro', function () {
    return view('quattro');
});
Route::get('/sterling', function () {
    return view('sterling');
});
Route::get('/spherenet', function () {
    return view('spherenet');
});

Route::get('/site', [SiteController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/debug-stats', function () {
    if (Storage::disk('local')->exists('psite_stats.json')) {
        return Storage::disk('local')->get('psite_stats.json');
    }
    return 'File not found.';
});

require __DIR__.'/auth.php';
