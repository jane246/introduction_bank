<!DOCTYPE html>
<html>

<body>
    <?php
    require("connect.php");
    $account_name=$_POST["account_name"];
    $password=$_POST["password"];
    $account_id="";
    //echo $account_name.$password;
    $sql = "SELECT * FROM bank WHERE password='$password' AND account_name='$account_name'";
    $result = $conn->query($sql);
    $conn->close();

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $account_id=$row["account_id"];
    header( "location: data_people.php?account_id=$account_id");
  }
} else {
    header( "location: login.php");
}
    ?>
</body>
</html>