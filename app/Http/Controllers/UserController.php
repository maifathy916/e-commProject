<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

	 public function index()
  {
    $products = Product::all();
        return view('products.products',compact('products'));
  }


    public function addToCart($id)
  {
    $product = Product::find($id);
    session()->put('products.'.$id,$id);

    $quantity = $product->quantity;
    if($quantity > 0)
    {
      $product->quantity = $quantity - 1;
      $product->save();
    }

    return back();
  }

  public function history()
  {
    if(session()->has('products'))
    {
    $products=[];
    foreach(session('products') as $session)
    {
      $products[]= Product::find($session);
    }
    return view("history",compact('products'));
   }
    return back();
  }



   public function shop()
    {
        $products = Product::all();
        dd($products);
        return view('shop')->withTitle('E-COMMERCE STORE | SHOP')->with(['products' => $products]);
    }

    public function cart()  {
        $cartCollection = \Cart::getContent();
        dd($cartCollection);
        return view('cart')->withTitle('E-COMMERCE STORE | CART')->with(['cartCollection' => $cartCollection]);;
    }
}
