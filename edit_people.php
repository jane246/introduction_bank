<!DOCTYPE html>
<html>
<body>
<?php
    require("connect.php");
    $account_id=$_GET["account_id"];

    $sql = "SELECT * FROM bank WHERE account_id='$account_id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0)
        $row = $result->fetch_assoc();
?>
    <a>EDIT</a>    
<form action="save_edit_people.php" method="post">
    <input type="hidden" name="account_id" value="<?php print($row["account_id"]); ?>">
    Titie name : <select name="titlename">
        <option value="select"<?php if($row["titlename"]=="select") print("selected"); ?>>select</option>
        <option value="Mr"<?php if($row["titlename"]=="Mr") print("selected"); ?>>Mr</option>
        <option value="Mrs"<?php if($row["titlename"]=="Mrs") print("selected"); ?>>Mrs</option>
        <option value="Ms"<?php if($row["titlename"]=="Ms") print("selected"); ?>>Ms</option>
    </select><br>
    First name - Last name : <input type="text" name="name" value="<?php print($row["name"]); ?>"><br>
    Phon number : <input type="text" name="number" value="<?php print($row["number"]); ?>"><br>
    Email : <input type="text" name="email" value="<?php print($row["email"]); ?>"><br>
    Age : <input type="text" name="age" value="<?php print($row["age"]); ?>"><br>
    Account name : <input type="text" name="account_name" value="<?php print($row["account_name"]); ?>"><br>
    Address : <input type="text" name="address" value="<?php print($row["address"]); ?>"><br>
    Password : <input type="text" name="password" value="<?php print($row["password"]); ?>"><br>
    <input type="submit" value="EDIT">
</form>
</body>
</html>