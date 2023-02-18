<form action="save_create_people.php" method="post">
    ID Card : <input type="text" name="IDcard"><br>
        Titie name : <select name="tname">
            <option value="เลือก">เลือก</option>
            <option value="เด็กชาย">เด็กชาย</option>
            <option value="เด็กหญิง">เด็กหญิง</option>
            <option value="นาย">นาย</option>
            <option value="นาง">นาง</option>
            <option value="นางสาว">นางสาว</option>
        </select><br>
    First name - Last name : <input type="text" name="name"><br>
    Phon number : <input type="text" name="number"><br>
    Email : <input type="text" name="email"><br>
    Birthday : <input type="date" name="birthday"><br>
    Age : <input type="text" name="age"><br>
    Account name : <input type="text" name="username"><br>
    Money : <input type="text" name="money"><br>
    Address : <input type="text" name="address"><br>
    Password : <input type="text" name="password"><br>
    <input type="submit" value="CREATE">
</form>