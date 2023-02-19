<!DOCTYPE html>
<html>
<body>
<?php
    require("connect.php");
    $account_id=$_GET["account_id"];
    
    $sql = "SELECT * FROM statement WHERE account_id='$account_id'";    
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0)
        $row = $result->fetch_assoc();
        $sql = "SELECT ALL * FROM statement WHERE account_id='$account_id'";
        echo $row['time']      
?>  

</form>
</body>
</html>