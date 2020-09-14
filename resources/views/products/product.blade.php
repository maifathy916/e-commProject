<html>
<head>
    <title>Product Detials</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="table">
            <div class="card-header">Destails of :{{$product->name}}</div>
            <div class="card-header"><a href="/products">Back</a></div>
            <table class="table table-bordered">
                <thead>
                <th>Id</th>
                <th>Name</th>
                <th>Image</th>
                
                <th>Price</th>
                <th>Quantity</th>
                </thead>
                    <tr>
                        <td>{{$product->id}}</td> 
                        <td>{{$product->name}}</td>
       <td><img src="{{asset('uploads').'\\'.$product->image}}" width="150" height="150"></td>
                       
                        <td>{{$product->price}}</td>
                        <td>{!!$product->quantity!!}</td>
                    </tr>
            </table>
        </div>
    </div>
</div>
</body>
</html>
