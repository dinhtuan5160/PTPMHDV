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

// Route::get('index', function () {
//     return view('viewer.page.trangchu');
// });

Route::get('login',function(){
	return view('login');
});	
Route::post('login','UserController@postDangNhap');

Route::group(['prefix'=>'viewer'],function(){
	Route::group(['prefix'=>'congvandi'],function(){
		Route::get('danhsach','CongVanDiController@getDSCVDi');

		// Route::get('them','TheLoaiController@getThem');

		// Route::post('them','TheLoaiController@postThem');

		// Route::get('sua/{id}','TheLoaiController@getSua');

		// Route::post('sua/{id}','TheLoaiController@postSua');

		// Route::get('xoa/{id}','TheLoaiController@getXoa');


	});
	Route::group(['prefix'=>'congvanden'],function(){
		Route::get('danhsach','CongVanDenController@getDSCVDen');

		Route::get('chitiet/{id}','CongVanDenController@getChiTiet');
		// Route::get('them','TheLoaiController@getThem');

		// Route::post('them','TheLoaiController@postThem');

		// Route::get('sua/{id}','TheLoaiController@getSua');

		// Route::post('sua/{id}','TheLoaiController@postSua');

		// Route::get('xoa/{id}','TheLoaiController@getXoa');


	});
});


