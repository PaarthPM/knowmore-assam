<?php

require("includes/common.php");
if (isset($_SESSION['email'])) {
$email=$_SESSION['email'];
    //  header('location: products.php');

}
  $name = $_POST['fname'];
  $name = mysqli_real_escape_string($con, $name);

  $contact = $_POST['contact'];
  $contact = mysqli_real_escape_string($con, $contact);

  $city = $_POST['city'];
  $city = mysqli_real_escape_string($con, $city);

    
    $query = "INSERT INTO users(name, email, contact, city)VALUES('" . $name . "','" . $email . "','" . $contact . "','" . $city . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $user_id = mysqli_insert_id($con);
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $user_id;
    header('location: weeklywall.php');
  
?>