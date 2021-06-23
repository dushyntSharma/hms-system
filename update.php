DOCTYPE html>

<html>

<head>

<title></title>

<link href="style1.css" rel="stylesheet" type="text/css">

</head>

<body>

<div class="maindiv">

<div class="divA">

<div class="title">

<h2>Update Data Using PHP</h2>

</div>

<div class="divB">

<div class="divD">

<p>Click On Menu</p>

<?php

$connection = mysql_connect("localhost", "root", "");

$db = mysql_select_db("company", $connection);

if (isset($_GET['submit'])) {

$id = $_GET['did'];

$name = $_GET['dname'];

$email = $_GET['demail'];

$mobile = $_GET['dmobile'];

$address = $_GET['daddress'];

$query = mysql_query("update employee set

employee_name='$name', employee_email='$email', employee_contact='$mobile',

employee_address='$address' where employee_id='$id'", $connection);

}

$query = mysql_query("select * from employee", $connection);

while ($row = mysql_fetch_array($query)) {

echo "<b><a href='updatephp.php?update={$row['employee_id']}'>{$row['employee_name']}</a></b>";

echo "<br />";

}

?>

</div><?php

if (isset($_GET['update'])) {

$update = $_GET['update'];

$query1 = mysql_query("select * from employee where employee_id=$update", $connection);

while ($row1 = mysql_fetch_array($query1)) {

echo "<form class='form' method='get'>";

echo "<h2>Update Form</h2>";

echo "<hr/>";

echo"<input class='input' type='hidden' name='did' value='{$row1['employee_id']}' />";

echo "<br />";

echo "<label>" . "Name:" . "</label>" . "<br />";

echo"<input class='input' type='text' name='dname' value='{$row1['employee_name']}' />";

echo "<br />";

echo "<label>" . "Email:" . "</label>" . "<br />";

echo"<input class='input' type='text' name='demail' value='{$row1['employee_email']}' />";

echo "<br />";

echo "<label>" . "Mobile:" . "</label>" . "<br />";

echo"<input class='input' type='text' name='dmobile' value='{$row1['employee_contact']}' />";

echo "<br />";

echo "<label>" . "Address:" . "</label>" . "<br />";

echo "<textarea rows='15' cols='15' name='daddress'>{$row1['employee_address']}";

echo "</textarea>";

echo "<br />";

echo "<input class='submit' type='submit' name='submit' value='update' />";

echo "</form>";

}

}

if (isset($_GET['submit'])) {

echo '<div class="form" id="form3"><br><br><br><br><br><br>

<Span>Data Updated Successfuly......!!</span></div>';

}

?>

<div class="clear"></div>

</div>

<div class="clear"></div>

</div>

</div><?php

mysql_close($connection);

?>

</body>

</html>