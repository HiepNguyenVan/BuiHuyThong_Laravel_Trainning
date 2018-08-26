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

#------------------------------------------------BUOI 2---------------------------------------------------------#

//Route-call-view-hocsinh

//1 . Lam viec với resquest và validate
Route::get('hoc-sinh',function(){
    return view('hocsinh');
});

Route::post('hoc-sinh','HocSinhController@index')->name('createHocSinh');

//2.Lam viec voi view

Route::get('test-view',function(){
    $name   =   'VNEXT';
    return view('test',compact('name'));
});

View::share('title','On tap laravel');

View::composer('test',function($view){
    return $view->with('thongtin','Toi la bui huy thong');
});

Route::get('get-view',function(){
    return view ('err');
});

//RESPONSIVE

Route::get('responsive/basic',function(){
    return 'Đây là responsive cơ bản';
});

Route::get('responsive/json',function(){
    $data   =   array(
        'id'    => 1,
        'name'  => 'hello world'
    );
   return response()->json($data);

});

Route::get('responsive/view',function(){

    $data   =   array(
        'id'    => 1,
        'name'  => 'hello world'
    );

    return response()->view('test',$data,200)->header('Content-Type', $type);
});

#-----------------------------------BUOI 3------------------------------------------------------------------------#


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

//Route-controller
Route::get('thongtin', 'WelcomeController@showInfo')->name('thongtin');

//Route basic
Route::get('khoa-hoc',function(){
    return "Lap trinh laravel 5 tai khoa pham";
});

Route::get('khoa-hoc/lap-trinh-php',function(){
    return "Khoa hoc lap trinh php tai khoa pham";
});

//Route parameters
Route::get('lap-trinh/{monhoc}/{thoigian}',function($monhoc,$thoigian){
    echo "Khoa hoc lap trinh  : {$monhoc} luc {$thoigian}";
});

//Route parameters optional
Route::get('mon-an/{tenmonan?}',function($tenmonan='KFC'){
    return $tenmonan;
});

//Route regular expression
Route::get('thong-tin/{hoten}/{sdt}',function($hoten,$sdt){
    echo "Thong tin cua ban la : {$hoten} co so dien thoai : {$sdt}";
})->where(['hoten'=>'[a-zA-Z]+','sdt' => '[0-9]{10}']);


//Route send data to view
Route::get('call-view',function(){
    $hoten  =   "Bui Huy Thong";
    $view   =   "admin";
    return view('view',compact('hoten','view'));
});

Route::get('test-controller','WelcomeController@testAction');
//Route -name
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

//Route group
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

//Route call view
Route::get('call-view',function(){
    return view('layout.sub.view');
});
Route::get('call-layout',function(){
    return view('layout.sub.layout');
});
//View share
view()->share('title', 'Day la tieu de');

//View composer
view()->composer(['layout.sub.layout','layout.sub.view'], function ($view) {
    return $view->with('thongtin','day la trang ca nhan');
});
//view exists
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
//URL
Route::get('url/full',function(){
    return URL::full();
});

Route::get('url/asset',function(){
    return asset('img/photo.jpg');
});

//Schema create table
Route::get('schema/create',function(){
    Schema::create('khoapham', function ($table) {
        $table->increments('id');
        $table->string('tenmonhoc');
        $table->integer('gia');
        $table->text('ghichu')->nullable();
        $table->timestamps();
    });
});

//schema rename
Route::get('schema/rename',function(){
    Schema::rename('khoapham', 'kpt');
});
//schema drop table
Route::get('schema/drop',function(){
    Schema::dropIfExists('khoapham');
});

//schema change column
Route::get('schema/change',function(){
    Schema::table('khoapham', function ($table) {
        $table->string('tenmonhoc',50)->change();
    });
});

