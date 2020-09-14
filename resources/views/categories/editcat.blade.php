<html>
<head>
    <title>Edit products</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="card-header">Edit : {{$cat->name}}</div></div>
        <div class="">
            <form method="GET" action="/update/{{$cat->id}}">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <input type="text" name="name" placeholder="Category Name" value="{{$cat->name}}"
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
