<?php
include_once 'dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Credit Transfer</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<?php include 'header.php';
?>
<div class="index3">
    <?php 
    $sql = "SELECT * FROM user ";
    $result = mysqli_query($conn,$sql);
?>
<form method="POST">
<h4>From:</h4>    <br>
<select class="select" name="giver">
    <option value="None" selected>None</option>
    <?php
    while($row = mysqli_fetch_assoc($result)){
    ?>
    <option value="<?php echo $row['Name']; ?>"><?php echo $row['Name']; ?></option>
    <?php 
    }    
    ?>
    <?php 
    mysqli_free_result($result);
    ?>
    
</select><br><br>
<?php 
$result=mysqli_query($conn,$sql);
?>
<h4>To:</h4> <br>   
<select class="select" name="reciever">
    <option selected value="None">None</option>
    <?php
    while($row = mysqli_fetch_assoc($result)){
    ?>
    <option value="<?php echo $row['Name']; ?>"><?php echo $row['Name']; ?></option>
    <?php 
    }
    ?>
</select><br><br>

<h4>Amount to be credited:</h4><br><input type="text" placeholder="Amount" name="amount"><br>
<br><br><button type="submit" name="submit" value="submit">Transfer</button>

</form>
<?php

   include 'code.php';


?>

</div>
</body>
</html>