<?php
mysql_connect('54.243.183.105', 'room_user', 'password') or die(mysql_error());

echo "connection successful\n";

mysql_select_db("users") or die(mysql_error());

$result = mysql_query("SELECT * FROM users") or die(mysql_error());

echo "after result check\n";
$nresult = mysql_num_rows($result);

$row = mysql_fetch_array($result) or die(mysql_error());

echo "$nresult returned:\n";
echo $row['name'];
?>


