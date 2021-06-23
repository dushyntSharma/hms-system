<?php

$doctorname=$_POST['doctorname'];
$doctorid=$_POST['doctorid'];
$course=$_POST['course'];
$branch=$_POST['branch'];
$gender=$_POST['gender'];
$phoneno=$_POST['phoneno'];
$cn=new mysqli("localhost","root","","doctor") or die('not connected');
$cn->query("insert into doctor values('$doctorname','$doctorid','$course','$branch','$gender','$phoneno')");
echo "<script>alert('inserted successfully')</script>";
	header("refresh:1; url=doctors.html");

	
?>