<?php

$nursename=$_POST['nursename'];
$nurseid=$_POST['nurseid'];
$spcl=$_POST['spcl'];
$workhrs=$_POST['workhrs'];
$phno=$_POST['phno'];
$cn=new mysqli("localhost","root","","nurse") or die('not connected');
$cn->query("insert into nurse values('$nursename','$nurseid','$spcl','$workhrs','$phno')");
echo "<script>alert('inserted successfully')</script>";
header("refresh:1; url=nurses.html");
?>