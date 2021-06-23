<?php
$patientid=$_GET['delname'];
$cn=new mysqli("localhost","root","","pharmacy");
echo var_dump($cn->query("DELETE FROM PHARMACY WHERE PATIENTID='$patientid'"));
echo "<script>location.href='deletepharmacy.php'</script>";
?>