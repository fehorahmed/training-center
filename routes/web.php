<?php

use App\Http\Controllers\CourseCategoryController;
use App\Http\Controllers\CourseController;
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


    Route::prefix('course-category')->group(function(){
        Route::get('/', [CourseCategoryController::class, 'index'])->name('admin.course-category.index');
        Route::get('/all', [CourseCategoryController::class, 'getData'])->name('course-category.data');
        Route::get('/create', [CourseCategoryController::class, 'create'])->name('course-category.create');
        Route::post('/store', [CourseCategoryController::class, 'store'])->name('course-category.store');
        Route::get('/{courseCategory}/edit', [CourseCategoryController::class, 'edit'])->name('course-category.edit');
        Route::post('/{courseCategory}/update', [CourseCategoryController::class, 'update'])->name('course-category.update');
    });
    Route::prefix('course')->group(function(){
        Route::get('/', [CourseController::class, 'index'])->name('admin.course.index');
        Route::get('/all', [CourseController::class, 'getData'])->name('course.data');
        Route::get('/create', [CourseController::class, 'create'])->name('course.create');
        Route::post('/store', [CourseController::class, 'store'])->name('course.store');
        Route::get('/{course}/edit', [CourseController::class, 'edit'])->name('course.edit');
        Route::post('/{course}/update', [CourseController::class, 'update'])->name('course.update');
    });

    Route::get('/global-config', [GlobalConfigController::class, 'index'])->name('global-config');
    Route::post('/global-config', [GlobalConfigController::class, 'update']);

});

require __DIR__.'/auth.php';

Route::get('/migrate', function () {
    Artisan::call('migrate');
    return 'success';
});