<?php

$patientname=$_POST['patientname'];
$patientid=$_POST['patientid'];
$wardno=$_POST['wardno'];
$disease=$_POST['disease'];
$amount=$_POST['amount'];
$date=$_POST['date'];
$phno=$_POST['phno'];
$cn=new mysqli("localhost","root","","billing") or die('not connected');
$cn->query("insert into billing values('$patientname','$patientid','$wardno','$disease','$amount','$date','$phno')");
echo "<script>alert('inserted successfully')</script>";
header("refresh:1; url=billing.html");

?>