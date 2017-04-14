<?php
// Content of database.php
 
$mysqli = new mysqli('localhost', 'cse330', 'wustl123', 'creativeproject');
 
if($mysqli->connect_errno) {
	printf("Connection Failed: %s\n", $mysqli->connect_error);
	exit;
}
?>