<?php
$servername = "localhost";
$user_name = "root";
$password = "";
$database = "oclock";
// Create connection
$conn = mysqli_connect($servername, $user_name, $password,
$database);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
