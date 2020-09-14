
@extends('layout')
 
@section('title', 'Product')
 
@section('content')
 
    <div class="container products">
 
        <div class="row">


            @foreach($products as $product)
         @if($product->quantity>0)
                <div class="col-xs-18 col-sm-6 col-md-3">
                    <div class="thumbnail">
             <td><img src="{{asset('uploads').'\\'.$product->image}}" width="150" height="150"></td>
                        <div class="caption">
                            <h4>{{ $product->name }}</h4>
                            <p><strong>Price: </strong> {{ $product->price }}$</p>
                        
                            <p class="btn-holder"><a href="{{ url('add-to-cart/'.$product->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                        </div>
                    </div>
                </div>@endif
            @endforeach
        
 
        </div><!-- End row -->
 
    </div>
 
@endsection
