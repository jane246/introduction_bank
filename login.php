<!DOCTYPE html>
<html>
<head>
<title>ลงชื่อเข้าใช้</title>
<style>
   body {
        --primary: 237, 73, 86;
        --color: 44, 62, 80;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        height: 100vh;
        background: #F1F3F6;
        height: calc(var(--vh, 1vh) * 100);
        overflow: hidden;
        color: rgb(var(--color));
    }
</style>
</head>
<body>
    <form action="checklogin.php" method="post">
        <img src="./images/login1.png" width="100px" height="100px"><br>
        <br>
        <br>
        Username : <input type = "text" name = "account_name"><br>
        Password : <input type = "text" name = "password"><br>
        <br>
        <input type = "submit" value = "Login">
        <br>  
        <a href="forget.php">FORGET</a>
        <a href="create.php?">CREATE</a>              
    </form> 
</body>
</html>
