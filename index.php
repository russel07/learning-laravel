<?php
  echo 'hello world!!!';
  echo '<br/> File has been modified';
$servername = "db4free.net";
$username = "russel0507";
$password = "RusselBd12@2020";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
