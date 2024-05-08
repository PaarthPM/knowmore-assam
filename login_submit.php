<?php

require("includes/common.php");

$email = $_POST['e-mail'];
$email = mysqli_real_escape_string($con, $email);
$password = $_POST['password'];
$password = mysqli_real_escape_string($con, $password);
$query = "SELECT userid, email,password FROM users WHERE email='" . $email . "' AND password='" . $password . "'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);
$query1= "SELECT email FROM users WHERE email='" . $email . "'" ;
$result1 = mysqli_query($con, $query1)or die($mysqli_error($con));
$num1 = mysqli_num_rows($result1);
if ($num1 == 0) {
  $m = "<span class='red'>Email not registered.</span>";
    header('location: login.php?m1=' . $m);
} else if($num == 0){
  
  $m = "<span class='red'>Email or Password mismatch.</span>";
    header('location: login.php?m1=' . $m);
}
else{  
  $row = mysqli_fetch_array($result);
  $_SESSION['email'] = $row['email'];
  $_SESSION['user_id'] = $row['userid'];
  header('location: weeklywall.php');
}

?>