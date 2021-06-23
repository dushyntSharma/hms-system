<!DOCTYPE html>
<html>
<head>
	<title>login and registration</title>
	<link href="style1.css" rel="stylesheet" type="text/css">
</head>
<body>

	<div class="login-page">
			<div class="form">

				<form class="login-form">
					<input type="text" placeholder="username" name="username">
					<br>
					<input type="text" placeholder="password" name="password">
					</br>
					<button>
						<ul>
					<li><a href="index.html">LOGIN </a></li>
				</ul>
			</button>
					<p class="message">Not Registered? <a href="register.html">Register</a>
					</p>
				</form>
			</div>
		</div>
		
		
		<?php

$username=$_POST['username'];
$password=$_POST['password'];
$cn=new mysqli("localhost","root","","login") or die('not connected');
$cn->query("insert into login values('$username','$password')");
echo "<script>alert('inserted successfully')</script>";

?>

</body>
</html>