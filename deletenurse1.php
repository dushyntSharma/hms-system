<?php
$nurseid=$_GET['delname'];
$cn=new mysqli("localhost","root","","nurse");
echo var_dump($cn->query("DELETE FROM NURSE WHERE NURSEID='$nurseid'"));
echo "<script>location.href='deletenurse.php'</script>";
?>