<?php
$servername = "172.28.0.3";
$username = "root";
$password = "my_secret_pw_shh";

$conn = new mysqli($servername, $username, $password, "test_db", "3306");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>