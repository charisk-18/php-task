<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ScrapperController;
use App\Http\Controllers\UserController;
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

Route::get('/wholegrain',function(){
    return view('wholegrain');
});


//all posts
Route::get('/', [PostController::class, 'index']);

//show create post form
Route::get('/posts/create',[PostController::class, 'create'])->middleware('auth');

//store post
Route::post('/posts', [PostController::class, 'store'])->middleware('auth');

//show edit post form
Route::get('/posts/{post}/edit', [PostController::class,'edit'])->middleware('auth');

//Update post
Route::put('/posts/{post}',[PostController::class,'update'])->middleware('auth');

//Delete post
Route::delete('/posts/{post}',[PostController::class,'destroy'])->middleware('auth');

//manage posts
Route::get('posts/manage', [PostController::class, 'manage'])->middleware('auth');

//single post
Route::get('/posts/{post}', [PostController::class, 'show']);

//show register form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

//create user
Route::post('/users', [UserController::class, 'store']);

//Logout user
Route::post('/logout', [UserController::class, 'logout']);

//login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//login user
Route::post('/users/authenticate',[UserController::class, 'authenticate']);


//scrapper
Route::get('/scrapper', [ScrapperController::class, 'scrapper'])->name('scrapper');