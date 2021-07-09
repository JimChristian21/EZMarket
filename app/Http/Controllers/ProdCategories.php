<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdCategories extends Controller
{
    //
    function index(){
        return view('layouts.categories');
    }
}
