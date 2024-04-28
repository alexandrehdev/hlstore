<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PosterController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Subtype\FashionController; 
use App\Http\Controllers\StockController; 
use App\Livewire\DropzonePoster;
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
    Route::get('/', [ProductController::class,'index'])->name('index');
    Route::post('/publicar/{product}',[ProductController::class,'publish'])->name('publish');
    Route::get('/vender', [ProductController::class, 'create'])->name('create');
    Route::post('/detalhes', [ProductController::class,'details'])->name('details');

    Route::group(['prefix'=> '/vender', 'as'=> 'subtype.'],function(){

        Route::group(['prefix' => "/", 'as' => 'fashion.'],function(){
            Route::get('/{subtype}', [FashionController::class,'create'])->name('create');
            Route::post('/salvar',[FashionController::class,'store'])->name('store');
        });        
    });
});

Route::group(['prefix' => "posters", 'as' => 'posters.','middleware'=> 'auth'],function() {
    Route::get('/', [PosterController::class, "index"] )->name("index");
    Route::get('/criar', [PosterController::class, "create"] )->name("create");
});



Route::get('/produto/estoque',[StockController::class,'index'])->middleware('auth')->name('stock');

Route::get('/produto/compra', [ProductController::class,'show'])->name('show');


Route::get('/configuracoes',function(){
    return view('settings.index');
})->middleware('auth')->name('settings');

Route::get('/ajuda',function(){
    return view('faq.index');
})->name('faq');


Route::get('/presentation', function(){
    return view('presentation.index');
})->name('presentation');


