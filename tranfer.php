<!DOCTYPE html>
<html>

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
            <!--<p>tranfer <?php if (isset($to_account_id)) {echo $to_account_id;} ?>"</p>-->
            <h1><input type="submit" value="CONTINUE" style="background-color:#003366; color:white; font-size:13px; border-radius:5px; font-family:verdana;"></h1>
            <hr>
        </form>
    <a href="data_people.php?account_id=<?php if (isset($account_id)) {echo $account_id;} ?>">BACK</a> 

</body>

</html>