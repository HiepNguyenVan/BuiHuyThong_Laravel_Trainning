<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function showInfo(){
       return view('thongtin');
    }

    public function testAction(){
        echo "Day la mot action trong welcomecontroller";
        return redirect()->route('hcm');
    }
}
