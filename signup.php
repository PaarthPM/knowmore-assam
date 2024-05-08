<?php
require("includes/common.php");
//if (isset($_SESSION['email'])) {
  //  header('location: products.php');
//S}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="406056269966-6rdimpj9fp6lo3dpp1iumlj1agnuauf0.apps.googleusercontent.com">
    
        <title>Signup | Knowmore Assam</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
  
    </head>
    <body>
        <script>
      function onSignIn(googleUser) {
        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
        console.log("ID: " + profile.getId()); // Don't send this directly to your server!
        console.log('Full Name: ' + profile.getName());
        console.log('Given Name: ' + profile.getGivenName());
        console.log('Family Name: ' + profile.getFamilyName());
        console.log("Image URL: " + profile.getImageUrl());
        console.log("Email: " + profile.getEmail());

        // The ID token you need to pass to your backend:
        var id_token = googleUser.getAuthResponse().id_token;
        console.log("ID Token: " + id_token);
           window.location.replace('http://localhost/kmas/googlescript.php');
     
    }
     
    </script>
 
        <?php include 'includes/header3.php'; ?>
        <br><br>
<br>        <div  id="content">
        <div class="container">
            
            <div class="card">
  <div class="card-header">
    Sign Up
  </div>
  <div class="card-body">
 
    <p class="card-text">We encourage users to sign in with Google Account for safety and security reasons.</p>
    
                    <?php echo "<div class='g-signin2' data-onsuccess='onSignIn'> </div>";
                    
                   
                    ?> <hr>    
    <a href="#" class="btn btn-outline-secondary btn-sm" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Sign Up with other email.</a>
  <hr>
    <div class="col collapse"  id="collapseExample">
                        <form  action="signup_script.php" method="POST">
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" name="name"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="e-mail" required = "true"><?php echo filter_input(INPUT_GET,'m1'); ?>
                                   
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" pattern=".{6,}" name="password" title="Password should be of minimum 6 digits." required = "true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Contact" pattern=".{10,}" name="contact" title="Please enter exactly 10 digits" required = "true"><?php echo filter_input(INPUT_GET,'m2'); ?>
                                    
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="City" name="city" required = "true">
                            </div>
                           
                            <button type="submit" name="submit" class="btn  btn-outline-info">Submit</button>
                        </form>
                    </div>
  </div>
                 
</div>
            
            </div>
        </div>
     
    </body>
</html>