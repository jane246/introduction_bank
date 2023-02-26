<!DOCTYPE html>
<html>

<head>
    <title>DATA</title>
    <style>
        body {
            background: #a4b6d7;

        }

        h {
            font-size: 150%;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid black;
            font-family: Impact;
            background-color: #191970;
            color: white;
        }

        label {
            display: inline-block;
            width: 90px;
            margin-bottom: 10px;
            font-family: verdana;
            color: #000033;
            align-items: center;
            justify-content: center;
        }

        p,
        p1,
        p2,
        p3,
        h1,
        h2,
        h3 {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        a {
            color: black;
        }
    </style>
</head>

<body>
    <h>INFORMATION</h>
    <h3>
        <?php
        require("connect.php");
        $account_id = $_GET["account_id"];
        if (isset($_POST['account_id'])) {
            $account_id = $_POST['account_id'];
        }

        $sql = "SELECT * FROM bank WHERE account_id='$account_id'";
        $result = $conn->query($sql);
        $conn->close();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "Name : " . $row["titlename"] . " " . $row["name"] . "<br>";
                echo "Account number : " . $row["account_id"] . "<br>";
                echo "Money : " . $row["money"] . "<br>";
            }
        }
        ?>
    </h3>
    <a href="edit_people.php?account_id=<?php echo $account_id; ?>">Edit</a>
    <a>,</a>
    <a href="delete_people.php?account_id=<?php echo $account_id; ?>" onclick="return confirm('Are you sure to delete?')">Delete</a>
    <br>

    <h>BANK</h><br>
    <p1>
        <form action="deposit.php">
            <input type="hidden" name="account_id" value="<?php print($account_id); ?>">
            <label>Money</label> <input type="text" name="deposit" placeholder="ฝากเงิน"><br>
            <label>Comment</label> <input type="text" name="comment"><br>
            <h1><input type="submit" value="DEPOSIT" onclick="return confirm('Are you sure to deposit?')" style="background-color:#003366; color:white; font-size:13px; border-radius:5px; font-family:verdana;"></h1>
        </form>
        <br>
    </p1>
    <p2>
        <form action="withdraw.php">
            <input type="hidden" name="account_id" value="<?php print($account_id); ?>">
            <label>Money</label> <input type="text" name="withdraw" placeholder="ถอนเงิน"><br>
            <label>Comment</label> <input type="text" name="comment"><br>
            <h1><input type="submit" value="WITHDRAW" onclick="return confirm('Are you sure to  withdraw?')" style="background-color:#003366; color:white; font-size:13px; border-radius:5px; font-family:verdana;"></h1>
        </form>
        <br>
    </p2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require("connect.php");
        $account_id = $_POST["account_id"];
        $to_account_id = $_POST["person"];
        $M = $_POST["M"];
        $comment = $_POST["comment"];

        $sql = "SELECT ALL * FROM bank WHERE account_id='$to_account_id'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if ($to_account_id == $row['account_id']) {
                //echo "<a onclick=\"return confirm('Are you sure to tranfer?')\">TRANFER</a>";

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
                            //echo "$sql";
                            header("location: data_people.php?account_id=$account_id");
                        }
                    } else {
                        //echo "2";
                        header("location: error_data_people.php?account_id=$account_id");
                    }
                }
            }
        } else {
            //echo "2";
            header("location: error_data_people.php?account_id=$account_id");
        }
    }
    ?>

    <p3>
        <form action="data_people.php?account_id=<?php if (isset($account_id)) {echo $account_id;} ?>" method="post">
            <input type="hidden" name="account_id" value="<?php print($account_id); ?>">
            <label>Person</label> <input type="text" name="person" placeholder="เลขบัญชีผู้รับ"><br>
            <label>Money</label> <input type="text" name="M" placeholder="โอนเงิน"><br>
            <label>Comment</label> <input type="text" name="comment"><br> 
                    
            <h1><input type="submit" value="TRANFER" onclick="return confirm('Are you sure to tranfer?')" style="background-color:#003366; color:white; font-size:13px; border-radius:5px; font-family:verdana;"></h1>
            <hr>
        </form>
    </p3>

    <form action="statement.php?account_id='$account_id'">
        <input type="hidden" name="account_id" value="<?php print($account_id); ?>">
        <h2><input type="submit" value="STATEMENT" style="background-color:#003366; color:white; font-size:15px; border-radius:10px; font-family:verdana;"></h2>
    </form>
    <a href="index.php?">Logout</a><br>
</body>

</html>