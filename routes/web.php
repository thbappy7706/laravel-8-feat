<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientController;
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



