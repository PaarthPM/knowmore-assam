<?php
require("includes/common.php");
if (isset($_GET['a2'],$_GET['a3']))
        $id=$_GET['a2'];
        $type=$_GET['a3'];


 $query = "DELETE FROM $type WHERE id=$id;";
 mysqli_query($con, $query) or die(mysqli_error($con));
 header('location: profileedit.php');

//DELETE FROM table_name WHERE condition;
?>