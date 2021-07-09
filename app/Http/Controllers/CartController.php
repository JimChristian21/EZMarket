<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    function index(){
        return view('layouts.cart');
    }
    function show(){
        return view('prodDetails.checkout');
    }
}
