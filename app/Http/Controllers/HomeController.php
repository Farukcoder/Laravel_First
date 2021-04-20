<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class HomeController extends Controller
{
    function ShowHome(){
        return view('Home');
    }

    function registration(){
        return view('registration');
    }
}
