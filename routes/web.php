<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Models\OpenGraph;
use Illuminate\Support\Facades\Auth;

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
Route::middleware('lang')->group(function(){
    Route::get('cookies', [Controllers\BaseController::class, 'getCookies'])->name('cookies');
    Route::get('story', [Controllers\BaseController::class, 'getStory'])->name('story');
    Route::get('fullstory', [Controllers\BaseController::class, 'getFullstory'])->name('fullstory');
    Route::get('aboutthetemple', [Controllers\BaseController::class, 'getAboutthetemple'])->name('aboutthetemple');
    Route::get('schedule', [Controllers\BaseController::class, 'getSchedule'])->name('schedule');
    Route::get('note', [Controllers\BaseController::class, 'getNote'])->name('note');
    Route::get('sacraments', [Controllers\BaseController::class, 'getSacraments'])->name('sacraments');
    Route::get('weddingcalendar', [Controllers\BaseController::class, 'getWeddingcalendar'])->name('weddingcalendar');
    Route::get('users', [Controllers\UserController::class, 'getIndex']);
    Route::get('user/{user}', [Controllers\UserController::class, 'getOne']);


// Route::apiResource('users', Controllers\Api\UserController::class); лайфхак перенесли в Api

    Route::get('/', [Controllers\BaseController::class,'getIndex']);
    Route::get('map', [Controllers\MapController::class,'getIndex']);
    Route::get('blogs', [Controllers\BlogController::class, 'getAll']);
    Route::get('blog/{blog}', [Controllers\BlogController::class, 'getOne']);


    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        Route::post('blog/{blog}/add_comment', [Controllers\BlogController::class, 'postAddComment']);
    });

    Route::middleware('auth')->group(function () {
        Route::post('blog/{blog}/add_text', [Controllers\BlogController::class, 'postBlogText']);
        Route::post('blogtext/{blog_text}/add_picture', [Controllers\BlogController::class, 'addPicture']);
        Route::post('blog_text/{blog_text}/edit', [Controllers\BlogController::class, 'updateBlogText']);
        Route::get('blog_picture/{blog_text_picture}/delete', [Controllers\BlogController::class, 'deletePicture']);
    });

    Route::get('blogs', [Controllers\BlogController::class, 'getAll']);
Route::get('cookie/close', [Controllers\CookieController::class, 'getClose']);

    require __DIR__.'/auth.php';

//всегда последний
    Route::get('/{url}', [Controllers\ArticleController::class,'getUrl']);

});
