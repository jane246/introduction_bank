<?php
require("connect_db.php");

$IDcard=$_POST["IDcard"];
$tname=$_POST["tname"];
$name=$_POST["name"];
$number=$_POST["number"];
$email=$_POST["email"];
$birthday=$_POST["birthday"];
$age=$_POST["age"];
$username=$_POST["username"];
$money=$_POST["money"];
$address=$_POST["address"];
$password=$_POST["password"];


//echo "fname:$fname lname:$lname age:$age sex:$sex marry_status:$marry_status";
$sql="INSERT INTO survey(IDcard,tname,name,number,email,birthday,age,username,money,address,password)";
$sql.=" VALUES('$IDcard','$tname','$name','$number','$email','$birthday','$age','$username','$money','$address','$password')";
$conn->query($sql);
header( "location: list_people.php" );
?>