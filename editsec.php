<!--<!DOCTYPE html>-->
<?php
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}

//if (isset($_SESSION['user_id'])) {
   // $user_id = $_SESSION['user_id'];
    if (isset($_GET['a2'],$_GET['a1'],$_GET['a3']))
        $id=$_GET['a2'];
        $headname= $_GET['a1'];
        $type = $_GET['a3'];
    if (isset($_SESSION['user_id']))
        $user_id=$_SESSION['user_id'];



// $query = "SELECT * FROM users WHERE userid= $user_id";
    $query1 = "SELECT * FROM poem INNER JOIN users  ON poem.userid = users.userid AND users.userid=$user_id";
    $query2 = "SELECT * FROM article INNER JOIN users  ON article.userid = users.userid AND users.userid=$user_id";
    
//$result = mysqli_query($con, $query)or die($mysqli_error($con));
$result1 = mysqli_query($con, $query1)or die($mysqli_error($con));
$result2 = mysqli_query($con, $query2)or die($mysqli_error($con));


//$row = mysqli_fetch_array($result);  
//$row1 = mysqli_fetch_array($result1);  
//$row2 = mysqli_fetch_array($result2);  
//echo $row1['headname'];
//echo $row1['text1'];
//$var1 = "./profilepics/".$row['image'];
echo $_SESSION['user_id'];

//}
?>
<html>
     <head>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
         
      


         </script>
          <style>
           
        </style>    
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome | Knowmore Assam</title>
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
         <script src="js/bootstrap.js"></script>
         <script src="js/croppie.js"></script>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/croppie.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <script>
         </script> 
    </head>
    <body>
         <?php
         include 'includes/header3.php';
       ?>
        <br>
        <br>
     
        <div class="container">
      
        <div class="row">
           
        
            <div class='col-md-6'>
               <h2>ENTRY PANEL</h2>
               <form  action="modal.php?a1=<?php echo $headname?>&a2=<?php echo $id ?>&a3=<?php echo $type?>" method="POST">
                         
                          <div class="form-group">
                                <input class="form-control"  name="headname" value="<?php echo $headname?>" >
                            </div>
                            
              
                            <div class="form-group">
                                <textarea class="form-control" rows="10" placeholder="Edit content." name="text1"></textarea>
                            </div>
             
                            
                            <div class="form-group">
                                <textarea class="form-control" placeholder="A paragraph of article are advised to be copied here for brief display in writer's profile." name="text2"></textarea>
                            </div>
                           
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
            </div>
         <div class=' col-md-6 '>
                 
</div>
            </div>
        </div>
                
                          
                  
        <div style="text-align: center">
                <p id="font2">Currently this site is under construction.</p>
            </div>                 
            
        
      
      
   <script>  
 
</script>
    </body>
</html>