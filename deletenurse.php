<html>
<body>
<link href="display.css" rel="stylesheet" type="text/css">
<form action="deletenurse1.php" method="GET">
<table>
<tr>
<th> nursename</th>
<th> nurseid </th>
<th> spcl </th> 
<th> workhrs </th>
<th> phno </th>
</tr>	
<?php
$cn=new mysqli("localhost","root","","nurse") or die("Connection failed");
$result=$cn->query("SELECT * FROM nurse");
//echo var_dump($result);
while($row=$result->fetch_array()){
 $name=$row[0];
 echo '<tr><td>'.$row["nursename"] ."</td><td>" .$row["nurseid"] ."</td><td>"   .$row["spcl"] ."</td><td>"   .$row["workhrs"] ."</td><td>"   .$row["phno"].'</td><td><button name="delname" type="submit" value="'.$row["nurseid"].'">Delete</button></td></tr>';
}
?>
<td><button><a href="nurses.html">Back</a></button>
</table>
</form>
</body>
</html>
