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

Route::get('/debug-cache', function () {
    $key = 'repo_stats';

    return response()->json([
        'cache_driver' => config('cache.default'),
        'cache_store' => config('cache.stores.' . config('cache.default')),
        'exists' => Cache::has($key),
        'value' => Cache::get($key),
        'storage_path' => storage_path('framework/cache/data'),
        'permissions' => substr(sprintf('%o', fileperms(storage_path('framework/cache'))), -4),
        'env' => app()->environment(),
    ]);
});

require __DIR__.'/auth.php';
