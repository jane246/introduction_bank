<!DOCTYPE html>
<html>
<head>
<title>ลงชื่อเข้าใช้</title>
<style>
    body {
        --primary: 25,91,255;
        --color: 44, 62, 80;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        background: #a4b6d7;
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        height: calc(var(--vh, 1vh) * 100);
        overflow: hidden;
        color: rgb(var(--color));
        width: 100%;
        height: 100vh;
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
