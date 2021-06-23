<?php

$patientname=$_POST['patientname'];
$patientid=$_POST['patientid'];
$disease=$_POST['disease'];
$tablets=$_POST['tablets'];
$amount=$_POST['amount'];
$phno=$_POST['phno'];
$cn=new mysqli("localhost","root","","pharmacy") or die('not connected');
$cn->query("insert into pharmacy values('$patientname','$patientid','$disease','$tablets','$amount','$phno')");
echo "<script>alert('inserted successfully')</script>";
header("refresh:1; url=pharmacy.html");
?>