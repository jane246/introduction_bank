<!DOCTYPE html>
<html>
<style>
    body {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        background: #a4b6d7;
        overflow: hidden;
    }
    a1{
        font-family:Impact;
        font-size: 300%;
    }
    p{
        display: flex;
        align-items: center;
        justify-content: center;
    }
    a{
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 150%;
        
    }
</style>
<body> 

    <form>
        <p><img src="./images/16.png" width="310px" height="310px"></p><br>
        <a1>Please check the transaction</a1>
        <br> 
        <?php
        require("connect.php");
        $account_id=$_GET["account_id"];
        ?>
        <a href="data_people.php?account_id=<?php echo $account_id; ?>">Back to check</a>           
    </form>  

</form>
</body>
</html>