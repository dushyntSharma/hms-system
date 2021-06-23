<html>
<head>
<title>update records in mysql database</title>
</head>
<body>
<link href="display.css" rel="stylesheet" type="text/css">
<?php
$con=mysqli_connect("localhost","root","","nurse");
mysqli_select_db($con,'tutorial');
$sql="select * from nurse";
$records=mysqli_query($con,$sql);
?>
<table>
<tr>
<th> nursename</th>
<th> nurseid </th>
<th> spcl </th> 
<th> workhrs </th>
<th> phno </th>
</tr>
<?php
while($row=mysqli_fetch_array($records))
{
	echo "<tr><form action=updatenurse1.php method=post>";
	echo "<td><input type=text name='nursename' value='".$row['nursename']."'</td>";
	echo "<td><input type=text name='nurseid' value='".$row['nurseid']."'</td>";
	echo "<td><input type=text name='spcl' value='".$row['spcl']."'</td>";
     echo "<td><input type=text name='workhrs' value='".$row['workhrs']."'</td>";
    echo "<td><input type=text name='phno' value='".$row['phno']."'</td>";
	 echo "<input type=hidden name='nurseid' value='".$row['nurseid']."'>";
	 echo "<td><input type=submit></td>";
	 echo "</form></tr>";
}
?>
<td><button><a href="nurses.html">Back</a></button>
</body>
</html>