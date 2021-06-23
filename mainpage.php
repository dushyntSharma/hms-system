<?php
	session_start();
	require_once('dbconfig/config.php');
	//phpinfo();
?>
<!DOCTYPE html>
<html>
<head>
	<title>MAIN PAGE</title>
	<link href="style1.css" rel="stylesheet" type="text/css">
</head>
<body>
	<header>
		<div class="row">
			<div class="logo">
				<img src="cross.png">
			</div>
			<ul class="main-nav">
				<li class="active"><a href="index.php"> HOME </a></li>
				<li><a href="doctors.html"> DOCTORS </a></li>
				<li><a href="nurses.html"> NURSES </a></li>
				<li><a href="patient.html"> PATIENT RECORD </a></li>
				<li><a href="billing.html"> BILLING </a></li>
				<li><a href="pharmacy.html"> PHARMACY </a></li>
				<li><a href=""> LOGOUT </a></li>
			</ul>
		</div>



		<div class="hospital">
		<h1>
			HOSPITAL MANAGEMENT SYSTEM
		</h1>
	</div>

	</header>



</body>
</html>