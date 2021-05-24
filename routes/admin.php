<?php
use Illuminate\Support\Facades\Route;
use App\Product;
use App\Category;
use App\User;
/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/
Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        $products = Product::all();
        $cates = Category::all();
        $users = User::all();
        return view('admin.index', compact('products', 'cates', 'users'));
    })->name('dashboard');


    Route::prefix('category')->group(function () {
        Route::get('/', 'CategoryController@index')->name('list.cate');
        Route::get('/add', 'CategoryController@addNew')->name('add.cate');
        Route::post('/add', 'CategoryController@saveAddNew');
        Route::get('/edit/{id}', 'CategoryController@editForm')->name('edit.cate');
        Route::post('/edit/{id}', 'CategoryController@saveEdit');
        Route::get('/delete/{id}', 'CategoryController@delete')->name('del.cate');
    });

    Route::prefix('product')->group(function () {
        Route::get('/', 'ProductController@index')->name('list.pro');
        Route::get('/add', 'ProductController@addNew')->name('add.pro');
        Route::post('/add', 'ProductController@saveAddNew');
        Route::get('/edit/{id}', 'ProductController@editForm')->name('edit.pro');
        Route::post('/edit/{id}', 'ProductController@saveEdit');
        Route::get('/delete/{id}', 'ProductController@delete')->name('del.pro');
    });

    Route::prefix('user')->group(function () {
        Route::get('/', 'UserController@index')->name('list.user');
        Route::get('/add', 'UserController@addNew')->name('add.user');
        Route::post('/add', 'UserController@saveAddNew');
        Route::get('/edit/{id}', 'UserController@editForm')->name('edit.user');
        Route::post('/edit/{id}', 'UserController@saveEdit');
        Route::get('/delete/{id}', 'UserController@delete')->name('del.user');
    });

    Route::prefix('order')->group(function () {
        Route::get('/', 'OrderController@index')->name('list.order');
        Route::get('/get/{id}', 'OrderController@getOrder')->name('get.order');
        Route::post('/edit/{id}', 'OrderController@editForm')->name('edit.order');
        Route::get('/confirm/{id}', 'OrderController@confirmForm')->name('confirm.order');
        Route::get('/delete/{id}', 'OrderController@delete')->name('del.order');
        Route::get('/detail/{id}', 'OrderController@detail')->name('detail.order');
    });

    Route::prefix('slide')->group(function () {
        Route::get('/', 'SlideController@index')->name('list.slide');
        Route::get('/add', 'SlideController@addNew')->name('add.slide');
        Route::post('/add', 'SlideController@saveAddNew');
        Route::get('/edit/{id}', 'SlideController@editForm')->name('edit.slide');
        Route::post('/edit/{id}', 'SlideController@saveEdit');
        Route::get('/delete/{id}', 'SlideController@delete')->name('del.slide');
    });

    Route::prefix('setting')->group(function () {
        Route::get('/', 'SettingController@index')->name('list.setting');
        Route::get('/edit', 'SettingController@editForm')->name('edit.setting');
    });

    Route::prefix('comment')->group(function () {
        Route::get('/', 'CommentController@index')->name('list.comment');
        Route::post('/', 'CommentController@postStatus');
    });
});
Route::get('/login', 'UserController@loginForm')->name('login');
Route::post('/login', 'UserController@postLogin');
Route::any('/logout', 'UserController@logout')->name('logout');
