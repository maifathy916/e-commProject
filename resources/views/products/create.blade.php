<html>
<head>
    <title>Add products</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="card-header">Add Products</div>
        <div class="">
            <form method="post" action="/products" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input type="text" name="name" placeholder="Products Name" class="form-control">
                </div>
                <p>Product Image</p>

                <div class="form-group">
                    <input type="file" name="image" placeholder="Product Images" class="form-control-file">
                </div>
                <div class="form-group">
                    <input type="text" name="price" placeholder="Your Price" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" name="quantity" placeholder="Your Quantity" class="form-control-file">
                </div>
                
                
                <div class="form-group">
                    <input type="submit" value="Save" class="btn btn-primary">
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
