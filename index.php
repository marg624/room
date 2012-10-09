<?php
$conn =  new mysqli('54.243.183.105', 'room_user', 'password', 'room', '');
if (!$conn) {
    die('Could not connect: ' . mysql_error());
}
echo 'connection successful';
$result = $conn->mysql_query("SELECT * FROM users")
	or die ("Unable to run query");
$nresult = mysql_num_rows($result);
$row = $result->fetch_assoc();
echo '$nresult returned:';
echo $row['name'];
?>


