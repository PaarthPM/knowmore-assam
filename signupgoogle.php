<?php
require("includes/common.php");


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Signup | Foodiindia</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
    </head>
    <body>
       
        <?php include 'includes/header3.php'; ?>
        <br><br>
<br>        <div  id="content">
        <div class="container">
            <div class="row">
               
                    <div class="col-md-6">
                   
                        <h2>SIGN UP</h2>
                        <form  action="signupgoogle_script.php" method="POST" >
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" name="fname"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                            </div>
                           
                            
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Contact" pattern=".{10,}" name="contact" title="Please enter exactly 10 digits" required = "true"><?php echo filter_input(INPUT_GET,'m2'); ?>
                                    
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="City" name="city" required = "true">
                            </div>
                            
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                <div class="col-md-6">
                 
                    </div>
                </div>
            </div>
        </div>
        <?php include "includes/footer.php";?>
    </body>
</html>