<!DOCTYPE html>
<html>
<body> 

    <form>
        <p><img src="./images/forget1.png" width="300px" height="300px"></p><br>
        <br>
        <a1>Please check the transaction</a1>
        <br> 
        <?php
        require("connect.php");
        $account_id=$_GET["account_id"];
        ?>
        <a href="data_people.php?account_id=<?php echo $account_id; ?>">Back</a>           
    </form>  

</form>
</body>
</html>