<?php

require("includes/common.php");
if (isset($_SESSION['user_id']))
        $user_id=$_SESSION['user_id'];
  
 
 
  
  $title = $_POST['title'];
  $title = mysqli_real_escape_string($con, $title);


    $query = "UPDATE users SET bio = '$title' WHERE userid= '$user_id'";
    
    mysqli_query($con, $query) or die(mysqli_error($con));
    header('location: profile.php');
  
?>