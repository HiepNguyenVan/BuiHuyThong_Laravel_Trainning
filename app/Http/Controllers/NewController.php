<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
{
    public function action(){
       return view('view',['hoten' => 'Bui Huy Thong']);
    }
}
