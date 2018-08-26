<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{
    public function index () {

        $data   =   Product::paginate(4);

       return view('product',compact('data'));
    }
}
