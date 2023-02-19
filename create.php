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
    <label>ID Card :</label> <input type="text" name="id_card" placeholder ="เลขบัตรประจำตัวประชาชน"><br>
    <label>Titie name :</label> <select name="titlename">
        <option value="select">select</option>
        <option value="Mr">Mr</option>
        <option value="Mrs">Mrs</option>
        <option value="Miss">Miss</option>
    </select><br>
    <label>Fullname :</label> <input type="text" name="name"placeholder ="ชื่อจริง-สกุลจริง"><br>
    <label>Phon number :</label> <input type="text" name="number" placeholder ="+66"><br>
    <label>Email :</label> <input type="text" name="email" placeholder ="example@mail.com"><br>
    <label>Birthday :</label> <input type="date" name="birthday"><br>
    <label>Age :</label> <input type="text" name="age"placeholder ="อายุ"><br>
    <label>Account name :</label> <input type="text" name="account_name"placeholder ="ชื่อบัญชี"> <br>
    <label>Money :</label> <input type="text" name="money" placeholder ="เงินฝากเริ่มต้น"><br>
    <label>Address :</label> <input type="text" name="address" placeholder ="Bangkok Thailand"><br>
    <label>Password :</label> <input type="text" name="password" placeholder ="รหัสผ่าน"><br>
    <p><input type="submit" value="CREATE" style="background-color:#003366; color:white; font-size:15px; border-radius:5px; font-family:verdana;"></p>
</form>
</html>