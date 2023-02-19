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
        background: #a4b6d7;
        
    }
    a1{
        font-family:Impact;
        font-size: 300%;
        display: flex;
        align-items: center;
        justify-content: center;
     	height: 85vh;
        color:black;
    }
    a{
    	display: flex;
        align-items: center;
        justify-content: center;
        color:black;
        font-size: 150%;
        
    }
</style>
</head>
<body>
    <form>
        <br>
        <a1><b>Account created successfully</b></a1>
        <br>  
        <a href="login.php"><i>Back to the login page</i></a>             
    </form>  
</body>
</html>