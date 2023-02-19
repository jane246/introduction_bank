<!DOCTYPE html>
<html>

<body>    
    <a href="edit_people.php?account_id=<?php echo $account_id; ?>">EDIT</a><br>
    <a href="delete_people.php?account_id=<?php echo $account_id; ?>">DELETE</a><br>
    <a>BANK</a><br>
    <a href="index.php">LOGOUT</a><br>
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
    <a href="deposit.php?account_id=<?php echo $account_id; ?>">DEPOSIT</a><br>
    <a href="withdrew.php?account_id=<?php echo $account_id; ?>">WITHDRAW</a><br>
    <a href="tranfer.php?account_id=<?php echo $account_id; ?>">TRANSFER</a><br>
    <a href="stament.php?account_id=<?php echo $account_id; ?>">STATEMENT</a><br>

</body>
</html>
