<!DOCTYPE html>
<?php
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
if (isset($_REQUEST['submit_form'],$_GET['id'])) {
   // $week_id = $_GET['id'];
    echo "Form subitted";
}
//if (isset($_SESSION['user_id'])) {
   // $user_id = $_SESSION['user_id'];
    if (isset($_GET['id']))
        $user_id=$_GET['id'];
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
//echo $_SESSION['user_id'];

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
       <div class="card text-center">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">Send to Knowmore Weekly</button>
  </div>
  <div class="card-footer text-muted">
    2 days ago
  </div>
          
</div>
             <br><br>
        <div class="row">
           
        
            <div class='col-md-6'>
               <h2>YOUR SUBMISSIONS</h2>
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
                            <form action="weeksend.php" method="POST">
                             <div class="form-group">
                                 <div class="form-group">  
                            <select class="custom-select" name="sel">
                                <option   accesskey="" selected>choose poem</option>
                                <?php
                                while ($row1 = mysqli_fetch_array($result1)) {
                                    echo "<option  value=". $row1["id"] .">". $row1["headname"] ."</option>" ;
                                    
                                }?>
                                
                            </select>
                          </div>
                                  <div class="form-group">  
                            <select class="custom-select" name="sel1">
                               <option   accesskey="" selected>choose article</option>
                                <?php
                                while ($row2 = mysqli_fetch_array($result2)) {
                                    echo "<option  value=". $row2["id"] .">". $row2["headname"] ."</option>" ;
                                    
                                }?>
                            </select>
                          </div>
                              </div>
                             <div class="form-group">
                                 <button type="submit" class="btn btn-lg btn-block btn-info">Submit</button>
                             </div>
                          </form>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                                    <div class="row justify-content-center">
                    
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Edit/Delete</th>
                                  </tr>
                               
                                    </thead>
                                    <tbody id="ret_data">
                                        <?php
                                while ($row1 = mysqli_fetch_array($result1)) {
                                    echo "<tr><td>" . "#" . $row1["id"] . "</td><td>" . $row1["headname"] . "</td><td><a role='button' href='editsec.php?a1={$row1["headname"]}&a2={$row1["id"]}&a3={$row1["type"]}' class='btn btn-success btn-sm'>Edit</a>"
                                            . "<a role='button' href='delete_script.php?a1={$row1["headname"]}&a2={$row1["id"]}&a3={$row1["type"]}' class='btn btn-danger btn-sm'>Delete</a></td></tr>";
                                    
                                }?>
                                                  
                                        
                                        
                                        <?php
                                while ($row2 = mysqli_fetch_array($result2)) {
                                    echo "<tr><td>" . "#" . $row2["id"] . "</td><td>" . $row2["headname"] . "</td><td><a role='button' href='editsec.php?a1={$row2["headname"]}&a2={$row2["id"]}&a3={$row2["type"]}' class='btn btn-success btn-sm'>Edit</a>"
                                            . "<a role='button' href='delete_script.php?a1={$row2["headname"]}&a2={$row2["id"]}&a3={$row2["type"]}' class='btn btn-danger btn-sm'>Delete</a></td></tr>";
                                    
                                }?>
                                    </tbody>
                                  </table>
                       
                        
              </div>
                        
                      </div>
                          
                  
           
         <div class=' col-md-6 '>
                 <h2>ENTRY PANEL</h2>
                 <form  action="profileeditscript.php" method="POST">
                          <div class="form-group">  
                            <select class="custom-select" name="sel">
                                <option   accesskey="" selected>choose the category</option>
                                <option   accesskey="p" value="poem">Poem</option>
                                <option   accesskey="a" value="article">Article</option>
                           
                            </select>
                          </div>
                          <div class="form-group">
                                <input class="form-control" placeholder="Title here" name="headname" >
                            </div>
                            
              
                            <div class="form-group">
                                <textarea class="form-control" rows="10" placeholder="Write the content here. Follow the instructions." name="text1"></textarea>
                            </div>
             
                            
                            <div class="form-group">
                                <textarea class="form-control" placeholder="A paragraph of article are advised to be copied here for brief display in writer's profile." name="text2"></textarea>
                            </div>
                           
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
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