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
<body>

<form action="save_create_people.php" method="post">
    ID Card : <input type="text" name="id_card" placeholder ="เลขบัตรประจำตัวประชาชน"><br>
    Titie name : <select name="titlename">
        <option value="select">select</option>
        <option value="Mr">Mr</option>
        <option value="Mrs">Mrs</option>
        <option value="Ms">Ms</option>
    </select><br>
    First name - Last name : <input type="text" name="name"placeholder ="ชื่อจริง-สกุลจริง"><br>
    Phon number : <input type="text" name="number" placeholder ="+66"><br>
    Email : <input type="text" name="email" placeholder ="example@mail.com"><br>
    Birthday : <input type="date" name="birthday"><br>
    Age : <input type="text" name="age"placeholder ="อายุ"><br>
    Account name : <input type="text" name="account_name"placeholder ="ชื่อบัญชี"> <br>
    Money : <input type="text" name="money" placeholder ="เงินฝากเริ่มต้น"><br>
    Address : <input type="text" name="address" placeholder ="Bangkok Thailand"><br>
    Password : <input type="text" name="password" placeholder ="รหัสผ่าน"><br>
    <input type="submit" value="CREATE">
</form>