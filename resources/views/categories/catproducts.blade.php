<html>
<head>
    <title>All Categories </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="table">
            <div class="card-header">categories</div>
            <div class="card-header"><a href="/create" class="btn btn-primary">New Category</a></div>
           
            <table class="table table-bordered">
                <thead>
                <th>Id</th>
                <th>Name</th> 
                 <th>Image</th>
                <th>Details</th>
                <th>Action</th>
                </thead>
                @foreach($cats as $cat)
                    <tr>
                        <td>{{$cat->id}}</td>
                        <td>{{$cat->name}}</td>


       <td><img src="{{asset('uploads').'\\'.$cat->image}}" width="150" height="150"></td>
       
                
                        <td><a href="/categories/{{$cat->id}}" class="btn btn-dark">Show</a> </td>
                        <td>
                            <form method="GET" action="/deletecat/{{$cat->id}}">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger">Delete</button>
                            </form>
                            <a href="/categories/{{$cat->id}}/edit" class="btn btn-warning">Edit</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
</body>
</html>
