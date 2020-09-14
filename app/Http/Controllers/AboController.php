<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboController extends Controller
{
    public function __construct()
    {
        $this->middleware('productCheck');
    }

    public function ss(){
        return view('ss');
    }
}
