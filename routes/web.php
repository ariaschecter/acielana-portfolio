<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ResumeController;
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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/{user}', [ProfileController::class, 'update'])->name('profile.update');
});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

route::controller(HomeController::class)->name('home.')->group( function() {
    Route::get('/', 'index')->name('index');
    Route::post('/contact', 'contactStore')->name('contact.store');
    Route::post('/blog/{id}', 'blogStore')->name('comment.store');
    Route::post('/project/{id}', 'projectStore')->name('comment.project.store');
});

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
    Route::resource('category', CategoryController::class)->except('show');
    Route::resource('resume', ResumeController::class)->except('edit', 'update');
    Route::resource('contact', ContactController::class)->except('create', 'store', 'show', 'edit', 'update');
    Route::resource('comment', CommentController::class)->except('create', 'store', 'show', 'edit', 'update');
});

require __DIR__.'/auth.php';
