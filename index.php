<?php

$conn =  new mysqli('http://ec2-54-243-183-105.compute-1.amazonaws.com', 'room_user', 'password', 'room', '');
$result = $conn->query("SELECT name FROM users;");
$row = $result->fetch_assoc();
echo $row['name'];

/*$conn = mysql_connect('54.243.183.105', 'room_user', 'password');

if(!$conn) {
   die('no connection');	
}

echo 'connection successful\n';

mysql_select_db('room') or die(mysql_error());

$result = mysql_query('SELECT * FROM users') or die(mysql_error());

echo 'after result check';
$nresult = mysql_num_rows($result);

$row = mysql_fetch_array($result) or die(mysql_error());

echo '$nresult returned:';
echo $row['name']; */
?>


