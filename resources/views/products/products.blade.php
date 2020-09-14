<html>
<head>
    <title>All Products</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="table">
            <div class="card-header">Products</div>
            <div class="card-header"><a href="/products/create" class="btn btn-primary">New Product</a></div>
            
            <table class="table table-bordered">
                <thead>
                <th>Id</th>
                <th>Name</th> 
                 <th>Image</th>
                <th>Price</th>
                 <th>Quantity</th>
                <th>Details</th>
                <th>Action</th>
                </thead>
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
       <td><img src="{{asset('uploads').'\\'.$product->image}}" width="150" height="150"></td>
                        <td>{{$product->price}}</td>
                        <td>{!!$product->quantity!!}</td>
                        <td><a href="/products/{{$product->id}}" class="btn btn-dark">Show</a> </td>
                        <td>
                            <form method="post" action="/products/{{$product->id}}">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger">Delete</button>
                            </form>
                            <a href="/products/{{$product->id}}/edit" class="btn btn-warning">Edit</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
</body>
</html>
