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
</head>
<body>
    <form>
        <img src="./images/forget1.png" width="100px" height="100px"><br>
        <br>
        <a>Account created successfully</a>
        <br>  
        <a href="login.php">Go to the next page</a>             
    </form>  
</body>
</html>