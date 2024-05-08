<?php
require("includes/common.php");
if (isset($_SESSION['email'])) {
   // header('location: weeklywall.php');

 $user_id=$_SESSION['user_id'];
}
 if (isset($_GET['a2'],$_GET['a1'],$_GET['a3']))
        $id=$_GET['a2'];
        $headname= $_GET['a1'];
        $type = $_GET['a3'];
    if (isset($_SESSION['user_id']))
        $user_id=$_SESSION['user_id'];
    echo $id;
    echo $headname;
    echo $type;
    echo $user_id;



  $name = $_POST['headname'];
  $name = mysqli_real_escape_string($con, $name);

  $text1 = $_POST['text1'];
  $text1 = mysqli_real_escape_string($con, $text1);

  $text2 = $_POST['text2'];
  $text2 = mysqli_real_escape_string($con, $text2);
  $query1 = "SELECT * FROM $type WHERE userid='$user_id'AND headname='$name' AND id='$id'";
  $result = mysqli_query($con, $query1)or die($mysqli_error($con));
  $row = mysqli_fetch_array($result);
  if($text1 == NULL){
     $text1 = $row['text1']; 
  }
  if($text2 == NULL){
     $text2 = $row['text2']; 
  }
  

date_default_timezone_set('Asia/Kolkata'); 

$dt2=date("d-m-Y H:i:s");
echo $dt2;


  //echo $text2;
  
  $query= "UPDATE $type SET text1 = '$text1', text2='$text2' WHERE userid= '$user_id' AND id='$id'";
  mysqli_query($con, $query)or die($mysqli_error($con));
 header('location:profileedit.php');
  /*if ($num != 0) {
    $m = "<span class='red'>Email Already Exists</span>";
    header('location: signup.php?m1=' . $m);
  } else if (!preg_match($regex_email, $email)) {
    $m = "<span class='red'>Not a valid Email Id</span>";
    header('location: signup.php?m1=' . $m);
  } else if (!preg_match($regex_num, $contact)) {
    $m = "<span class='red'>Not a valid phone number</span>";
    header('location: signup.php?m2=' . $m);
  } else {
    
    $query = "INSERT INTO users(name, email, password, contact, city, address)VALUES('" . $name . "','" . $email . "','" . $password . "','" . $contact . "','" . $city . "','" . $address . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $user_id = mysqli_insert_id($con);
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $user_id;
    header('location: weeklywall.php');
  }*/
?>