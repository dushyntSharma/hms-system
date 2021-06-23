<?php
$patientid=$_GET['delname'];
$cn=new mysqli("localhost","root","","patient");
echo var_dump($cn->query("DELETE FROM PATIENT WHERE PATIENTID='$patientid'"));
echo "<script>location.href='deletepatient.php'</script>";
?>