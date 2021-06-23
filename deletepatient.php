<html>
<body>
<link href="display.css" rel="stylesheet" type="text/css">
<form action="deletepatient1.php" method="GET">
<table>
<tr>
<th> patientname</th>
<th> patientid </th>
<th> wardno </th> 
<th> disease </th>
<th> age </th>
<th> phno </th>
</tr>
<?php
$cn=new mysqli("localhost","root","","patient") or die("Connection failed");
$result=$cn->query("SELECT * FROM patient");
//echo var_dump($result);
while($row=$result->fetch_array()){
 $name=$row[0];
 echo"<tr><td>".$row["patientname"]."</td><td>".$row["patientid"]."</td><td>".$row["wardno"]."</td><td>".$row["disease"]."</td><td>".$row["age"]."</td><td>".$row["phno"].'</td><td><button name="delname" type="submit" value="'.$row["patientid"].'">Delete</button></td></tr>';
}
?>
<td><button><a href="patient.html">Back</a></button>
</table>
</form>
</body>
</html>
