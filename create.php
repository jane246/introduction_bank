
<!DOCTYPE html>
<html>
<head>
<title>ลงทะเบียน</title>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;       
    }
    body{      
       display: flex;
       align-items: center;
       justify-content: center;
       background:#a4b6d7;
       height: calc(var(--vh, 1vh) * 100);
       overflow: hidden;
       width: 90%;      
   }
    label{
        display: inline-block;
        width: 150px;
        margin-bottom: 10px;
        font-family:verdana;
        color: #000033;

    }
    p{
    	display: flex;
        align-items: center;
        justify-content: center;
    }
    .container0 {
        max-width:1110px;
        margin:0 auto;
    }
    nav{
        height: 60px;
        border: 1px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
</style>
</head>
<body>
<img src="./images/13.png" width="30%" height="70%">

<header>
    <div class="container0">
        <nav>
            <ul>
            <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

$sql = "SELECT All * FROM bank WHERE (email='$email') OR (account_name='$account_name')";
$result = $conn->query($sql);
$err = [];
if ($result->num_rows > 0){
    $row = $result->fetch_assoc();
    if($row['email']==$email && $row['account_name']==$account_name){
        echo "duplicate email and account name ";
        /*$sql="INSERT INTO wait(id_card,titlename,name,number,email,birthday,age,account_name,money,address,password)";
        $sql.=" VALUES('$id_card','$titlename','$name','$number','This email address is already in use','$birthday','$age','This account name address is already in use','$money','$address','$password')";
        $conn->query($sql);*/
        
    }
    else if($row['email']==$email){
        echo "duplicate email";
        /*$sql="INSERT INTO wait(id_card,titlename,name,number,email,birthday,age,account_name,money,address,password)";
        $sql.=" VALUES('$id_card','$titlename','$name','$number','This email address is already in use','$birthday','$age','$account_name','$money','$address','$password')";
        $conn->query($sql);*/
    }
    else if($row['account_name']==$account_name){
        echo "duplicate account name";
        /*$sql="INSERT INTO wait(id_card,titlename,name,number,email,birthday,age,account_name,money,address,password)";
        $sql.=" VALUES('$id_card','$titlename','$name','$number','$email','$birthday','$age','This account name address is already in use','$money','$address','$password')";
        $conn->query($sql);*/
    }
}
else{
    $sql="INSERT INTO bank(id_card,titlename,name,number,email,birthday,age,account_name,money,address,password)";
    $sql.=" VALUES('$id_card','$titlename','$name','$number','$email','$birthday','$age','$account_name','$money','$address','$password')";
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
}
?>
            </ul>
        </nav>
    </div>


<div class="container1">

<form action="create.php" method="post">
    <label>ID Card :</label> <input type="text" name="id_card" placeholder ="เลขบัตรประจำตัวประชาชน" required value = "<?php if (isset($id_card)){ echo $id_card;} ?>"><br>
    <label>Titie name :</label>
    <input type="radio" name="titlename" value="Mr" required >Mr</input>
    <input type="radio" name="titlename" value="Mrs" required >Mrs</input>
    <input type="radio" name="titlename" value="Miss" required >Miss</input><br>
    <label>Fullname :</label> <input type="text" name="name"placeholder ="ชื่อจริง-สกุลจริง" required value = "<?php if (isset($name)){ echo $name;} ?>"><br>
    <label>Phon number :</label> <input type="text" name="number" placeholder ="+66" required value = "<?php if (isset($number)){ echo $number;} ?>"><br>
    <span><?php //if (isset($err[0])){echo $err[0];} ?></span>
    <label>Email :</label> <input type="text" name="email" placeholder ="example@mail.com" required value = "<?php if (isset($email)){ echo $email;} ?>"><br>

    <!--<label>Birthday :</label> <input type="date" name="birthday" required><br>    
    <label>Age :</label> <input type="text" name="age"placeholder ="อายุ" required><br>
-->
    <label>Birthday :</label> <input type="date" id="birthday" name="birthday" required onkeydown="{getAge(this.value)};" value = "<?php if (isset($birthday)){ echo $birthday;} ?>">ENTER

        <script>
            function getAge(dateString) {
            var today = new Date();
            var birthday = new Date(dateString);
            var age = today.getFullYear() - birthday.getFullYear();
            var m = today.getMonth() - birthday.getMonth();
            if (m < 0 || (m == 0 && today.getDate() < birthday.getDate())) {age--;}
            if(age !=""){document.getElementById('age').value = age;}}
        </script>
    <label readonly="readonly"></label> <br>

    <label>Age :</label> <input type="text" id="age" name="age" required value = "<?php if (isset($age)){ echo $age;} ?>"><br>
    <label>Account name :</label> <input type="text" name="account_name"placeholder ="ชื่อบัญชี" required value = "<?php if (isset($account_name)){ echo $account_name;} ?>"> <br>
    <label>Money :</label> <input type="text" name="money" placeholder ="เงินฝากเริ่มต้น" required value = "<?php if (isset($money)){ echo $money;} ?>"><br>
    <label>Address :</label> <input type="text" name="address" placeholder ="Bangkok Thailand" required value = "<?php if (isset($address)){ echo $address;} ?>"><br>
    <label>Password :</label> <input type="text" name="password" placeholder ="รหัสผ่าน" required value = "<?php if (isset($password)){ echo $password;} ?>"><br>
    <p><input type="submit" value="CREATE" style="background-color:#003366; color:white; font-size:15px; border-radius:5px; font-family:verdana;"></p>
</div>
</header>
</form>
</html>
