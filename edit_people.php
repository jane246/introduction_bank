<!DOCTYPE html>
<html>
<body>
<?php
    require("connect.php");
    $account_id=$_GET["account_id"];

    $sql = "SELECT * FROM bank WHERE account_id='$account_id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        }
    }
    ?>    
<form action="save_edit_people.php" method="post">
    <input type="hidden" name="id" value="<?php print($row["id"]); ?>">
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
</html>