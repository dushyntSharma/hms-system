<!DOCTYPE html>
<html>
<head>
<title>table</title>
<link href="display.css" rel="stylesheet" type="text/css">
</head>
<body>
<table>
<tr>
<th> nursename</th>
<th> nurseid </th>
<th> spcl </th> 
<th> workhrs </th>
<th> phno </th>
</tr>



<?php
$conn=mysqli_connect("localhost","root","","nurse");
if($conn->connect_error) {
die("connection failed:". $conn->connect_error);
}

$sql="select nursename,nurseid,spcl,workhrs,phno from nurse";
$result=$conn->query($sql);

if($result->num_rows>0) 
{
while($row=$result->fetch_assoc())
{
echo"<tr><td>".$row["nursename"]."</td><td>".$row["nurseid"]."</td><td>".$row["spcl"]."</td><td>".$row["workhrs"]."</td><td>".$row["phno"]."</td><td>";
}
echo"</table>";
}
else{
echo "0 result";
}

$conn->close();
?>
</table>
<td><button><a href="nurses.html">BACK</a></button>
</body>
</html>