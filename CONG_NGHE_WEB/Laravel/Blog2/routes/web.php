<?php

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

Route::get('/',[\App\Http\Controllers\HomeController::class,"getAllPosts"])->name('home');

Route::prefix("/posts")->group(function () {
   Route::get('/create',[\App\Http\Controllers\PostController::class,'create'])->name('post.create');
   Route::post('/store',[\App\Http\Controllers\PostController::class,'store'])->name('post.store');

   Route::get('/edit/{id}',[\App\Http\Controllers\PostController::class,'edit'])->name('post.edit');
   Route::post('/update/{id}',[\App\Http\Controllers\PostController::class,'update'])->name('post.update');

   Route::post('/delete/{id}',[\App\Http\Controllers\PostController::class,'delete'])->name('post.delete');

//   Route::get('/edit',[\App\Models\Post::class,'create']);
//   Route::get('/delete',[\App\Models\Post::class,'create']);

});
