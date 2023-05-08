<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
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
Route::get('/', [HomeController::class, 'index'])->name('web.home');

Route::get('/product', [ProductsController::class, 'index'])->name('product.detail');

Route::get('/product/listOrder', [ProductsController::class, 'listOrder'])->name('product.listOrder');
Route::post('/product/order', [ProductsController::class, 'order'])->name('product.order');
Route::post('/product/order/store', [ProductsController::class, 'store'])->name('web.product.store');
Route::delete('/product/{id}', [ProductsController::class, 'delete'])->name('product.delete');
Route::post('/product/edit/{id}', [ProductsController::class, 'update'])->name('product.edit');
Route::get('/product/order-success', [ProductsController::class, 'orderSuccess'])->name('product.orderSuccess');

//contact
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/category/{slug}', [HomeController::class, 'category'])->name('category');
Route::get('/search', [HomeController::class, 'search'])->name('search');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/contact123', [HomeController::class, 'contact'])->name('contact123');
