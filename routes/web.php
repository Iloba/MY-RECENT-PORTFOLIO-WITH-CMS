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

//Route resource for posts
Route::resource('posts', PostController::class);


//Route for comments (Submit comment)
Route::post('/posts/{post}', [CommentController::class, 'submitComment'])->name('submit_comment');

Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');

//Route for getting all comments
Route::get('posts/{post:id}', [CommentController::class, 'getComments'])->name('get_comments');

//Get individial Comment
Route::get('posts/{post:id}/comments/{id}', [CommentController::class, 'getSingleComment'])->name('comments.show');

//Like Post
Route::post('posts/{post}/likes', [PostLikeController::class, 'store'])->name('posts.like');

//Unlike Post
Route::delete('posts/{post}/likes', [PostLikeController::class, 'destroy'])->name('likes.destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


