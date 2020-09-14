
	@extends('layouts.app')

@section('content')
<html>
	<head>
		<title>Admin Page</title>	</head>
<body style="background-image:url('images/2.jpg')">

  
       

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
					<h1 style="font-size:25; text-align:center">welcome to your profile </h1> 
							  
	<a href="{{route('home2')}}"><button style="width:160px;height:50px;padding:1 15px;margin-left:40%;margin-top:2%;border-radius:8px;background-color:‎#f5a6b2;text-align:center;font-weight:bold;font-size:20;">
	Show Categories</button></a>
	<a href="{{'products'}}"><button style="width:160px;height:50px;padding:1 15px;margin-left:40%;margin-top:2%;border-radius:8px;background-color:‎#f5a6b2;text-align:center;font-weight:bold;font-size:20;">
	Show Products</button></a>
	<br>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
@endsection