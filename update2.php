<?php
$con=mysqli_connect("localhost","root","","doctor");
mysqli_select_db($con,'tutorial');
$doctorname=$_POST['doctorname'];
$doctorid=$_POST['doctorid'];
$course=$_POST['course'];
$branch=$_POST['branch'];
$gender=$_POST['gender'];
$phoneno=$_POST['phoneno'];
$sql="update doctor set doctorname='$doctorname',doctorid='$doctorid',course='$course',branch='$branch',gender='$gender',phoneno='$phoneno' WHERE doctorid='$doctorid'";
if(mysqli_query($con,$sql))
	header("refresh:1; url=update1.php");
else
	echo"not updated";
?>