<html>
<head>
<title>update records in mysql database</title>
</head>
<body>
<link href="display.css" rel="stylesheet" type="text/css">
<?php
$con=mysqli_connect("localhost","root","","billing");
mysqli_select_db($con,'tutorial');
$sql="select * from billing";
$records=mysqli_query($con,$sql);
?>
<table>
<tr>
<th> patientname</th>
<th> patientid </th>
<th> wardno </th> 
<th> disease </th>
<th> amount </th>
<th> date </th>
<th> phno </th>
</tr>
<?php
while($row=mysqli_fetch_array($records))
{
	echo "<tr><form action=updatebilling1.php method=post>";
	echo "<td><input type=text name='patientname' value='".$row['patientname']."'</td>";
	echo "<td><input type=text name='patientid' value='".$row['patientid']."'</td>";
	echo "<td><input type=text name='wardno' value='".$row['wardno']."'</td>";
     echo "<td><input type=text name='disease' value='".$row['disease']."'</td>";
	 echo "<td><input type=text name='amount' value='".$row['amount']."'</td>";
	 echo "<td><input type=text name='date' value='".$row['date']."'</td>";
    echo "<td><input type=text name='phno' value='".$row['phno']."'</td>";
	 echo "<input type=hidden name='patientid' value='".$row['patientid']."'>";
	 echo "<td><input type=submit></td>";
	 echo "</form></tr>";
}
?>
<td><button><a href="billing.html">Back</a></button>
</body>
</html>