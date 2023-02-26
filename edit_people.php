<!DOCTYPE html>
<html>
<style>
    body {
       
        display: flex;
        align-items: center;
        justify-content: center;
        background:#a4b6d7;
        height: calc(var(--vh, 1vh) * 100);
        overflow: hidden;
        width: 100%;      
    }
    label{
        display: inline-block;
        width: 150px;
        margin-bottom: 10px;
        font-family:verdana;
        color: #000033;
    }
    p{
    	display: flex;
        align-items: center;
        justify-content: center;
    }
</style>
<body>
<img src="./images/22.png" width="25%" height="50%">
<?php
    require("connect.php");
    $account_id=$_GET["account_id"];

    $sql = "SELECT * FROM bank WHERE account_id='$account_id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0)
        $row = $result->fetch_assoc();
?>  
<form action="save_edit_people.php" method="post">
    <input type="hidden" name="account_id" value="<?php print($row["account_id"]); ?>">
    <label>Titie name :</label>
    <input type="radio" name="titlename" value="Mr"<?php if($row["titlename"]=="Mr") print("selected"); ?> required >Mr</input>
    <input type="radio" name="titlename" value="Mrs"<?php if($row["titlename"]=="Mrs") print("selected"); ?> required >Mrs</input>
    <input type="radio" name="titlename" value="Miss"<?php if($row["titlename"]=="Miss") print("selected"); ?> required >Miss</input><br>

    <!--<label>Titie name :</label> <select name="titlename">
        <option value="select"<?php if($row["titlename"]=="select") print("selected"); ?>>select</option>
        <option  value="Mr"<?php if($row["titlename"]=="Mr") print("selected"); ?>>Mr</option>
        <option value="Mrs"<?php if($row["titlename"]=="Mrs") print("selected"); ?>>Mrs</option>
        <option value="Miss"<?php if($row["titlename"]=="Miss") print("selected"); ?>>Miss</option>
    </select><br>-->
    <label>Fullname :</label> <input type="text" required name="name" value="<?php print($row["name"]); ?>"><br>
    <label>Phon number :</label> <input type="text" required name="number" value="<?php print($row["number"]); ?>"><br>
    <label>Email :</label> <input type="text" required name="email" value="<?php print($row["email"]); ?>"><br>
    <label>Address :</label> <input type="text" required name="address" value="<?php print($row["address"]); ?>"><br>
    <label>Password :</label> <input type="text" required name="password" value="<?php print($row["password"]); ?>"><br>
    <p><input type="submit" value="EDIT" style="background-color:#003366; color:white; font-size:15px; border-radius:5px; font-family:verdana;"></p>
</form>
</body>
</html>