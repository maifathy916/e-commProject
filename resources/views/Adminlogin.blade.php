<html>
	<head>
		<title>Login page</title>
		<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}


</style>
	</head>

	<body style="background-image:url('images/4648.jpg');background-size:cover">
	<form action="{{route('admin_page')}}" method="get">
	<center>
			<table >
				<tr>
				<td><label> <b style="color:white;font-size:25">username:</b></label></td>
				<td><input type='text' name='user' style="font-size:25"></td></tr>
				<tr><td><label> <b style="color:white;font-size:25">password:</b></label></td>
				<td><input type='password' name='pass' style="font-size:25"></td>
				</tr>
			   <tr><td><input type='submit' value='Log in' style="color:white;font-weight:bold;font-size:37;background:LightCoral">
				</td>
				</tr>
			<br>
			</table>
			<br>
			</center>
			</form>
	</body>
</html>
