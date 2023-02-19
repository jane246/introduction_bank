<!DOCTYPE html>
<html>
<body>
<?php
    require("connect.php");
    $account_id=$_GET["account_id"];
    
    $sql = "SELECT * FROM statement WHERE account_id='$account_id'";    
    $result = $conn->query($sql);
    echo "time:"."<br>";;
    if ($result->num_rows > 0)
        while($row = $result->fetch_assoc())
        {
        $sql = "SELECT ALL * FROM statement WHERE account_id='$account_id'";
        //echo $row['time','deposit','withdraw','comment'];
        echo $row['time']."&nbsp;5".$row['deposit']."<br>";   
        }    
?>  

</form>
</body>
</html>