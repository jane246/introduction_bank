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
        echo "OK";
        echo "CANCAL";
    }
    ?>
    </form>
</body>

</html>