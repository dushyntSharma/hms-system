<?php
/*For My LocalPC*/
$con=mysqli_connect ("localhost", "root","", "user") or die ('I cannot connect to the database because: ' . mysql_error());
mysqli_select_db ($con,'user');
?>



