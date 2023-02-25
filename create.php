<!DOCTYPE html>
<html>
<head>
<title>ลงทะเบียน</title>
<style>
    body {
       
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
</style>
</head>
<body>
<img src="./images/12.png" align-items="left" width="35%" height="85%">
<form action="save_create_people.php" method="post">
    <label>ID Card :</label> <input type="text" name="id_card" placeholder ="เลขบัตรประจำตัวประชาชน" required><br>
    <label>Titie name :</label>
    <input type="radio" name="titlename" value="Mr" required>Mr</input>
    <input type="radio" name="titlename" value="Mrs" required>Mrs</input>
    <input type="radio" name="titlename" value="Miss" required>Miss</input><br>
    <label>Fullname :</label> <input type="text" name="name"placeholder ="ชื่อจริง-สกุลจริง" required><br>
    <label>Phon number :</label> <input type="text" name="number" placeholder ="+66" required><br>
    <label>Email :</label> <input type="text" name="email" placeholder ="example@mail.com" required><br>

    <!--<label>Birthday :</label> <input type="date" name="birthday" required><br>    
    <label>Age :</label> <input type="text" name="age"placeholder ="อายุ" required><br>
-->
    <label>Birthday :</label> <input type="date" id="birthday" name="birthday" required onkeydown="{getAge(this.value)};">ENTER

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

    <label>Age :</label> <input type="text" id="age" name="age" required><br>
    <label>Account name :</label> <input type="text" name="account_name"placeholder ="ชื่อบัญชี" required> <br>
    <label>Money :</label> <input type="text" name="money" placeholder ="เงินฝากเริ่มต้น" required><br>
    <label>Address :</label> <input type="text" name="address" placeholder ="Bangkok Thailand" required><br>
    <label>Password :</label> <input type="text" name="password" placeholder ="รหัสผ่าน" required><br>
    <p><input type="submit" value="CREATE" style="background-color:#003366; color:white; font-size:15px; border-radius:5px; font-family:verdana;"></p>
</form>
</html>