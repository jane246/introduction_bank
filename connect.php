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
echo "เชื่อมต่อระบบฐานข้อมูลสำเร็จ";

/*$link = mysqli_connect($servername, $username, $password, $db_name);
if(!$link)
echo "Connection failed";

date_default_timezone_set("Asia/Bangkok");
if(!$link->set_charset("utf8"))
echo "Can't set charector UTF"*/

?>