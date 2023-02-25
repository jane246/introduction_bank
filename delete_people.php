<?php
require("connect.php");

$account_id=$_GET["account_id"];

$sql="DELETE FROM bank WHERE account_id='$account_id'";
$conn->query($sql);

$sql="DELETE FROM statement";
$conn->query($sql);
$conn->close();
header( "location: index.php" );
?>