<!DOCTYPE html>
<html>

<body>
    <?php
    require("connect.php");
    $account_name=$_POST["account_name"];
    $password=$_POST["password"];

    echo $account_name.$password;
    $sql = "SELECT * FROM bank WHERE account_name='$account_name' AND password='$password'";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    header( "location: data_people.php" );
  }
} else {
  echo '<a onclick="return alert("66666")"></a>';
}
    ?>
</body>
</html>