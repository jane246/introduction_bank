<!DOCTYPE html>
<html>
<body>
<?php
    require("connect.php");
    $account_id=$_GET["account_id"];
    $withdraw=$_GET["withdraw"];
    $comment=$_GET["comment"];
    
    $sql = "SELECT money FROM bank WHERE account_id='$account_id'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0)
        $row = $result->fetch_assoc();
        //$sum=$row['money']+$deposit;

        $with = $row['money'] - $withdraw;

        $sql = "INSERT INTO statement(account_id,deposit,withdraw,time,comment)";
        $sql.=" VALUES('$account_id','0',$withdraw,NOW(),'$comment')";
        $conn->query($sql);


        $sql = "UPDATE bank SET money = '{$with}' WHERE account_id = '{$account_id}'";
        $conn->query($sql);
        $conn->close();
        header( "location: data_people.php?account_id=$account_id" );
?>  

</form>
</body>
</html>