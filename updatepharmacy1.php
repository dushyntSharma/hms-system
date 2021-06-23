<?php
$con=mysqli_connect("localhost","root","","pharmacy");
mysqli_select_db($con,'tutorial');
$patientname=$_POST['patientname'];
$patientid=$_POST['patientid'];
$disease=$_POST['disease'];
$tablets=$_POST['tablets'];
$amount=$_POST['amount'];
$phno=$_POST['phno'];
$sql="update pharmacy set patientname='$patientname',patientid='$patientid',disease='$disease',tablets='$tablets',amount='$amount',phno='$phno' WHERE patientid='$patientid'";
if(mysqli_query($con,$sql))
	header("refresh:1; url=updatepharmacy.php");
else
	echo"not updated";
?>