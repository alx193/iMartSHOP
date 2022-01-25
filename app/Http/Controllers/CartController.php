<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    function addtoCart(Request $req)
    {
        if($req->session()->has('user'))
        {
            return "hello";
        }
            return redirect('/login');
    }
}
