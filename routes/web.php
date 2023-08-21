<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/foo', function () {
    Artisan::call('storage:link');
});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['role:admin', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth', 'verified')->controller(DashboardController::class)->group(function () {
    Route::get('/dashboard', 'index')->name('dashboard');
});

Route::middleware('role:admin', 'auth')->prefix('admin')->name('admin.')->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/', 'admin')->name('dashboard');
    });

    Route::get('user/archive', [UserController::class, 'archive'])->name('user.archive');
    Route::post('user/restore/{id}', [UserController::class, 'restore'])->name('user.restore');
    Route::resource('user', UserController::class)->except('edit')->withTrashed(['*']);

    Route::resource('education', EducationController::class);
    Route::resource('experience', ExperienceController::class);
    Route::resource('skill', SkillController::class);
    Route::resource('project', ProjectController::class);
    Route::resource('blog', BlogController::class);
});

require __DIR__.'/auth.php';
