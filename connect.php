<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "bank";

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

/*$link = mysqli_connect($servername, $username, $password, $db_name);
if(!$link)
echo "Connection failed";

date_default_timezone_set("Asia/Bangkok");
if(!$link->set_charset("utf8"))
echo "Can't set charector UTF"*/

?>