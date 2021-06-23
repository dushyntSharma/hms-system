<!DOCTYPE html>
<html>
<head>
<title>table</title>
<link href="display.css" rel="stylesheet" type="text/css">
</head>
<body>
<table>
<tr>
	<th> name </th>	
	<th> doctorname</th>
	<th> date </th> 
	
</tr>



<?php
$conn=mysqli_connect("localhost","root","","book");
if($conn->connect_error) {
die("connection failed:". $conn->connect_error);
}

$sql="select name,doctorname,date from book";
$result=$conn->query($sql);

if($result->num_rows>0) 
{
while($row=$result->fetch_assoc())
{
echo"<tr><td>".$row["name"]."</td><td>".$row["doctorname"]."</td><td>".$row["date"]."</td></tr>";
}
echo"</table>";
}
else{
echo "0 result";
}

$conn->close();
?>
</table>
<td><button><a href="mainpage.html">BACK</a></button>
</body>
</html>