<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');
Route::controller(UserController::class)->group(function(){
    Route::middleware('auth')->group(function () {


Route::get('/product', [ProductController::class,'index']);
Route::get('/detail/{id}', [ProductController::class,'detail']);
Route::post('/add_to_cart', [ProductController::class,'addToCart']);
// Route::get("cartlist",[ProductController::class,'cartList']); 
// Route::get("removecart/{id}",[ProductController::class,'removeCart']); 
// Route::get("ordernow",[ProductController::class,'orderNow']); 
// Route::post("orderplace",[ProductController::class,'orderPlace']);
// Route::get("myorders",[ProductController::class,'myOrders']);
});    
});