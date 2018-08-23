<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\HocSinhRequest;

class HocSinhController extends Controller
{
    public function index(HocSinhRequest $rq){
       $data    =   $rq->all();

       echo "<pre>";
       print_r($data);
       echo "</pre>";
    }
}
