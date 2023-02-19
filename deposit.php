<!DOCTYPE html>
<html>

<body>  

    Money <input type = "text" name = "deposit"><br> 
    <?php
    require("connect.php");
    $account_id=$_GET["account_id"];

    $sql = "UPDATE bank set $money = $money+200 WHERE account_id='$account_id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        }
    }
    ?>
</body>
</html>