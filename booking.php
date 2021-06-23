<?php
$name=$_POST['name'];
$doctorname=$_POST['doctorname'];
$date=$_POST['date'];

$cn=new mysqli("localhost","root","","book") or die('not connected');
$cn->query("insert into book values('$name','$doctorname','$date')");
echo "<script>alert('inserted successfully')</script>";
	header("refresh:1; url=booking.html");
?>