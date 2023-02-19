<!DOCTYPE html>
<html>
    <head>
        <style>
            table, th, td{
                border: 1px solid #000000;
                border-collapse: collapse;
                padding: 1px;
                font-family: fantasy;
                font-size: 2ex;
                text-align: center;
                background-color:white;
            }
        </style>
    </head>
    <body background=" images.jpg"></body>
<body>
    <table width="75%">
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
    <br>
    <a href="data_people.php?account_id=<?php echo $account_id; ?>">Back</a><br>
</form>
</body>
</html>