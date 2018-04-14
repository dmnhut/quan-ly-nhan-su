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

Route::get('/', function () {
    return view('welcome');
});
Route::get('index', function () {
    return view('admin.index');
});
Route::get('BoMon/index', function () {
    return view('admin.QuanLyBoMon.danhsach');
});
Route::get('BoMon/create', function () {
    return view('admin.QuanLyBoMon.them');
});
Route::get('CanBo/index', function () {
    return view('admin.QuanLyCanBo.danhsach');
});
Route::get('CanBo/create', function () {
    return view('admin.QuanLyCanBo.them');
});
Route::get('Lop/index', function () {
    return view('admin.QuanLyLop.danhsach');
});
Route::get('Lop/create', function () {
    return view('admin.QuanLyLop.them');
});
Route::get('CoSoVatChat/index', function () {
    return view('admin.QuanLyCoSoVatChat.danhsach');
});
Route::get('CoSoVatChat/create', function () {
    return view('admin.QuanLyCoSoVatChat.them');
});
Route::get('NhomNguoiDung/index', function () {
    return view('admin.QuanLyNhomNguoiDung.danhsach');
});
Route::get('NhomNguoiDung/create', function () {
    return view('admin.QuanLyNhomNguoiDung.them');
});

Route::group(['prefix' => 'price'], function () {
    Route::get('index', 'priceController@index')->name('chiphi.index');
    Route::get('create', 'priceController@create')->name('chiphi.create');
    Route::post('store', 'priceController@store')->name('chiphi.store');
    Route::get('destroy/{cost_id}', 'priceController@destroy')->name('chiphi.destroy');
    Route::get('edit/{cost_id}', 'priceController@edit')->name('chiphi.edit');
    Route::post('update/{cost_id}', 'priceController@update')->name('chiphi.update');
});
Route::group(['prefix' => 'students'], function () {
    Route::name('students.')->group(function () {
        Route::get('{id}/delete', 'StudentProfileController@delete')->name('delete');
    });
});
Route::resource('students', 'StudentProfileController');