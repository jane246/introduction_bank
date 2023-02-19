<?php
require("connect.php");

$account_id=$_GET["account_id"];

$sql="DELETE FROM bank WHERE account_id='$account_id'";
$conn->query($sql);
header( "location: index.php" );
?>