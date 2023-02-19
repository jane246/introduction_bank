<!DOCTYPE html>
<html>

<body>    
    <?php
    require("connect.php");
    $account_id=$_GET["account_id"];

    $sql = "SELECT * FROM bank WHERE account_id='$account_id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "DATA";
            "<br>";
            echo "Name : ".$row["titlename"]." ".$row["name"]. "<br>";
            echo "Account number : ".$row["account_id"]. "<br>";
            echo "Money : ".$row["money"]. "<br>";
        }
    }
    ?>
    <a href="edit_people.php?account_id=<?php echo $account_id; ?>">EDIT</a><br>
    <a href="delete_people.php?account_id=<?php echo $account_id; ?>">DELETE</a><br>
    <a>BANK</a><br>
    <a href="index.html">LOGOUT</a><br>

    <form action="deposit.php">
    <input type="hidden" name="account_id" value="<?php print($account_id); ?>">
        Money <input type = "text" name = "deposit"><br>
        Comment <input type = "text" name = "comment"><br>
        <input type="submit" value="DEPOSIT">
    </form>
    <br>

    <form action="withdraw.php">
    Money <input type = "text" name = "withdraw"><br>
    <a href="withdrew.php?account_id=<?php echo $account_id; ?>">WITHDRAW</a><br>
    <input type="submit" value="CREATE">
    </form>
    <br>

    <form action="tranfer.php">
    Money <input type = "text" name = "tranfer"><br>
    <a href="tranfer.php?account_id=<?php echo $account_id; ?>">TRANSFER</a><br>
    </form>
    <br>

    <form action="statement.php?account_id='$account_id'">
    <input type="hidden" name="account_id" value="<?php print($account_id); ?>">
        <a>STATEMENT</a><br>
        <input type="submit" value="STATEMENT">
    </form>

</body>
</html>
