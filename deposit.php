<!DOCTYPE html>
<html>
<body>
<?php
    require("connect.php");
    $account_id=$_GET["account_id"];
    $deposit=$_GET["deposit"];
    $comment=$_GET["comment"];
    $sql = "SELECT * FROM bank WHERE account_id='$account_id'";
    
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0)
        $row = $result->fetch_assoc();
        //$sum=$row['money']+$deposit;
        $sql = "INSERT INTO statement(account_id,deposit,time,comment)";
        $sql.=" VALUES('$account_id','$deposit',NOW(),'$comment')";
        $conn->query($sql);
        
?>  

</form>
</body>
</html>