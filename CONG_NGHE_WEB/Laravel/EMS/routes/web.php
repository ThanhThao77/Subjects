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
Route::get('/', [\App\Http\Controllers\HomeController::class, 'getAllEmployees'])->name('home');

Route::prefix('/employees')->group(function () {
    Route::get('/show/{id}', [\App\Http\Controllers\EmployeeController::class, 'show'])->name('employee.show');

    Route::get('create', [\App\Http\Controllers\EmployeeController::class,'create'])->name('employee.create');
    Route::post('store', [\App\Http\Controllers\EmployeeController::class,'store'])->name('employee.store');

    Route::get('/edit/{id}', [\App\Http\Controllers\EmployeeController::class,'edit'])->name('employee.edit');
    Route::put('/update/{id}', [\App\Http\Controllers\EmployeeController::class,'update'])->name('employee.update');

    Route::delete('/delete/{id}', [\App\Http\Controllers\EmployeeController::class,'delete'])->name('employee.delete');
});

