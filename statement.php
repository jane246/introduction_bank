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
            width: 100%;
            max-width: 100%;
        }

    </style>
</head>

<body bgcolor="#003366">
        <?php 
            $account_id = $_GET['account_id'];
        ?>
        
    <!-- <img src="./images/pig-63.gif" align="right" width="35%" height="35%"> -->
    <div class="table-container">
    <div class="search-container">
        <form action="statement.php?account_id=<?php echo $account_id ?>" method="post">
            Search:<input type="text" name="keyword">
            <input type="submit" value="Search">
            <input type="hidden" name="account_id" value="<?php echo $account_id ?>">
        </form>
        </div>
        <table>
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
                        echo "<tr>";
                        echo "<td style='color: #006400;'>" . $row["time"] . "</td>";
                        echo "<td style='color: #006400;'>" . $row["deposit"] . "</td>";
                        echo "<td style='color: #006400;'>" . $row["withdraw"] . "</td>";
                        echo "<td style='color: #006400;'>" . $row["comment"] . "</td>";
                        echo "</tr>";
                    } else {
                        echo "<tr>";
                        echo "<td style='color: #B22222;'>" . $row["time"] . "</td>";
                        echo "<td style='color: #B22222;'>" . $row["deposit"] . "</td>";
                        echo "<td style='color: #B22222;'>" . $row["withdraw"] . "</td>";
                        echo "<td style='color: #B22222;'>" . $row["comment"] . "</td>";
                        echo "</tr>";
                    }
                }
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>
        </table>
        <br>
        <a href="data_people.php?account_id=<?php echo $account_id; ?>">
            <font color="#FFFFFF" size="5px">Back</font>
        </a><br>
    </div>
</body>

</html>