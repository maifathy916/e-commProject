<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('css/app.css')}}" >
    <title>@yield('title')</title>
    <style rel="stylesheet">
        .heading{color:red;}
    </style>
</head>
<body>
<img src="{{asset('img/akwadna.jpg')}}" width="250px" height="250px"/>
<center>@yield('heading')</center>
</body>
</html>
