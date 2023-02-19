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
            echo var_dump($row);
        }
    }
    ?>
</body>
</html>
