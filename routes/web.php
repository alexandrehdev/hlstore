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


Route::group(['prefix' => "cadastro",'as' => 'register.'],function(){
    Route::get("/",[RegisterController::class, 'index'])->name('index');
    Route::post("/cadastrar",[RegisterController::class, 'store'])->name('save');
});

Route::group(['prefix' => 'login','as'=>'login.'], function(){
    Route::get('/', [LoginController::class,'index'])->name('index');
    Route::post("/auth",[LoginController::class, 'login'])->name('auth');
    Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
});


Route::group(['prefix' => 'produtos', 'as' => 'product.'],function() {
    Route::get('/', [ProductController::class,'index'])->name('index');
    Route::post('/publicar', [ProductController::class,'store'])->name('store');
});

Route::get('/configuracoes',function(){
    return view('settings.index');
})->name('settings');

Route::get('/perguntas_frequentes',function(){
    return view('faq.index');
})->name('faq');


Route::get('/presentation', function(){
    return view('presentation.index');
})->name('presentation');

Route::get('/produto/{product}', [ProductController::class,'show'])->name('show');