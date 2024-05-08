<?php
require("includes/common.php");
if (isset($_GET['id'],$_GET['id1']))
        $user_id=$_GET['id'];
        $id1=$_GET['id1'];
  if (isset($_SESSION['user_id']))
        $user_id=$_SESSION['user_id'];

$query = "SELECT * FROM users WHERE userid= $user_id";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$row = mysqli_fetch_array($result);            
$query2 = "SELECT * FROM article INNER JOIN users  ON article.userid = users.userid AND users.userid=$user_id AND id = $id1";
$result2 = mysqli_query($con, $query2)or die($mysqli_error($con));
$var1 = "./profilepics/".$row['image'];
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
          
    </head>
    <body><?php
         include 'includes/header4.php';
       ?>
        <br>
        <div class="container bg-light shadow p-3 mb-5 bg-white rounded" >
            <div class="row">
                <div class="col-sm-6">
                    <img src="<?php echo $var1;?>" class="img-fluid" width="150" height="auto" alt="Upload Profile Picture"></div>
          <div class="col-sm-6"><br><br>
                <h5 class=""><?php echo $row['name']?></h5>
                <p class=""><?php echo $row['bio']?></p></div></div>
        </div><br>
        <div class="container">
            <div class="row">
               
            <div class="col" >
    <div class="shadow-sm p-3 mb-5 bg-white rounded">
      <div class="card-body"><?php $row2 = mysqli_fetch_array($result2);?>
        <h5 class="card-title"><?php echo $row2['headname']?></h5>
        <p class="card-text"><?php echo $row2['text1']?></p>
        <p class="card-text"><small class="text-muted">Uploaded on: <?php echo $row2['datee']?></small></p>
      </div>
    </div>
  </div>
 
</div>
        </div>
        <div class="container">
            
    <div class="shadow-sm p-3 mb-5 bg-white rounded">
      <div class="card-body">
        <h5 class="card-title"><?php 
            if ($row2['text2']== 0){
                $bas = NULL;
            }else{
              $bas= $row2['text2'];
            }
            ?></h5>
        <p class="card-text"><?php echo $row2['text2']?></p>
        
      </div>
    </div>
         <div class="container">
            <div class="row">
                <div class="col-md-6 bg-light shadow p-3 mb-5 bg-white rounded">
                    <div class="list-group">
                        <h5 style="text-align: center">More from <?php echo $row['name']?></h5>
  
  <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
  <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
  <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
  <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
</div>
                    
                </div>
  <div class="col-md-6"></div>
</div>
        </div>
        
        
    </body>
</html>