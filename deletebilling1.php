<?php
$patientid=$_GET['delname'];
$cn=new mysqli("localhost","root","","billing");
echo var_dump($cn->query("DELETE FROM BILLING WHERE PATIENTID='$patientid'"));
echo "<script>location.href='deletebilling.php'</script>";
?>