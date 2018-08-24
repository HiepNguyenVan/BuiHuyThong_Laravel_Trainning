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
Route::get('thongtin', 'WelcomeController@showInfo')->name('thongtin');

Route::get('khoa-hoc',function(){
    return "Lap trinh laravel 5 tai khoa pham";
});

Route::get('khoa-hoc/lap-trinh-php',function(){
    return "Khoa hoc lap trinh php tai khoa pham";
});

Route::get('lap-trinh/{monhoc}/{thoigian}',function($monhoc,$thoigian){
    echo "Khoa hoc lap trinh  : {$monhoc} luc {$thoigian}";
});

Route::get('mon-an/{tenmonan?}',function($tenmonan='KFC'){
    return $tenmonan;
});

Route::get('thong-tin/{hoten}/{sdt}',function($hoten,$sdt){
    echo "Thong tin cua ban la : {$hoten} co so dien thoai : {$sdt}";
})->where(['hoten'=>'[a-zA-Z]+','sdt' => '[0-9]{10}']);

Route::get('call-view',function(){
    $hoten  =   "Bui Huy Thong";
    $view   =   "admin";
    return view('view',compact('hoten','view'));
});

Route::get('test-controller','WelcomeController@testAction');

Route::get('ho-chi-minh',function(){
    return "Ho Chi Minh dep lam ai oi";
})->name('hcm');

Route::get('thuc-don/bun-bo',function(){
    echo "Day la trang ban bun bo";
});
Route::get('thuc-don/bun-mam',function(){
    echo "Day la trang ban bun mam";
});
Route::get('thuc-don/bun-moc',function(){
    echo "Day la trang ban bun moc";
});

Route::group(['prefix' => "thuc-don"],function(){
    Route::get('bun-bo',function(){
        echo "Day la trang ban bun bo";
    });
    Route::get('bun-mam',function(){
        echo "Day la trang ban bun mam";
    });
    Route::get('bun-moc',function(){
        echo "Day la trang ban bun moc";
    });
});


Route::get('call-view',function(){
    return view('layout.sub.view');
});
Route::get('call-layout',function(){
    return view('layout.sub.layout');
});

view()->share('title', 'Day la tieu de');

view()->composer(['layout.sub.layout','layout.sub.view'], function ($view) {
    return $view->with('thongtin','day la trang ca nhan');
});

Route::get('check-view',function(){
    if (view()->exists('layout.sub.layouta'))
    {
        echo "Trang view ton tai";
    }else{
        echo "Trang view khong ton tai";
    }
});

Route::get('goi-master',function(){
    return view('views.master');
});

Route::get('url/full',function(){
    return URL::full();
});

Route::get('url/asset',function(){
    return asset('img/photo.jpg');
});

Route::get('schema/create',function(){
    Schema::create('khoapham', function ($table) {
        $table->increments('id');
        $table->string('tenmonhoc');
        $table->integer('gia');
        $table->text('ghichu')->nullable();
        $table->timestamps();
    });
});

Route::get('schema/rename',function(){
    Schema::rename('khoapham', 'kpt');
});

Route::get('schema/drop',function(){
    Schema::dropIfExists('khoapham');
});

Route::get('schema/change',function(){
    Schema::table('khoapham', function ($table) {
        $table->string('tenmonhoc',50)->change();
    });
});