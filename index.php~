<?php
$conn =  new mysqli('54.243.183.105', 'room_user', 'password', 'room', '');
if (!$conn) {
    die('Could not connect: ' . mysql_error());
}
echo 'connection successful';
$result = mysql_query("SELECT * FROM users");
if(!$result) {
	die("Unable to run query");
}
echo "after result check";
$nresult = mysql_num_rows($result);
$row = mysql_fetch_array($result) or die(mysql_error());
echo '$nresult returned:';
echo $row['name'];
?>


