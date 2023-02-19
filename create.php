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
        background-image: url(https://i.insider.com/5c7fe48d262898027532ae26?width=1200&format=jpeg://img.freepik.com/premium-vector/bank-buildings-seamless-background-backdrop-financial-business-banking-website-economical-theme-ads-information-credits-savings-vector-wallpaper-web-site-background_570429-16311.jpg);
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
    ID Card : <input type="text" name="id_card"><br>
    Titie name : <select name="titlename">
        <option value="select">select</option>
        <option value="Mr">Mr</option>
        <option value="Mrs">Mrs</option>
        <option value="Ms">Ms</option>
    </select><br>
    First name - Last name : <input type="text" name="name"><br>
    Phon number : <input type="text" name="number"><br>
    Email : <input type="text" name="email"><br>
    Birthday : <input type="date" name="birthday"><br>
    Age : <input type="text" name="age"><br>
    Account name : <input type="text" name="account_name"><br>
    Money : <input type="text" name="money"><br>
    Address : <input type="text" name="address"><br>
    Password : <input type="text" name="password"><br>
    <input type="submit" value="CREATE">
</form>
</body>