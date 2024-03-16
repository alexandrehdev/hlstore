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


Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post("/auth",[LoginController::class, 'login'])->name('auth');
Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');



Route::group(['prefix' => 'produtos', 'as' => 'product.','middleware' => 'auth'],function() {
    Route::get('/', [ProductController::class,'index'])->name('index');
    Route::get('/vender', [ProductController::class, 'create'])->name('create');
    Route::post('/publicar', [ProductController::class,'store'])->name('store');
});

Route::get('/configuracoes',function(){
    return view('settings.index');
})->middleware('auth')->name('settings');

Route::get('/ajuda',function(){
    return view('faq.index');
})->name('faq');


Route::get('/presentation', function(){
    return view('presentation.index');
})->name('presentation');

Route::get('/produto/mostrar', [ProductController::class,'show'])->name('show');