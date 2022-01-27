<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\UserController;

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
    return view('home');
});

Route::resource('products', ProductController::class);

Route::resource('categories', CategoriesController::class);

Route::resource('orders', OrdersController::class);

Route::resource('customers', CustomersController::class);


Route::post("/login" ,[UserController::class, 'login']);
Route::get('/login', function () {
    return view('Login');
});

Route::get('/logout', function (){
    Session::forget('user');
    return redirect('login');
});

Route::view('/register','register');
Route::post('/register', [UserController::class, 'register']);

