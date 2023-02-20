<?php
require("connect.php");
$account_id=$_POST["account_id"];
$titlename=$_POST["titlename"];
$name=$_POST["name"];
$number=$_POST["number"];
$email=$_POST["email"];
$age=$_POST["age"];
$account_name=$_POST["account_name"];
$address=$_POST["address"];
$password=$_POST["password"];
//echo "fname:$fname lname:$lname age:$age sex:$sex marry_status:$marry_status";
//echo "IDcard:$id_card tname:$titlename flname:$name pnumber:$number email:$email birthday:$birthday age:$age username:$account_name mmoney:$money aaddress:$address ppassword:$password";
//$sql="INSERT INTO bankdb(IDcard,tname,flname,pnumber,email,birthday,age,username,mmoney,aaddress,ppassword)";
$sql="UPDATE bank set titlename='$titlename',name='$name',number='$number',email='$email',age='$age',account_name='$account_name',address='$address',password='$password' WHERE account_id='$account_id'";
$conn->query($sql);
$conn->close();
//echo $sql;
header( "location: data_people.php?account_id=$account_id" );
?>