<?php
include_once 'dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<?php
include 'header.php';
?>
<div class="index2">
<?php

$sql6=" SELECT * FROM history order by Time desc; ";
$result6=mysqli_query($conn,$sql6);
?>

<div class="table-responsive">
<table class="table table-bordered table-condensed">
    <thead>
    <tr>
        <th>From</th>
        <th>To</th>
        <th>Amount</th>
        <th>Date & Time</th>
    </tr>
    </thead>
    <?php 
while($row=mysqli_fetch_assoc($result6)) {
?>
   <tbody>
   <tr>
        <td><?php echo $row['Giver'];?></td>
        <td><?php echo $row['Reciever']?></td>
        <td><?php echo $row['Amount']?></td>
        <td><?php echo $row['Time']?></td>
</tr>
</tbody>
<?php }?>
</table>
</div>
</div>
</body>
</html>