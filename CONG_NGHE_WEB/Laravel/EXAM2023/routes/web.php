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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [\App\Http\Controllers\HomeController::class, 'getAllTasks'])->name('home');

Route::prefix('/tasks')->group(function () {
//    Route::get('/show/{id}', [\App\Http\Controllers\\App\Http\Controllers\\App\Http\Controllers\TaskController::class, 'show'])->name('task.show');

    Route::get('create', [\App\Http\Controllers\TaskController::class,'create'])->name('task.create');
    Route::post('store', [\App\Http\Controllers\TaskController::class,'store'])->name('task.store');

    Route::get('/edit/{task_id}', [\App\Http\Controllers\TaskController::class,'edit'])->name('task.edit');
    Route::put('/update/{task_id}', [\App\Http\Controllers\TaskController::class,'update'])->name('task.update');

    Route::delete('/delete/{task_id}', [\App\Http\Controllers\TaskController::class,'delete'])->name('task.delete');
});

