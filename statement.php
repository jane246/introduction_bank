<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<head>
    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;       
        }
        body {
            background-image: url('https://static.vecteezy.com/system/resources/previews/001/557/683/original/abstract-overlapping-blue-background-free-vector.jpg');
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100vw;
            height: 100vh;
        }
        
        table,
        th,
        td {
            border: 1px solid #000000;
            border-collapse: collapse;
            padding: 1px;
            font-family: fantasy;
            font-size: 2ex;
            text-align: center;
            background-color: white;
        }

        td, th {
            max-width: 500px;
            white-space: pre-wrap;
            word-wrap: break-word;
        }
        .search-contaniner{
            display: flex;
            align-items: center;
        }
        .table-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 90%;
            height: 100%;
        }

        table {
            width: 70%;
            max-width: 100%;
        }
        a{
            color: white;
            font-family: fantasy;
            font-size: 4ex;
        }



    </style>
</head>

<body bgcolor="#000099">
        <?php 
            $account_id = $_GET['account_id'];
        ?>    
    <!-- <img src="./images/pig-63.gif" align="right" width="35%" height="35%"> -->
    <div class="table-container">
    <div class="search-container">
    <br>
    <br>
        <form action="statement.php?account_id=<?php echo $account_id ?>" method="post">
            <a>Search : </a><input type="text" name="keyword" style="background-color:wite; color:#000000; font-size:4ex; border-radius:5px; font-family:fantasy;">
            <input type="submit" value=" Search " style="background-color:wite; color:#000000; font-size:4ex; border-radius:5px; font-family:fantasy;">
            <input type="hidden" name="account_id" value="<?php echo $account_id ?>" font-family="fantasy" font-size="4ex">
        </form>
        <br>       
        </div>
        <table>
        <a href="data_people.php?account_id=<?php echo $account_id; ?>">
            <font color="#FFFFFF" size="4px">Back</font>
        </a><br>
            <?php
            require("connect.php");
            $sql = "SELECT * FROM statement WHERE account_id='$account_id' ORDER BY time DESC";
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                $account_id = $_POST["account_id"];
                $keyword=$_POST["keyword"];
                if(isset($_POST["keyword"])){
                    $keyword=$_POST["keyword"];
                }else{
                    $keyword="";
                }
                if(!empty($keyword)){
                    $sql = "SELECT ALL * FROM statement WHERE account_id='$account_id'AND ( time LIKE '%$keyword%' OR deposit LIKE '%$keyword%' OR withdraw LIKE '%$keyword%' OR comment LIKE '%$keyword%') ORDER BY time DESC";
                }else{
                    $sql = "SELECT * FROM statement WHERE account_id='$account_id' ORDER BY time DESC";
                }
            }
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                echo "<tr>";
                echo "<th>Time</th>";
                echo "<th>Deposit</th>";
                echo "<th>Withdraw</th>";
                echo "<th>Comment</th> </tr>";
                echo "</tr>";
                while ($row = $result->fetch_assoc()) {
                    if ($row['deposit'] > 0) {
                        echo "<tr style='color: #006400;'>";
                        echo "<td>" . $row["time"] . "</td>";
                        echo "<td>" . $row["deposit"] . "</td>";
                        echo "<td>" . $row["withdraw"] . "</td>";
                        echo "<td>" . $row["comment"] . "</td>";
                        echo "</tr>";
                    } else {
                        echo "<tr style='color: #B22222;'>";
                        echo "<td>" . $row["time"] . "</td>";
                        echo "<td>" . $row["deposit"] . "</td>";
                        echo "<td>" . $row["withdraw"] . "</td>";
                        echo "<td>" . $row["comment"] . "</td>";
                        echo "</tr>";
                    }
                }
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>
        </table>
    </div>
</body>

</html>