<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProductTypeController;
use App\Http\Controllers\Subtype\FashionController; 
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


Route::group(['prefix' => 'produtos', 'as' => 'type_product.','middleware' => 'auth'],function() {
    Route::get('/', [ProductTypeController::class,'index'])->name('index');
    Route::get('/vender', [ProductTypeController::class, 'create'])->name('create');
    Route::post('/detalhes', [ProductTypeController::class,'details'])->name('details');

    Route::group(['prefix'=> '/vender', 'as'=> 'subtype.'],function(){

        Route::group(['prefix' => "/", 'as' => 'fashion.'],function(){
            Route::get('/{subtype}', [FashionController::class,'create'])->name('create');
            Route::post('/salvar',[FashionController::class,'store'])->name('store');
        });

        
    });
});

// COLOCAR NO CONTROLLER E FAZER UMA QUERY
Route::get('/produto/estoque',function(){
    return view('stock.index');
})->name('stock');

Route::get('/produto/compra', [ProductTypeController::class,'show'])->name('show');


Route::get('/configuracoes',function(){
    return view('settings.index');
})->middleware('auth')->name('settings');

Route::get('/ajuda',function(){
    return view('faq.index');
})->name('faq');


Route::get('/presentation', function(){
    return view('presentation.index');
})->name('presentation');


