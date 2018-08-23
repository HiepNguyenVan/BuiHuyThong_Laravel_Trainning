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

//Route-basic
Route::get('khoa-hoc', function () {
    return 'Lap trinh laravel 5 tai khoa pham';
});

Route::get('khoa-hoc/lap-trinh-php', function () {
    return 'Khoa hoc lap trinh php tai khoa pham';
});

//Route-Parameters-required
Route::get('lap-trinh/{monhoc}/{thoigian}', function ($monhoc,$thoigian) {
    return "Khoa hoc lap trinh : {$monhoc} luc : {$thoigian}";
});

//Route-Parameters-optional
Route::get('mon-an/{tenmonan?}', function ($tenmonan = "Ga ran kfc") {
    return 'Mon an la : ' . $tenmonan;
});

//Route-Regular expresssion
Route::get('thong-tin/{hoten}/{sodienthoai}', function ($hoten,$sodienthoai) {
    return "Thong tin cua ban la  : {$hoten} co so dien thoai {$sodienthoai}";
})->where(['hoten' => '[A-Za-z]+' , 'sodienthoai' => '[0-9]{10}']);

//Route-send data from Route to View
Route::get('call-view',function(){
    $hoten  =   "Bui Huy Thong";
    return view('view',compact('hoten'));
});
//Route-Controller
Route::get('test-controller','NewController@action');


//Route-call view
Route::get('goi-view',function(){
    return view('layout.sub.layout');
});
//View-Share
View::Share('title','Title 01');

//Route-resource
Route::resource('hocsinh','HocSinhController');