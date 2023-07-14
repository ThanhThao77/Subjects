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
//
//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [\App\Http\Controllers\HomeController::class, 'getAllDepartments'])->name('home');

Route::prefix('/departments')->group(function () {
//    Route::get('/show/{id}', [\App\Http\Controllers\\App\Http\Controllers\DepartmentController::class, 'show'])->name('department.show');

    Route::get('create', [\App\Http\Controllers\DepartmentController::class,'create'])->name('department.create');
    Route::post('store', [\App\Http\Controllers\DepartmentController::class,'store'])->name('department.store');

    Route::get('/edit/{department_id}', [\App\Http\Controllers\DepartmentController::class,'edit'])->name('department.edit');
    Route::put('/update/{department_id}', [\App\Http\Controllers\DepartmentController::class,'update'])->name('department.update');

    Route::delete('/delete/{department_id}', [\App\Http\Controllers\DepartmentController::class,'delete'])->name('department.delete');
});
