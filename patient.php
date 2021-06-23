<?php

$patientname=$_POST['patientname'];
$patientid=$_POST['patientid'];
$wardno=$_POST['wardno'];
$disease=$_POST['disease'];
$age=$_POST['age'];
$phno=$_POST['phno'];
$cn=new mysqli("localhost","root","","patient") or die('not connected');
$cn->query("insert into patient values('$patientname','$patientid','$wardno','$disease','$age','$phno')");
echo "<script>alert('inserted successfully')</script>";
header("refresh:1; url=doctors.html");

?>