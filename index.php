<?php
$conn =  new mysqli('localhost', 'room_user', 'password', 'room', '');
$result = $conn->query("SELECT * FROM users;");
$row = $result->fetch_assoc();
echo $row['name'];
?>


