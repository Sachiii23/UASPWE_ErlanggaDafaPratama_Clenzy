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
    return view('login');
});

Route::get('/login', 'App\Http\Controllers\LoginController@index')->name('login');
Route::post('/proses', 'App\Http\Controllers\LoginController@proses')->name('proses.login');
Route::get('/loginOut', 'App\Http\Controllers\LoginController@logout')->name('logout.login');
Route::get('/create', 'App\Http\Controllers\Admin\UserController@create')->name('register.user');
Route::post('/store', 'App\Http\Controllers\Admin\UserController@store')->name('store.user');


//------------------------- ADMIN -----------------------------------------------------------------
Route::group(['middleware' => ['auth', 'is_status:admin']], function(){
    
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@ambil')->name('index.dashboard');
    Route::post('/dashboard', 'App\Http\Controllers\DashboardController@cariTransaksi')->name('cari.transaksi.dashboard');
    Route::prefix('produk')->group(function () {
        Route::get('/', 'App\Http\Controllers\Admin\ProdukController@index')->name('index.produk');
        Route::get('/create', 'App\Http\Controllers\Admin\ProdukController@create')->name('create.produk');
        Route::post('/store', 'App\Http\Controllers\Admin\ProdukController@store')->name('store.produk');
        Route::get('/edit/{id}', 'App\Http\Controllers\Admin\ProdukController@edit')->name('edit.produk');
        Route::put('/update/{id}', 'App\Http\Controllers\Admin\ProdukController@update')->name('update.produk');
        Route::delete('/delete/{id}', 'App\Http\Controllers\Admin\ProdukController@destroy')->name('destroy.produk');
    });

    Route::prefix('user')->group(function (){
        Route::get('/', 'App\Http\Controllers\Admin\UserController@index')->name('index.user');
        Route::get('/edit/{id}', 'App\Http\Controllers\Admin\UserController@edit')->name('edit.user');
        Route::put('/update/{id}', 'App\Http\Controllers\Admin\UserController@update')->name('update.user');
        Route::delete('/delete/{id}', 'App\Http\Controllers\Admin\UserController@destroy')->name('destroy.user');
    });
    
    Route::prefix('customer')->group(function () {
        Route::get('/', 'App\Http\Controllers\Admin\CustomerController@index')->name('index.customer');
        Route::get('/create', 'App\Http\Controllers\Admin\CustomerController@create')->name('create.customer');
        Route::post('/store', 'App\Http\Controllers\Admin\CustomerController@store')->name('store.customer');
        Route::get('/edit/{id}', 'App\Http\Controllers\Admin\CustomerController@edit')->name('edit.customer');
        Route::put('/update/{id}', 'App\Http\Controllers\Admin\CustomerController@update')->name('update.customer');
        Route::delete('/delete/{id}', 'App\Http\Controllers\Admin\CustomerController@destroy')->name('destroy.customer');
    });
});
// ------- EndADMIN -------------------




//--------KARYAWAN
Route::group(['middleware' => ['auth', 'is_status:pelanggan,admin']], function(){
    Route::get('/karyawan/dashboard', 'App\Http\Controllers\DashboardController@ambil2')->name('karyawan.index.dashboard');

    
    Route::get('/get-harga-produk', 'App\Http\Controllers\Karyawan\TransaksiController@getHarga');    
    Route::prefix('transaksi')->group(function () {
        Route::get('/', 'App\Http\Controllers\Karyawan\TransaksiController@index')->name('index.transaksi');
        Route::get('/create', 'App\Http\Controllers\Karyawan\TransaksiController@create')->name('create.transaksi');
        Route::post('/store', 'App\Http\Controllers\Karyawan\TransaksiController@store')->name('store.transaksi');
        Route::put('/{transaksi}/update-status', 'App\Http\Controllers\Karyawan\TransaksiController@updateStatus')->name('transaksi.update-status');
        Route::get('/edit/{id}', 'App\Http\Controllers\Karyawan\TransaksiController@edit')->name('edit.transaksi');
        Route::put('/update/{id}', 'App\Http\Controllers\Karyawan\TransaksiController@update')->name('update.transaksi');
        Route::delete('/delete/{id}', 'App\Http\Controllers\Karyawan\TransaksiController@destroy')->name('destroy.transaksi');
    });

});

