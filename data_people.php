<!DOCTYPE html>
<html>

<body>
    <?php
    require("connect.php");
    $id_card=$_POST["IDcard"];
    $titlename=$_POST["tname"];
    $name=$_POST["name"];
    $number=$_POST["number"];
    $email=$_POST["email"];
    $birthday=$_POST["birthday"];
    $age=$_POST["age"];
    $account_name=$_POST["username"];
    $money=$_POST["mmoney"];
    $address=$_POST["aaddress"];
    $password=$_POST["ppassword"];


        echo "Name : " .$id_card. " ".$name."<br>";
    ?>
</body>
</html>
