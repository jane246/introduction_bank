<!DOCTYPE html>
<html>

<body>  
    Money <input type = "text" name = "deposit"><br>
    <?php
    require("connect.php");
    $account_id=$_GET["account_id"];
    $deposit=$_GET["deposit"] ;
    $deposit = $row['money'] + deposit;
    $sql = "UPDATE bank set money = '{$deposit}' WHERE account_id='$account_id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0)
        $row = $result->fetch_assoc();
    ?>
</body>
</html>