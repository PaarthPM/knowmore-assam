<?php

require("includes/common.php");
if (isset($_SESSION['user_id']))
        $user_id=$_SESSION['user_id'];
  
 
  $sel = $_POST['sel'];
 
  
  $headname = $_POST['headname'];
  $headname = mysqli_real_escape_string($con, $headname);

  $text1 = $_POST['text1'];
  $text1 = mysqli_real_escape_string($con, $text1);
  $text2 = $_POST['text2'];
  $text2 = mysqli_real_escape_string($con, $text2);
 date_default_timezone_set('Asia/Kolkata'); 
  $dt2=date("d-m-Y H:i:s");

    $query = "INSERT INTO $sel (headname, text1,text2,userid,type,datee)VALUES('" . $headname . "','" . $text1 . "','" . $text2 . "','" . $user_id . "','" . $sel . "','" . $dt2 . "')";
    
    mysqli_query($con, $query) or die(mysqli_error($con));
    header('location: profileedit.php');
  
?>