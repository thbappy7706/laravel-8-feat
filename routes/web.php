<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FluentController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('home', [HomeController::class,'index'] )->name('home.index');
Route::get('home/{name}', [HomeController::class,'index'] )->name('home.index');

Route::get('users', [HomeController::class, 'users'])->name('home.user');


//HTTP
Route::get('/posts',[ClientController::class,'getAllPost'])->name('posts.getAllPost');
Route::get('/posts/{id}',[ClientController::class,'getPostById'])->name('posts.getPostById');
Route::get('/add-posts',[ClientController::class,'addPost'])->name('posts.add');
Route::get('/update-posts',[ClientController::class,'updatePost'])->name('posts.update');
Route::get('/delete-post{id}',[ClientController::class,'deletePost'])->name('posts.delete');

//HTTP REQUEST
Route::get('userht', [UserController::class, 'index'])->name('ht.user');
Route::get('login',[LoginController::class,'index'])->name('login.index');
Route::post('loginsub',[LoginController::class,'loginSub'])->name('login.submit');

//Fluent String
Route::get('/fluent-string',[FluentController::class,'index'])->name('fluents.index');



