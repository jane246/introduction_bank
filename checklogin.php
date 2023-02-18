<!DOCTYPE html>
<html>

<body>
    <?php
    require("connect.php");
    $account_name=$_POST["account_name"];
    $email=$_POST["email"];
    $password=$_POST["password"];

    echo $account_name.$password;
    $sql = "SELECT * FROM bank WHERE password='$password' AND (account_name='$account_name' OR email='$email')";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    header( "location: data_people.php" );
  }
} else {
    header( "location: login.php");
}
    ?>
</body>
</html>