<!DOCTYPE html>
<html>

<body>
    <?php
    require("connect.php");
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


        echo "Name : " .$IDcard. " ".$tname."<br>";
    ?>
</body>
</html>
