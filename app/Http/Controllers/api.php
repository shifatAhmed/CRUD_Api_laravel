<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class api extends Controller
{
    function getdata(){
        return ["name"=>"one"];
    }
}
