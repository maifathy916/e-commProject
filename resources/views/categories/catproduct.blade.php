<html>
<head>
    <title>category Detials</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="table">
            <div class="card-header">Destails of :{{$cat->name}}</div>
            <div class="card-header"><a href="/home2">Back</a></div>
            <table class="table table-bordered">
                <thead>
                <th>Id</th>
                <th>Name</th>
                <th>Image</th>
                
                </thead>
                    <tr>
                        <td>{{$cat->id}}</td> 
                        <td>{{$cat->name}}</td>
       <td><img src="{{asset('uploads').'\\'.$cat->image}}" width="150" height="150"></td>
                       
                    </tr>
            </table>
        </div>
    </div>
</div>
</body>
</html>
