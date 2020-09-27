<?php
  
  include_once'dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
</head>
    <?php  
     include 'header.php';
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Users</title>
    <link rel="stylesheet" href="style.css">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   


    <?php
$sql=" SELECT * FROM user ORDER BY ID; ";
$result=mysqli_query($conn,$sql);
?>
<div class="index2">
<div class="table-responsive">
<table class="table table-condensed table-bordered table-condensed" >
    <thead>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email Id</th>
        <th>Credits</th>
    </tr>
    </thead>
    <?php 
while($rows=mysqli_fetch_assoc($result)) {
?>
   <tbody>
   <tr>
        <td><?php echo $rows['Id'];?></td>
        <td><?php echo $rows['Name']?></td>
        <td><?php echo $rows['Email Id']?></td>
        <td><?php echo $rows['Credits']?></td>
</tr>
</tbody>
<?php }?>
</table>
</div>
</div>
</body>
</html>
