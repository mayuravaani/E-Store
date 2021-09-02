<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;


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
    return view('index');
});
Route::view('cusregister','register');
Route::post('/login',[LoginController::class,'checklogin']);
Route::post('/reg', [UserController::class, 'store' ]);

Route::resources(['products' => ProductController::class,
'users' =>  UserController::class,
'orders' => OrderController::class
 ]);

Route::get('/logout',[LoginController::class,'logout']);
Route::get('/placeorder/{product}',[ProductController::class,'showToOrder'])->name('products.order');
Route::get('/showmyorders', [OrderController::class, 'showEmployeeOrder'])->name('myorder');
