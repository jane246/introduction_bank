<?php
$servername = "localhost";
$username = "cpe224";
$password = "123456";
$db_name = "bankdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}