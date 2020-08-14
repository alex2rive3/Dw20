<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database="rb";
// Create connection
//$conn = new mysqli($servername, $username, $password,$database);
$conn =  mysqli_connect($servername, $username, $password,$database);
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>
