<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsAdmin;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\CartController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('admin.index');
    });

});

Route::get('/', [FrontController::class, 'index']);
Route::get('shopdetail/{id}', [FrontController::class, 'show',]);
Route::get('cartpage', [CartController::class, 'index']);
Route::get('checkout', [FrontController::class, 'checkout']);
Route::get('about', [FrontController::class, 'about']);

Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');
Route::delete('/cart/delete/{id}', [CartController::class, 'delete'])->name('cart.delete');
Route::delete('/cart/clear', [CartController::class, 'clear'])->name('cart.clear');



//BE
Route::group(['prefix' => 'admin', 'middleware' => ['auth', IsAdmin::class]], function () {
    Route::get('/', function () {
        return view('admin.index');
    });
    //another BE
    Route::resource('user', App\Http\Controllers\UsersController::class);
    Route::resource('kategori', App\Http\Controllers\KategorisController::class);
    Route::resource('produk', App\Http\Controllers\produksController::class) ;


});





