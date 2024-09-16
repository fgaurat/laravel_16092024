<?php

namespace App\Http\Controllers;

use App\Hello;
use App\HelloDep;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HelloController extends Controller
{
    // http://127.0.0.1:8000/hello/fred
    // http://127.0.0.1:8000/hello/fred?job=dev
    public function index($name,Request $req){

        $job = $req->input('job');

        Log::info("HelloController name : $name");
        $age = 48;
        // return view('hello',["name"=>$name]);

        return view('hello',compact('age','name','job'));
    }

    // http://127.0.0.1:8000/hello/show
    public function show(Hello $hello){
        dd($hello->sayHello());
    }

    // http://127.0.0.1:8000/hello/show
    public function show2(HelloDep $hello){
        dd($hello->sayHello());
    }
}
