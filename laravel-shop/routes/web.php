<?php
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

use Illuminate\Support\Facades\Route;

Route::get('/', 'PagesController@root')->name('root');

Auth::routes(['verify' => true]);

Route::group(['middleware' => ['auth', 'verified']], function () {
    // 列表页面
    Route::get('user_addresses', 'UserAddressesController@index')
        ->name('user_addresses.index');
    // 新增 and 修改页面
    Route::get('user_addresses/create', 'UserAddressesController@create')
        ->name('user_addresses.create');
    // 新增地址
    Route::post('user_addresses', 'UserAddressesController@store')
        ->name('user_addresses.store');
});
