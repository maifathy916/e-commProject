<html>
<head>
    <title>Edit products</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="card-header">Edit : {{$product->name}}</div></div>
        <div class="">
            <form method="post" action="/products/{{$product->id}}">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <input type="text" name="name" placeholder="Products Name" value="{{$product->name}}"
                           class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" name="price" placeholder="Your Price" value="{{$product->price}}"
                           class="form-control">
                </div>
                  <div class="form-group">
                    <input type="text" name="quantity" placeholder="Your Quantity" value="{{$product->quantity}}"
                           class="form-control">
                </div>
              
                <div class="form-group">
                    <input type="submit" value="Update" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>
<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'summary-ckeditor' );
</script>
</body>
</html>
