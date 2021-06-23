<html>
<head>
<title>update records in mysql database</title>
</head>
<body>
<link href="display.css" rel="stylesheet" type="text/css">
<?php
$con=mysqli_connect("localhost","root","","doctor");
mysqli_select_db($con,'tutorial');
$sql="select * from doctor";
$records=mysqli_query($con,$sql);
?>
<table>
<tr>
<th>doctorname</th>
<th>doctorid</th>
<th>course</th>
<th>branch</th>
<th>gender</th>
<th>phoneno</th>
</tr>
<?php
while($row=mysqli_fetch_array($records))
{
	echo "<tr><form action=update2.php method=post>";
	echo "<td><input type=text name='doctorname' value='".$row['doctorname']."'</td>";
	echo "<td><input type=text name='doctorid' value='".$row['doctorid']."'</td>";
	echo "<td><input type=text name='course' value='".$row['course']."'</td>";
     echo "<td><input type=text name='branch' value='".$row['branch']."'</td>";
    echo "<td><input type=text name='gender' value='".$row['gender']."'</td>";
     echo "<td><input type=text name='phoneno' value='".$row['phoneno']."'</td>";
	 echo "<input type=hidden name='doctorid' value='".$row['doctorid']."'>";
	 echo "<td><input type=submit></td>";
	 echo "</form></tr>";
}
?>
<td><button><a href="doctors.html">Back</a></button>
</body>
</html>