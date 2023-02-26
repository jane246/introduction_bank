<!DOCTYPE html>
<html>
<style>
    body {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        background: #a4b6d7;
        overflow: hidden;
    }
    a1{
        font-family:Impact;
        font-size: 300%;
    }
    h1{
        display: flex;
        align-items: center;
        justify-content: center;   
    }
    a{
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 50%;
        color: #000;
    }
</style>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require("connect.php");
    $account_id = $_GET["account_id"];
    $to_account_id = $_GET["person"];
    $M = $_GET["M"];
    $comment = $_GET["comment"];

    $sql = "SELECT ALL * FROM bank WHERE account_id='$to_account_id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    if ($to_account_id == $row['account_id']) {
        $sql = "SELECT money FROM bank WHERE account_id='$account_id'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if ($M <= $row['money'] && $M >= '0') {
                $with = $row['money'] - $M;
                $sql = "INSERT INTO statement(account_id,deposit,withdraw,time,comment)";
                $sql .= " VALUES('$account_id','0',$M,NOW(),'$comment')";
                $conn->query($sql);
                $sql = "UPDATE bank SET money = '{$with}' WHERE account_id = '{$account_id}'";
                $conn->query($sql);

                $sql = "SELECT money FROM bank WHERE account_id='$to_account_id'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $dep = $row['money'] + $M;
                    $sql = "INSERT INTO statement(account_id,deposit,withdraw,time,comment)";
                    $sql .= " VALUES('$to_account_id',$M,'0',NOW(),'$comment')";
                    $conn->query($sql);
                    $sql = "UPDATE bank SET money = '{$dep}' WHERE account_id = '{$to_account_id}'";
                    $conn->query($sql);
                    $conn->close();
                    header("location: data_people.php?account_id=$account_id");
                }
            }
        }
    }
}     
    else {
        header("location: error_data_people.php?account_id=$account_id");
    }
}
    ?>   
    <center><a1>
    <center><img src="./images/20.png" width="45%" height="70%"> </center>
    <?php
    require("connect.php");
    $account_id = $_GET["account_id"];
    $to_account_id = $_GET["person"];
    $M = $_GET["M"];
    $comment = $_GET["comment"];

    $sql = "SELECT ALL * FROM bank WHERE account_id='$to_account_id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "Confirm money transfer to ".$row['account_name'];
    }
    else
    {
        echo "Can't find";
    }
    ?>
     <form action="tranfer.php?account_id=<?php if (isset($account_id)) {echo $account_id;} ?>&person=<?php if (isset($to_account_id)) {echo $to_account_id;} ?>&M=<?php if (isset($M)) {echo $M;} ?>&comment=<?php if (isset($comment)) {echo $comment;} ?>&" method="post">     
        <center><p>Account ID : <?php if (isset($to_account_id)) {echo $to_account_id;} ?></p></center>
        <h1><input type="submit" value="OK" style="background-color:#003366; color:white; font-size:30px; border-radius:5px; font-family:verdana;"></h1>
        <a href="data_people.php?account_id=<?php if (isset($account_id)) {echo $account_id;} ?>">CANCEL</a>  
      </form> 
    </a1></center>
</body>
</html>