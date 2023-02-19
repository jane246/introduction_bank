<title>ลงทะเบียน</title>
<style>
    body {
        --primary: 25,91,255;
        --color: 44, 62, 80;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        background: #f5b8e7;
        height: calc(var(--vh, 1vh) * 100);
        overflow: hidden;
        color: rgb(var(--color));
        width: 100%;
        height: 100vh;
    }
    label{
        display: inline-block;
        width: 100px;
        margin-bottom: 10px;
    }
</style>
<body>

<form action="save_create_people.php" method="post">
    <label>ID Card :</label> <input type="text" name="id_card" placeholder ="เลขบัตรประจำตัวประชาชน"><br>
    <label>Titie name :</label> <select name="titlename">
        <option value="select">select</option>
        <option value="Mr">Mr</option>
        <option value="Mrs">Mrs</option>
        <option value="Ms">Ms</option>
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
    <input type="submit" value="CREATE">
</form>