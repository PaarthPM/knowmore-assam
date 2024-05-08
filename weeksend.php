<?php

require("includes/common.php");
if (isset($_SESSION['user_id']))
        $user_id=$_SESSION['user_id'];
  
  $sel = $_POST['sel'];
 
  
  $sel1 = $_POST['sel1'];

  $query3= "UPDATE poem SET weekly = 'no' WHERE userid= '$user_id'";
    mysqli_query($con, $query3) or die(mysqli_error($con));
  
 $query= "UPDATE poem SET weekly = 'yes' WHERE userid= '$user_id' AND id='$sel'";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $query4= "UPDATE article SET weekly = 'no' WHERE userid= '$user_id' ";
    mysqli_query($con, $query4) or die(mysqli_error($con));
    
    $query1= "UPDATE article SET weekly = 'yes' WHERE userid= '$user_id' AND id='$sel1'";
    mysqli_query($con, $query1) or die(mysqli_error($con));
 
  header('location: profileedit.php');
  
?>