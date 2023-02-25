<?php
require("connect.php");

$id_card=$_SESSION["id_card"];
$titlename=$_SESSION["titlename"];
$name=$_SESSION["name"];
$number=$_SESSION["number"];
$email=$_SESSION["email"];
$birthday=$_SESSION["birthday"];
$age=$_SESSION["age"];
$account_name=$_SESSION["account_name"];
$money=$_SESSION["money"];
$address=$_SESSION["address"];
$password=$_SESSION["password"];
//echo "fname:$fname lname:$lname age:$age sex:$sex marry_status:$marry_status";
//echo "IDcard:$id_card tname:$titlename flname:$name pnumber:$number email:$email birthday:$birthday age:$age username:$account_name mmoney:$money aaddress:$address ppassword:$password";
//$sql="INSERT INTO bankdb(IDcard,tname,flname,pnumber,email,birthday,age,username,mmoney,aaddress,ppassword)";

$sql = "SELECT All * FROM bank WHERE (email='$email') OR (account_name='$account_name')";
$result = $conn->query($sql);
    
if ($result->num_rows > 0){
    $row = $result->fetch_assoc();
    if($row['email']==$email && $row['account_name']==$account_name){
        $sql="INSERT INTO wait(id_card,titlename,name,number,email,birthday,age,account_name,money,address,password)";
        $sql.=" VALUES('$id_card','$titlename','$name','$number','This email address is already in use','$birthday','$age','This account name address is already in use','$money','$address','$password')";
        $conn->query($sql);
        header( "location: create.php" );
        
    }
    else if($row['email']==$email){
        $sql="INSERT INTO wait(id_card,titlename,name,number,email,birthday,age,account_name,money,address,password)";
        $sql.=" VALUES('$id_card','$titlename','$name','$number','This email address is already in use','$birthday','$age','$account_name','$money','$address','$password')";
        $conn->query($sql);
        header( "location: create.php" );
    }
    else if($row['account_name']==$account_name){
        $sql="INSERT INTO wait(id_card,titlename,name,number,email,birthday,age,account_name,money,address,password)";
        $sql.=" VALUES('$id_card','$titlename','$name','$number','$email','$birthday','$age','This account name address is already in use','$money','$address','$password')";
        $conn->query($sql);
        header( "location: create.php" );
    }
}
else{
    $sql="INSERT INTO bank(id_card,titlename,name,number,email,birthday,age,account_name,money,address,password)";
    $sql.=" VALUES('$id_card','$titlename','$name','$number','$email','$birthday','$age','$account_name','$money','$address','$password')";
    $conn->query($sql);

    $sql="DELETE FROM wait";
    $conn->query($sql);
    $conn->close();
    header("location: show_save_create_people.php");
}
/*$sql="INSERT INTO bank(id_card,titlename,name,number,email,birthday,age,account_name,money,address,password)";
$sql.=" VALUES('$id_card','$titlename','$name','$number','$email','$birthday','$age','$account_name','$money','$address','$password')";
$conn->query($sql);
$conn->close();*/
//echo $sql;
//header( "location: data_people.php" );
?>