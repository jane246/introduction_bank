<!DOCTYPE html>
<html>
<body>
<?php
    require("connect.php");
    $account_id=$_GET["account_id"];
    $deposit=$_GET["deposit"];
    $sql = "SELECT * FROM bank WHERE account_id='$account_id'";
    
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0)
        $row = $result->fetch_assoc();
        //$sum=$row['money']+$deposit;
        $sql = "INSERT INTO statement(money)";
        $sql.=" VALUES('$deposit')";
        $conn->query($sql);
?>  

</form>
</body>
</html>