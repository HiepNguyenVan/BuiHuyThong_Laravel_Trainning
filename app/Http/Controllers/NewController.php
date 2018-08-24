<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class NewController extends Controller
{
    public function action(){
       return view('view',['hoten' => 'Bui Huy Thong']);
    }

    public function selectProduct(){
        $data   =   DB::table('product')->get();

        return view('product.show',['product' => $data]);
    }
}
