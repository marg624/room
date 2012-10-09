<?php
$conn =  new mysqli('54.243.183.105', 'room_user', 'password', 'room', '');
if (!$conn) {
    die('Could not connect: ' . mysql_error());
}
echo 'connection successful';
$result = $conn->query("SELECT * FROM users;");
$row = $result->fetch_assoc();
echo $row['name'];
?>


