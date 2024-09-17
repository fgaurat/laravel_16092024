<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EvenController extends Controller
{
    public function calc(Request $req) {

        $numberValue =$req->input("numberValue");
        $result =$numberValue%2;
        $v = $result == 1?view("is_even.odd"):view("is_even.even");

        return $v;
    }
}
