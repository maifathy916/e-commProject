@extends('layouts.app')

@section('content')
<html>
	<head>
		<title>User Page</title>
	</head>   
	<body style="background-image:url('images/pngtree-business-man-office-scene-design-png-image_4029208.jpg');background-size:cover">
		
	<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">MY Account</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
					<h1 style="font-size:25; text-align:center">welcome to your profile </h1>
	      <a href="/index2"><button style="font-size:30;width:160px;height:50px;padding:1 15px;margin-left:40%;margin-top:2%;border-radius:8px;background-color:SkyBlue;text-align:center;font-weight:bold;">
		  Show Products</button></a>
	       <br>
	     <a href="/cart"><button style="font-size:30;width:160px;height:50px;padding:1 15px;margin-left:40%;margin-top:2%;border-radius:8px;background-color:SkyBlue;text-align:center;font-weight:bold;">
		 Show Carts</button></a>
	       <br>
	
		   </div>
            </div>
        </div>
    </div>
</div>
	</body>
</html>
@endsection