<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HelloController extends Controller
{
    // http://127.0.0.1:8000/hello/fred
    public function index($name){
        Log::info("HelloController name : $name");
        $age = 48;
        // return view('hello',["name"=>$name]);

        return view('hello',compact('age','name'));
    }
}
