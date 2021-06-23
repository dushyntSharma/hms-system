<?php
$con=mysqli_connect("localhost","root","","nurse");
mysqli_select_db($con,'tutorial');
$nursename=$_POST['nursename'];
$nurseid=$_POST['nurseid'];
$spcl=$_POST['spcl'];
$workhrs=$_POST['workhrs'];
$phno=$_POST['phno'];
$sql="update nurse set nursename='$nursename',nurseid='$nurseid',spcl='$spcl',workhrs='$workhrs',phno='$phno' WHERE nurseid='$nurseid'";
if(mysqli_query($con,$sql))
	header("refresh:1; url=updatenurse.php");
else
	echo"not updated";
?>