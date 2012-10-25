

<?php
echo "<html><head><title>Roommate Finder</title></head><body>";
$conn =  new mysqli('54.243.183.105', 'room_user_all', 'password', 'room',3306);
if($conn->connect_errno){
   echo "connection failed<br>";
} else echo "connection worked";

$n = $_POST["name"];
echo "name: $n";
$p = $_POST["pw"];
echo "pw $p";

if(!$conn->query("INSERT INTO users(name, password) VALUES ($n, $p)")) {
	echo "insert failed";
} else echo "Welcome $n !";

echo "<br>";

$result = $conn->query("SELECT name FROM users");

if(!$result){
   echo "query failed";
} 

echo "<br><br>All users:<br>";

//$row = $result->fetch_assoc();

while($row = $result->fetch_assoc())
{
  echo $row['name'];
  echo "<br>";
}

//echo $row['name'];

$conn -> close();

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


