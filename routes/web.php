<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TambahController;
use App\Http\Controllers\HomeController;
 
 
Route::get('/', function () {
    return view('welcome');
});
 
Route::resource('/product', ProductController::class);

Route::get('/tambah',[TambahController::class, 'tambah']);

Route::resource('/home', \App\Http\Controllers\HomeController::class);