<?php
$con=mysqli_connect("localhost","root","","billing");
mysqli_select_db($con,'tutorial');
$patientname=$_POST['patientname'];
$patientid=$_POST['patientid'];
$wardno=$_POST['wardno'];
$disease=$_POST['disease'];
$amount=$_POST['amount'];
$date=$_POST['date'];
$phno=$_POST['phno'];
$sql="update billing set patientname='$patientname',patientid='$patientid',wardno='$wardno',disease='$disease',amount='$amount',date='$date',phno='$phno' WHERE patientid='$patientid'";
if(mysqli_query($con,$sql))
	header("refresh:1; url=updatebilling.php");
else
	echo"not updated";
?>