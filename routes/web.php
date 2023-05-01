<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',[HomeController::class,'index'])->name('home');



Route::get("/cadastro",[RegisterController::class, 'index'])->name('register');
Route::post("/cadastrar",[RegisterController::class, 'store'])->name('user.store');
Route::get("/login",[LoginController::class, 'index'])->name('login');
Route::post("/",[LoginController::class, 'login'])->name('check.login');
Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');


Route::group(['prefix' => 'publicar', 'as' => 'product.', "middleware" => "auth"],function() {
    Route::get('/', [ProductController::class,'create'])->name('create');
    Route::post('/publicar', [ProductController::class,'store'])->name('store');

});

Route::get('/produto/{product}', [ProductController::class,'show'])->name('show');