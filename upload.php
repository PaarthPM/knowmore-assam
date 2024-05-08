<?php

//upload.php
require("includes/common.php");
$user_id = $_SESSION['user_id'];
if(isset($_POST["image"]))
{
 $data = $_POST["image"];

 $image_array_1 = explode(";", $data);

 $image_array_2 = explode(",", $image_array_1[1]);

 $data = base64_decode($image_array_2[1]);

 $imageName = './profilepics/'.time() . '.png';
$dp=time();

 file_put_contents($imageName, $data);

 //echo '<img src="'.$imageName.'" class="img-thumbnail" />';
}
  $query = "UPDATE users SET image = '{$dp}.png'   where userid =$user_id ";
    mysqli_query($con, $query) or die(mysqli_error($con));
echo $dp;
echo $user_id;
?>
