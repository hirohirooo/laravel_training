<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;


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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('users',[UserController::class,'index'])->name('user.index');
Route::get('users/create',[UserController::class,'create'])->name('user.create');
Route::post('users/',[UserController::class,'store'])->name('user.store');
Route::get('users/{id}',[UserController::class,'edit'])->name('user.edit');
Route::post('users/{id}',[UserController::class,'update'])->name('user.update');
Route::delete('users/{id}',[UserController::class,'delete'])->name('user.delete');
Route::get('/posts',[PostController::class,'index'])->name('post.index');
Route::get('posts/create',[PostController::class,'create'])->name('post.create');
Route::post('posts',[PostController::class,"store"])->name('post.store');
