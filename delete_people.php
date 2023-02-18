<?php
require("connect.php");

$id=$_GET["id"];

$sql="DELETE FROM survey WHERE id=$id";
$conn->query($sql);
header( "location: list_people.php" );
?>