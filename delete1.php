<html>
<body>
<link href="display.css" rel="stylesheet" type="text/css">
<form action="delete2.php" method="GET">
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
$cn=new mysqli("localhost","root","","doctor") or die("Connection failed");
$result=$cn->query("SELECT * FROM DOCTOR");
//echo var_dump($result);
while($row=$result->fetch_array()){
 $name=$row[0];
 echo '<tr><td>'.$row["doctorname"] ."</td><td>" .$row["doctorid"] ."</td><td>"   .$row["course"] ."</td><td>"   .$row["branch"] ."</td><td>"   .$row["gender"] ."</td><td>"   .$row["phoneno"].'</td><td><button name="delname" type="submit" value="'.$row["doctorid"].'">Delete</button></td></tr>';
}
?>
<td><button><a href="doctors.html">Back</a></button>
</table>
</form>
</body>
</html>
