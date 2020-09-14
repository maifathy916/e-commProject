<html>
    <head>
        <title>Home Page</title>
        <style>
        button{
        width:160px;
        height:50px;
        padding:1 15px;
        margin-left:40%;
        margin-top:2%;
        border-radius:8px;
        background-color:#92dbfe;
        text-align:center;
        font-weight:bold;
        font-size:20;
        }
        button a{
        text-decoration:none;}
        
        </style>
    </head>
    <body style="background-image:url('images/1.jpg');background-size:cover">
      
    <a href="{{route('ADlogin')}}"><button>Admin</button></a>
   
    <a href="{{route('login') }}"><button>User</button></a>
    <br>
    

    </body>
</html>