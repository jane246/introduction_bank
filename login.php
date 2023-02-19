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
    <form action="checklogin.php" method="post">
        <p><img src="./images/login1.png" width="300px" height="300px"></p><br>
        <br>
        <label>Username :</label> <input type = "text" name = "account_name" placeholder ="ชื่อบัญชี"> <br>
        <label>Password :</label> <input type = "text" name = "password"placeholder ="รหัสผ่าน"><br>
        <br>
        <botton><p><input type = "submit" value = "Login"></p></botton>
        <br>  
        <a href="forget.php">FORGET</a>
        <a href="create.php?">CREATE</a>  
                    
    </form> 
</body>
</html>