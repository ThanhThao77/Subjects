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
Route::get('/', [\App\Http\Controllers\HomeController::class, 'getAllJournals'])->name('home');

Route::prefix('/journals')->group(function () {
    Route::get('show', [\App\Http\Controllers\JournalController::class, 'show'])->name('journal.show');

    Route::get('create', [\App\Http\Controllers\JournalController::class,'create'])->name('journal.create');
    Route::post('store', [\App\Http\Controllers\JournalController::class,'store'])->name('journal.store');

    Route::get('/edit/{jid}', [\App\Http\Controllers\JournalController::class,'edit'])->name('journal.edit');
    Route::put('/update/{jid}', [\App\Http\Controllers\JournalController::class,'update'])->name('journal.update');

    Route::delete('/delete/{jid}', [\App\Http\Controllers\JournalController::class,'delete'])->name('journal.delete');
});

