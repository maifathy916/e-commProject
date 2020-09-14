<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
     public function Admin()
    {
    	return view('admin');
    }
public function Welcom(){
  return view('welcome');
}
     public function Cart()
    {
    	return view('card');
    }

     public function Category()
    {
    	return view('categ');
    }

     public function Electric()
    {
    	return view('electric');
    }

     public function Adminlogin()
    {
    	return view('Adminlogin');
    }

    
      public function Phone()
    {
    	return view('phone');
    }

     public function Product()
    {
    	return view('product');
    }

     public function User()
    {
    	return view('user');
    }

    public function UserProuct()
    {
    	return view('userpro');
    }



}
