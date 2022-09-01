<?php
$servername = "localhost";
$username = "root";
$password = "a4a49c778b201dbbd9e43e7d7c@123";
$dbname = "mahindra";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else
	//echo "conneted successfully<br>";

?>