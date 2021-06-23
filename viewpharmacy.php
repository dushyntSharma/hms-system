<!DOCTYPE html>
<html>
<head>
<title>table</title>
<link href="display.css" rel="stylesheet" type="text/css">
</head>
<body>
<table>
<tr>
<th> patientname</th>
<th> patientid </th>
<th> disease </th>
<th> tablets </th> 
<th> amount </th>
<th> phno </th>
</tr>



<?php
$conn=mysqli_connect("localhost","root","","pharmacy");
if($conn->connect_error) {
die("connection failed:". $conn->connect_error);
}

$sql="select patientname,patientid,disease,tablets,amount,phno from pharmacy";
$result=$conn->query($sql);

if($result->num_rows>0) 
{
while($row=$result->fetch_assoc())
{
echo"<tr><td>".$row["patientname"]."</td><td>".$row["patientid"]."</td><td>".$row["disease"]."</td><td>".$row["tablets"]."</td><td>".$row["amount"]."</td><td>".$row["phno"]."</td><td>";
}
echo"</table>";
}
else{
echo "0 result";
}

$conn->close();
?>
</table>
<td><button><a href="pharmacy.html">BACK</a></button>
</body>
</html>