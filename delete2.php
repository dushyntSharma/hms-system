<?php
$doctorid=$_GET['delname'];
$cn=new mysqli("localhost","root","","doctor");
echo var_dump($cn->query("DELETE FROM DOCTOR WHERE DOCTORID='$doctorid'"));
echo "<script>location.href='delete1.php'</script>";
?>