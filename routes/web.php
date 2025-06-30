<?php

use App\Http\Controllers\GlobalConfigController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contact-us');
Route::get('admin/dashboard', function () {
    return view('backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/global-config', [GlobalConfigController::class, 'index'])->name('global-config');
    Route::post('/global-config', [GlobalConfigController::class, 'update']);

});

require __DIR__.'/auth.php';
