<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('admin.login');
});


Route::prefix('produk')->group(function () {
    Route::get('/', 'App\Http\Controllers\Admin\ProdukController@index')->name('index.produk');
    Route::get('/create', 'App\Http\Controllers\Admin\ProdukController@create')->name('create.produk');
    Route::post('/store', 'App\Http\Controllers\Admin\ProdukController@store')->name('store.produk');
    Route::get('/edit/{id}', 'App\Http\Controllers\Admin\ProdukController@edit')->name('edit.produk');
    Route::put('/update/{id}', 'App\Http\Controllers\Admin\ProdukController@update')->name('update.produk');
    Route::delete('/delete/{id}', 'App\Http\Controllers\Admin\ProdukController@destroy')->name('destroy.produk');
});

Route::prefix('customer')->group(function () {
    Route::get('/', 'App\Http\Controllers\Admin\CustomerController@index')->name('index.customer');
    Route::get('/create', 'App\Http\Controllers\Admin\CustomerController@create')->name('create.customer');
    Route::post('/store', 'App\Http\Controllers\Admin\CustomerController@store')->name('store.customer');
    Route::get('/edit/{id}', 'App\Http\Controllers\Admin\CustomerController@edit')->name('edit.customer');
    Route::put('/update/{id}', 'App\Http\Controllers\Admin\CustomerController@update')->name('update.customer');
    Route::delete('/delete/{id}', 'App\Http\Controllers\Admin\CustomerController@destroy')->name('destroy.customer');
});

Route::get('/get-harga-produk', 'App\Http\Controllers\Admin\TransaksiController@getHarga');

Route::prefix('transaksi')->group(function () {
    Route::get('/', 'App\Http\Controllers\Admin\TransaksiController@index')->name('index.transaksi');
    Route::get('/create', 'App\Http\Controllers\Admin\TransaksiController@create')->name('create.transaksi');
    Route::post('/store', 'App\Http\Controllers\Admin\TransaksiController@store')->name('store.transaksi');
    Route::put('/{transaksi}/update-status', 'App\Http\Controllers\Admin\TransaksiController@updateStatus')->name('transaksi.update-status');
    Route::get('/edit/{id}', 'App\Http\Controllers\Admin\TransaksiController@edit')->name('edit.transaksi');
    Route::put('/update/{id}', 'App\Http\Controllers\Admin\TransaksiController@update')->name('update.transaksi');
    Route::delete('/delete/{id}', 'App\Http\Controllers\Admin\TransaksiController@destroy')->name('destroy.transaksi');
});

Route::prefix('user')->group(function (){
    Route::get('/', 'App\Http\Controllers\Admin\UserController@index')->name('index.user');
    Route::get('/create', 'App\Http\Controllers\Admin\UserController@create')->name('register.user');
    Route::post('/store', 'App\Http\Controllers\Admin\UserController@store')->name('store.user');
    Route::get('/edit/{id}', 'App\Http\Controllers\Admin\UserController@edit')->name('edit.user');
    Route::put('/update/{id}', 'App\Http\Controllers\Admin\UserController@update')->name('update.user');
    Route::delete('/delete/{id}', 'App\Http\Controllers\Admin\UserController@destroy')->name('destroy.user');
});

// Route::get('/register', function () {
//     return view('admin.register');
// });
Route::get('/dashboard', function () {
    return view('admin.dashboard.index');
});


//pelanggan
Route::get('/pelanggan/dashboard', function () {
    return view('pelanggan.dashboard.index');
});
Route::get('/pelanggan/create/transaksi', function () {
    return view('pelanggan.transaksi.create');
});
Route::get('/pelanggan/transaksi', function () {
    return view('pelanggan.transaksi.index');
});
