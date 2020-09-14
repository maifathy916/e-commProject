<html>
<head>
    <title>Add Category</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="card-header">Add Category</div>
        <div class="">
            <form method="post" action="/storecat" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input type="text" name="name" placeholder="Category Name" class="form-control">
                </div>
                <p>Category Image</p>

                <div class="form-group">
                    <input type="file" name="image" placeholder="Category Images" class="form-control-file">
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
