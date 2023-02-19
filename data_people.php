<!DOCTYPE html>
<html>

<body>
    <a href="edit_people.php">EDIT</a><br>
    <a href="delete_people.php?account_id=$account_id">DELETE</a><br>
    <a>BANK</a><br>
    <a href="index.php">LOGOUT</a><br>
    <?php
    require("connect.php");
    $account_id=$_GET["account_id"];
    $id_card="";
    $titlename="";
    $name="";
    $number="";
    $email="";
    $birthday="";
    $age="";
    $account_name="";
    $money="";
    $address="";
    $password="";

    $sql = "SELECT * FROM bank WHERE account_id='$account_id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "DATA";
            "<br>";
            echo "Name : ".$row["titlename"]." ".$row["name"]. "<br>";
            echo "Account number : ".$row["account_id"]. "<br>";
            echo "MONEY : ".$row["money"]. "<br>";
        }
    }
    ?>
</body>
</html>
