<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostLikeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [PostController::class, 'welcome']);

Route::resource('posts', PostController::class);

Route::resource('comments', CommentController::class);

Route::post('/comment/{post}', [CommentController::class, 'store'])->name('store.comment');


//Like Post
Route::post('posts/{post}/likes', [PostLikeController::class, 'store'])->name('posts.like');

//Unlike Post
Route::delete('posts/{post}/likes', [PostLikeController::class, 'destroy'])->name('likes.destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


