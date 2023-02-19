<?php
require("connect.php");

$account_id=$_GET["account_id"];

$sql="DELETE FROM survey WHERE id=$id";
$conn->query($sql);
header( "location: index.php" );
?>