<?php
require("connect.php");

$id_card=$_POST["id_card"];
$titlename=$_POST["titlename"];
$name=$_POST["name"];
$number=$_POST["number"];
$email=$_POST["email"];
$birthday=$_POST["birthday"];
$age=$_POST["age"];
$account_name=$_POST["account_name"];
$money=$_POST["money"];
$address=$_POST["address"];
$password=$_POST["password"];
//echo "fname:$fname lname:$lname age:$age sex:$sex marry_status:$marry_status";
//echo "IDcard:$id_card tname:$titlename flname:$name pnumber:$number email:$email birthday:$birthday age:$age username:$account_name mmoney:$money aaddress:$address ppassword:$password";
//$sql="INSERT INTO bankdb(IDcard,tname,flname,pnumber,email,birthday,age,username,mmoney,aaddress,ppassword)";
$sql="INSERT INTO bank(id_card,titlename,name,number,email,birthday,age,account_name,money,address,password)";
$sql.=" VALUES('$id_card','$titlename','$name','$number','$email','$birthday','$age','$account_name','$money','$address','$password')";
$conn->query($sql);
//echo $sql;
//header( "location: data_people.php" );
?>
<!DOCTYPE html>
<html>
<head>
<title>BANK</title>
<style>
    body {
        --primary: 25,91,255;
        --color: 44, 62, 80;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        background: #f5b8e7;
        height: calc(var(--vh, 1vh) * 100);
        overflow: hidden;
        color: rgb(var(--color));
        width: 100%;
        height: 100vh;
    }
    a1{
        display: inline-block;
        width: 150px;
        margin-bottom: 10px;
        font-size: 300%;
    }
</style>
</head>
<body>
    <form>
        <br>
        <a1>Account created successfully</a1>
        <br>  
        <a href="login.php">Back to the login page</a>             
    </form>  
</body>
</html>