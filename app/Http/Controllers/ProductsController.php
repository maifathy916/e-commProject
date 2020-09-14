<?php

namespace App\Http\Controllers;
use App\Product;
use App\Cat;
use Validator;

use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function index2()
    {
        $products= Product::all()->where('status',1);
        $cats= Cat::all();
        return view('productss',compact('products','cats'));
    }
 
    public function cart()
    {
        return view('cart2');
    }
    public function addToCart($id)
    {
        $product = Product::find($id);
 
        if(!$product) {
 
            abort(404);
 
        }
   $quantity = $product->quantity;
    if($quantity > 0)
    {
      $product->quantity = $quantity - 1;
      $product->save();
    }
   
 
        $cart = session()->get('cart');
 
        // if cart is empty then this the first product
        if(!$cart) {
 
            $cart = [
                    $id => [
                        "name" => $product->name,
                        "quantity" => 1,
                        "price" => $product->price,
                        "image" => $product->image
                    ]
            ];
 
            session()->put('cart', $cart);
 
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
 
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {
 
            $cart[$id]['quantity']++;
 
            session()->put('cart', $cart);
 
            return redirect()->back()->with('success', 'Product added to cart successfully!');
 
        }
 
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->price,
            "image" => $product->image
        ];
 
        session()->put('cart', $cart);
 
        return redirect()->back()->with('success', 'Product added to cart successfully!');
 
    }


public function update2(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');
 
            $cart[$request->id]["quantity"] = $request->quantity;
 
            session()->put('cart', $cart);
 
            session()->flash('success', 'Cart updated successfully');
        }
    }
 
    public function remove2(Request $request)
    {
        if($request->id) {
 
            $cart = session()->get('cart');
 
            if(isset($cart[$request->id])) {
 
                unset($cart[$request->id]);
 
                session()->put('cart', $cart);
            }
 
            session()->flash('success', 'Product removed successfully');
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products= Product::all()->where('status',1);
        $cats= Cat::all();
        return view('products.products',compact('products','cats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

 $validation = Validator::make($request->all(), [
    'name' => 'required',
    'price' => 'required',
    'quantity' => 'required',
    'image' => 'required|image|mimes:jpeg,png,jpg,gif,JPG,PNG,JPEG,GIF'
      ]);

       
        if(isset( $request->image )){
            // $fileWithExt=$request->image->getClientOriginalName();
            // $fileWithoutExt=pathinfo($fileWithExt,PATHINFO_FILENAME);
            // $fileExt=$request->image->getClientOriginalExtension();
            // $fileNewName=$fileWithoutExt."_".time().".".$fileExt;
            // $path=$request->image->storeAs('public/storage/cat_img',$fileNewName);
            $photo =  $request->image;
             $fileName = time() .'.'. $photo->getClientOriginalExtension();
             $destinationPath = public_path('uploads/');

       

       
           $photo->move($destinationPath, $fileName);
            $fileNewName=  $fileName;
            // return $fileNewName;
        }else{
            $fileNewName='noimage.jpg';
        }
      
        $product= new Product();
        $product->name=$request->name;
        $product->price=$request->price;
        $product->quantity=$request->quantity;
        $product->image=$fileNewName;
        $product->save();
        return redirect('/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product=Product::find($id);
        return view('products.product',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=Product::find($id);
        return view('products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product=Product::find($id);
        $product->name=$request->name;
        $product->price=$request->price;
        $product->quantity=$request->quantity;
        $product->save();
        return redirect('/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=Product::find($id);
        $product->status=0;
        $product->save();
        return redirect('/products');
    }
}