//query builder get all table
Route::get('query/select-all',function(){
    $data   =   DB::table('product')->get();

    echo "<pre>";
    print_r($data);
    echo "</pre>";

    echo $data[0]->name;
});
//query builder select column table
Route::get('query/select-column',function(){
    $data   =   DB::table('product')->select('name')->where('cate_id',1)->first();
    echo "<pre>";
    print_r($data);
    echo "</pre>";
});
//query builder where
Route::get('query/select-whereOr',function(){
    $data   =   DB::table('product')->where('cate_id',1)->where('id',1)->get();
    echo "<pre>";
    print_r($data);
    echo "</pre>";
});
//query builder order by
Route::get('select/order-by',function(){
    $data   =   DB::table('product')->select('name')->where('gia','>','200000')->orderBy('gia', 'DESC')->get();
    echo "<pre>";
    print_r($data);
    echo "</pre>";
});
//query builder limt
Route::get('select/limit',function(){
    $data   =   DB::table('product')->skip(0)->take(3)->get();
    echo "<pre>";
    print_r($data);
    echo "</pre>";

});
//query builder bettwen
Route::get('select/bettwen',function(){
    $data   =   DB::table('product')->whereBetween('gia', [100000, 400000])->get();
    echo "<pre>";
    print_r($data);
    echo "</pre>";
});
//query builder not bettwen
Route::get('select/not-bettwen',function(){
    $data   =   DB::table('product')->whereNotBetween('gia', [100000, 400000])->get();
    echo "<pre>";
    print_r($data);
    echo "</pre>";
});
//query builder where in
Route::get('select/where-in',function(){
    $data   =   DB::table('product')->whereIn('gia', [100000,200000,400000])->get();
    echo "<pre>";
    print_r($data);
    echo "</pre>";
});
//query builder count
Route::get('count-row',function(){
    $data   =   DB::table('product')->count();
    echo $data;
});
//query builder max
Route::get('max',function(){
    $data   =   DB::table('product')->max('gia');
    echo number_format($data);
});
//query builder min
Route::get('min',function(){
    $data   =   DB::table('product')->min('gia');
    echo number_format($data);
});
//query builder avg
Route::get('avg',function(){
    $data   =   DB::table('product')->avg('gia');
    echo number_format($data);
});
//query builder sun
Route::get('sum',function(){
    $data   =   DB::table('product')->sum('gia');
    echo number_format($data);
});
//query builder join
Route::get('query/join',function(){
    $data   =   DB::table('product')->select('product.name','product.gia')->join('category','category.id','=','product.cate_id')->get();
    echo "<pre>";
    print_r($data);
    echo "</pre>";
});
//query builder insert
Route::get('query/insert',function(){
    DB::table('product')->insert(array( 'name' => 'quan thung lo','gia'  => 500000,'cate_id'   =>  2 ));
});
//query builder insert return id 
Route::get('query/insert-id',function(){
    $id =   DB::table('product')->insertGetId(
        array(
           'name'       => 'quan thun',
           'gia'        => 400000,
            'cate_id'   =>1
            )
    );

    echo $id;
});
//query builder update
Route::get('query/update',function(){
    $data   =   DB::table('product')->where('id',2)->update(['gia'=> 2000000]);
});
//query builder delete
Route::get('query/delete',function(){
    DB::table('product')->where('id',2)->delete();
});


Route::get('select-product','NewController@selectProduct');

Route::get('model/select-all',function(){
    $data   =   App\product::all()->tojSon();
    echo "<pre>";
    print_r($data);
    echo "</pre>";
});

Route::get('model/select-id',function(){
    $data   =   App\product::find(1)->toArray();
    echo "<pre>";
    print_r($data);
    echo "</pre>";
});

Route::get('model/where',function(){
    $data   =   App\product::where('gia','>',100000)->get()->toArray();
    echo "<pre>";
    print_r($data);
    echo "</pre>";

    
});

Route::get('model/take',function(){
    $data   =   App\product::where('gia','>',100000)->select('name')->take(2)->get()->toArray();
   //$data   =   DB::table('product')->offset(0)->take(2)->get()->toArray();
    echo "<pre>";
    print_r($data);
    echo "</pre>";

    
});

Route::get('model/count',function () {
    $data   =   App\product::all()->count();
    echo $data;
});


Route::get('model/whereRaw',function(){
    $data   =   App\product::whereRaw('gia = ?',[200000])->get()->toArray();
   //$data   =   DB::table('product')->offset(0)->take(2)->get()->toArray();
    echo "<pre>";
    print_r($data);
    echo "</pre>";

    
});

Route::get('model/insert',function () {
    $product            = new App\Product;
    $product->name      = 'tui xach 1';
    $product->gia       = 450000;
    $product->cate_id   =   2;
    $product->save();
});

Route::get('model/create',function() {
    App\Product::create(['name'=>'tui xach 10','gia'=>'230000' ,'cate_id'=>'2']);
});

Route::get('model/delete',function () {
    $data   =   App\Product::where('id','=',3);
    $data->delete();
});

Route::get('model/update',function () {
    $data   =   App\Product::find(4);
    $data->name ='Tui xach hoi xin';
    $data->save();
   
});

Route::get('relation/one-many',function(){
    $data   =   App\Product::find(1)->images()->get()->toArray();
    echo "<pre>";
    print_r($data);
    echo "</pre>";
});

Route::get('relation/one-many-one',function(){
    $data   =   App\images::find(7)->product()->get()->toArray();
    echo "<pre>";
    print_r($data);
    echo "</pre>";
});

Route::get('show-pagination','ProductController@index');