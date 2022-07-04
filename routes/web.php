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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/donordarah', [App\Http\Controllers\DonorDarahController::class,'index'])->name('donordarah');
Route::post('/donordarah/create', [App\Http\Controllers\DonorDarahController::class,'create'])->name('donordarah');
Route::get('/donordarah/{id}/edit', [App\Http\Controllers\DonorDarahController::class, 'edit'])->name('donordarah');
Route::post('/donordarah/{id}/update', [App\Http\Controllers\DonorDarahController::class, 'update'])->name('donordarah');
Route::get('/donordarah/delete/{id}', [App\Http\Controllers\DonorDarahController::class, 'delete'])->name('donordarah');
Route::get('/donordarah/exportpdf', [App\Http\Controllers\DonorDarahController::class, 'exportPDF'])->name('donordarah');
