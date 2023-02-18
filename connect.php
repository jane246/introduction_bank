<?php
$servername = "localhost";
$username = "bankdb";
$password = "YES";
$db_name = "bankdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}