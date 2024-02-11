<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TambahController;
 
 
Route::get('/', function () {
    return view('welcome');
});
 
Route::resource('/product', ProductController::class);

Route::get('/tambah',[TambahController::class, 'tambah']);