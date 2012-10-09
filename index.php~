

<?php
echo "<html><head><title>index - testing mysql conn</title></head><body>";
$conn =  new mysqli('54.243.183.105', 'room_user', 'password', 'room');
if($conn->connect_errno){
   echo "connection failed";
} else echo "connection made";

echo "<br>";

if(!$conn->query("INSERT INTO users(name, password) VALUES ('myname', 'pw')")) {
	echo "insert failed";
} else echo "query insert worked";

echo "<br>";

$result = $conn->query("SELECT name FROM users");

if(!$result){
   echo "query failed";
} else echo "query select worked";

echo "<br>";

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


