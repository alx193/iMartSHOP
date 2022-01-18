<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductssController;
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
    dd('BUN VENIT !!');
});

Route::get('/login', function () {
    return view('Login');
});

Route::post("/login" ,[UserController::class, 'login']);
Route::get("/" ,[ProductssController::class, 'index']);


Route::get('/produse', function() {
    return view ('produse');
});

Route::resource('products', ProductControllers::class);