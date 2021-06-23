<?php
$con=mysqli_connect("localhost","root","","patient");
mysqli_select_db($con,'tutorial');
$patientname=$_POST['patientname'];
$patientid=$_POST['patientid'];
$wardno=$_POST['wardno'];
$disease=$_POST['disease'];
$age=$_POST['age'];
$phno=$_POST['phno'];
$sql="update patient set patientname='$patientname',patientid='$patientid',wardno='$wardno',disease='$disease',age='$age',phno='$phno' WHERE patientid='$patientid'";
if(mysqli_query($con,$sql))
	header("refresh:1; url=updatepatient.php");
else
	echo"not updated";
?>