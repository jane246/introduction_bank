

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
        background-image: url(https://c4.wallpaperflare.com/wallpaper/743/421/76/geometry-abstract-lines-digital-art-wallpaper-preview.jpg);
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
        color:white;
    }
    a{
        color:#76D7C4;
    }
    a1{
        color:#FDFEFE;
        font-size: 130%;

    }
    .btn{
	display: block;
	width: 100%;
	height: 50px;
	border-radius: 25px;
	outline: none;
	border: none;
	background-image: linear-gradient(to right, #32be8f, #38d39f, #32be8f);
	background-size: 200%;
	font-size: 1.2rem;
	color: #fff;
	font-family: 'Poppins', sans-serif;
	text-transform: uppercase;
	margin: 1rem 0;
	cursor: pointer;
	transition: .5s;
}
.btn:hover{
	background-position: right;
}

.input{
    height: 45px;
    width: 87%;
    border: none;
    outline: none;
    border-radius: 30px;
    color: #fff;
    padding: 0 0 0 45px;
    background: rgba(255,255,255,0.1);
}    
.input-field{
    display: flex;
    flex-direction: column;
}
i{
    position: relative;
    top: -33px;
    left: 17px;
    color: #fff;
}
::-webkit-input-placeholder{
    color: #fff;
}

    </style>
</head>
<body>
    <div class="from-0">
    <form action="login.php" method="post">
        <a1>
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
</a1>
        <p><img src="./images/login.png" width="250px" height="200px"></p>
        <!--<label>Username :</label> -->
        <div class="input-field">
            <input class="input" type = "text" name = "account_name" placeholder ="Username(ชื่อบัญชี)" required>
            <i>
                <ion-icon name="person-outline"></ion-icon>
            </i>
        </div>
        <!--<label>Password :</label> -->
        <div class="input-field">
            <input class="input" type = "text" name = "password"placeholder ="Password(รหัสผ่าน)" required>            
            <i>
                <ion-icon name="lock-closed-outline"></ion-icon>
            </i>
        </div>
        <a href="forget.php">FORGET</a><br>
        <a>Don't have an account?  </a><a href="create.php?">CREATE</a>  
        <br>
        <p><input type = "submit" value = "Login" class="btn"></p>
                    
    </form> 
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
