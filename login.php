

<!DOCTYPE html>
<html>
<head>
<title>ลงชื่อเข้าใช้</title>
<style>
    body{
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        background: #a4b6d7;
        overflow: hidden;
        background-image: url();
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat; 
    }
    p{
        display: flex;
        align-items: center;
        justify-content: center;
    }
    label{
        display: inline-block;
        width: 150px;
        margin-bottom: 10px;
        font-size: 180%;
    }
    </style>
</head>
<body>
    <form action="login.php" method="post">
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require("connect.php");
    $account_name=$_POST["account_name"];
    $password=$_POST["password"];
    $account_id="";
    //echo $account_name.$password;
    $sql = "SELECT * FROM bank WHERE password='$password' AND account_name='$account_name'";
    $result = $conn->query($sql);
    $conn->close();
//แก้ไข
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $account_id=$row["account_id"];
    header( "location: data_people.php?account_id=$account_id");
  }
} else {
        echo "Password or Username does not match";
        echo "<br>";
        echo "Please do it again";
}
}
?>
        <p><img src="./images/login.png" width="250px" height="200px"></p><br>
        <label>Username :</label> <input type = "text" name = "account_name" placeholder ="ชื่อบัญชี" required> <br>
        <label>Password :</label> <input type = "text" name = "password"placeholder ="รหัสผ่าน" required><br>
         
        <a href="forget.php">FORGET</a>
        <a href="create.php?">CREATE</a>  
        <br>
        <p><input type = "submit" value = "Login" style = "background-color:#003366; color:white; font-size:30px; border-radius:5px;"></p>
                    
    </form> 
</body>
</html>