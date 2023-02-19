<!DOCTYPE html>
<html>
    <head>
        <style>
            body {
	            background-image: url("");
            }
            table, th, td{
                border: 5px solid #FF9999;
                border-collapse: collapse;
                padding: 20px;
            }
        </style>
    </head>
<body>
    <table>
        <?php
            require("connect.php");
            $account_id=$_GET["account_id"];
    
            $sql = "SELECT * FROM statement WHERE account_id='$account_id'";    
            $result = $conn->query($sql);
            if ($result->num_rows > 0)
                echo "<tr> <th>Time</th> <th>Deposit</th> <th>Withdraw</th> <th>Comment</th> </tr>";
                while($row = $result->fetch_assoc())
                {
                $sql = "SELECT ALL * FROM statement WHERE account_id='$account_id'";
                //echo $row['time','deposit','withdraw','comment'];
                echo "<tr>";
                echo  "<td>" . $row['time'] . "</td>" . "<td>" . $row['deposit'] . "</td><td>" . $row['withdraw'] . "</td><td>" . $row['comment']."</td>";
                echo "</tr>";
                }    
        ?>  
    </table>

</form>
</body>
</html>