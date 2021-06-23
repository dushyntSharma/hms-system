<!DOCTYPE html>
<html>
<head>
<title>table</title>
<link href="display.css" rel="stylesheet" type="text/css">
</head>
<body>
<table>
<tr>
	
<th> doctoname</th>
<th> doctorid </th>
<th> course </th> 
<th> branch </th> 
<th> gender </th> 
<th> phoneno </th> 
<th> action </th> 
<th> cdate </th> 

</tr>



<?php
$conn=mysqli_connect("localhost","root","","doctor");
if($conn->connect_error) {
die("connection failed:". $conn->connect_error);
}

$sql="select doctorname,doctorid, course, branch, gender, phoneno, action, cdate from logs";
$result=$conn->query($sql);

if($result->num_rows>0) 
{
while($row=$result->fetch_assoc())
{
echo"<tr><td>".$row["doctorname"]."</td><td>".$row["doctorid"]."</td><td>".$row["course"]."</td><td>".$row["branch"]."</td><td>".$row["gender"]."</td><td>".$row["phoneno"]."</td><td>".$row["action"]."</td><td>".$row["cdate"]."</td></tr>";
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