<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CitiesController extends Controller
{


    public function index(){
        $names=['Ahmed','Mahmoud','Ali'];
        return view('welcome',compact('names'));
    }
    public function waled(){
        return view('Waleed');
    }
    public function admin(){
        return view('admin.index');
    }
}
