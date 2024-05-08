<!DOCTYPE html>
<?php
require("includes/common.php");
//if (!isset($_SESSION['email'])) {
  //  header('location: index.php');
//}
//if (isset($_SESSION['user_id'])) {
   // $user_id = $_SESSION['user_id'];
    if (isset($_GET['id']))
        $user_id=$_GET['id'];
    if (isset($_SESSION['user_id']))
        $user_id=$_SESSION['user_id'];
     $query = "SELECT * FROM users WHERE userid= $user_id";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$row = mysqli_fetch_array($result);            

$query1 = "SELECT * FROM poem INNER JOIN users  ON poem.userid = users.userid AND users.userid=$user_id";
$query2 = "SELECT * FROM article INNER JOIN users  ON article.userid = users.userid AND users.userid=$user_id";
    
//$result = mysqli_query($con, $query)or die($mysqli_error($con));
$result1 = mysqli_query($con, $query1)or die($mysqli_error($con));
$result2 = mysqli_query($con, $query2)or die($mysqli_error($con));
//$row1 = mysqli_fetch_array($result1);  
//$row2 = mysqli_fetch_array($result2);  

$var1 = "./profilepics/".$row['image'];

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
          
    </head>
    <body>
         <?php
         include 'includes/header3.php';
       ?>
        <br>
        <br>
      
        <div class="container">
            <div class="card text-center">
  
  <div class="card-body">
      
      <img src="<?php echo $var1;?>" class="img-fluid" width="150" height="auto" alt="Upload Profile Picture"><br>
    <h5 class="card-title"><?php echo $row['name']?></h5>
    <p class="card-text"><?php echo $row['bio']?></p>
    <?php if (isset($_SESSION['user_id']))
  {
      echo '<div class=""><input type="file" name="upload_image" id="upload_image" accept="image/*" /></div>';
  }
      ?>
    <div id="uploaded_image"></div>
     <?php if (isset($_SESSION['user_id']))
  {
      echo '<a class="btn btn-primary " href="profileedit.php" role="button">Edit mode</a>';
  }
      ?>
    <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">Add Bio</button>
  </div>
  <div class="card-footer text-muted">
    2 days ago
  </div>
</div><br><br>
               <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Add Bio to your profile.</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <form action="bio.php" method="POST">
                             <div class="form-group">
                                  <label for="recipient-name" class="col-form-label">Add Bio here:</label>
                                  <input type="text" class="form-control" name="title">
                              </div>
                             <div class="form-group">
                                 <button type="submit" class="btn btn-lg btn-block btn-info">Submit</button>
                             </div>
                          </form>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                            
       <div id="uploadimageModal" class="modal" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Upload & Crop Image</h4>
        </div>
        <div class="modal-body">
          <div class="row">
              <div class="col-md-8 " style="text: center;">
        <div id="image_demo" style="width:280px; margin-left:-15px"></div>
       </div>
       <div class="col-md-4" style="padding-top:30px;">
        <br />
        <br />
        <br/>
        <button class="btn btn-success crop_image">Crop & Upload Image</button>
     </div>
    </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
     </div>
    </div>
</div> 
     

</div> 
    
   
       
  
            
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        
                        <a href="#" class="list-group-item list-group-item-action list-group-item-danger">Articles</a>
                                        <?php
                                while ($row2 = mysqli_fetch_array($result2)) {
                                 ?>
                                    <a href="weblog<?php echo $row2['type'];?>.php?id=<?php echo $user_id;?>&type=<?php echo $row2['type'];?>&id1=<?php echo $row2['id'];?>" name="add"  class="list-group-item list-group-item-action"><?php echo $row2['headname']?></a>
<?php
                                    
                                }?>
                    </div>
                    <div class="col-md-6"><a href="#" class="list-group-item list-group-item-action list-group-item-danger">Poems</a>
                          <?php
                                while ($row1 = mysqli_fetch_array($result1)) {
                                 ?> 
                                    <a href="weblog<?php echo $row1['type'];?>.php?id=<?php echo $user_id;?>&type=<?php echo $row1['type'];?>&id1=<?php echo $row1['id'];?>" name="add"  class="list-group-item list-group-item-action"><?php echo $row1['headname']?></a>
<?php
                                    
                                }?>
                        
                        
                    </div>
                </div>
                
            </div>
                
               
            
           
          
                
                          
                  
        <div style="text-align: center">
                <p id="font2">Currently this site is under construction.</p>
            </div>                 
            
        
      
      
   <script>  
       $(document).ajaxStop(function(){
  setTimeout("window.location = 'profile.php'",100);
});
$(document).ready(function(){

 $image_crop = $('#image_demo').croppie({
    enableExif: true,
    viewport: {
      width:200,
      height:200,
      type:'circle' //circle
    },
    boundary:{
      width:300,
      height:300
    }
  });

  $('#upload_image').on('change', function(){
    var reader = new FileReader();
    reader.onload = function (event) {
      $image_crop.croppie('bind', {
        url: event.target.result
      }).then(function(){
        console.log('jQuery bind complete');
      });
    }
    reader.readAsDataURL(this.files[0]);
    $('#uploadimageModal').modal('show');
  });

  $('.crop_image').click(function(event){
    $image_crop.croppie('result', {
      type: 'canvas',
      size: 'viewport'
    }).then(function(response){
      $.ajax({
        url:"upload.php",
        type: "POST",
        data:{"image": response},
        success:function(data)
        {
          $('#uploadimageModal').modal('hide');
          $('#uploaded_image').html(data);
        }
      });
    })
  });

});  
</script>
    </body>
</html>