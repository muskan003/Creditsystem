<?php
include 'dbh.inc.php';

if(isset($_POST['submit'])){
    $giver=$_POST['giver'];
    $reciever=$_POST['reciever'];
    $amount=$_POST['amount'];

    if($giver=="None" || $reciever=="None" || empty($amount)){
        echo '<script>alert("Please fill up all the details.") </script>';
    }
    elseif($amount<0){
        echo '<script>alert("Enter a positive value.") </script>';
    }
    elseif($giver==$reciever){
        echo '<script>alert("Choose a different user.") </script>';
    }
    else {

        $sql1 = "SELECT Id,Credits from user where Name='$giver'";
        $result1 = mysqli_query($conn,$sql1);
        $row=mysqli_fetch_assoc($result1);
        $x= $row['Credits'];
        $sql2 = "SELECT Id,Credits from user where Name='$reciever'";
        $result2 = mysqli_query($conn,$sql2);
        $row=mysqli_fetch_assoc($result2);
        $y= $row['Credits'];
        
        
        if($amount>$x){
            echo'<script>alert("Credit amount not available.")</script>';
        }
        else{
            $y=$y+$amount;
            $x=$x-$amount;
            $sql3="UPDATE user SET Credits='$x' Where Name='$giver'";
            $result3= mysqli_query($conn,$sql3);
            $sql4="UPDATE user SET Credits='$y' Where Name='$reciever'";
            $result4= mysqli_query($conn,$sql4);
            date_default_timezone_set('Asia/Kolkata');
            $date=date("Y-m-d H:i:s");
            $sql5="INSERT INTO history(`Giver`,`Reciever`,`Amount`,`Time`) values('$giver','$reciever','$amount','$date' )";
            $result5=mysqli_query($conn,$sql5);
        
            echo '<script>alert("Transaction successful.")</script>';


        }

    }
}