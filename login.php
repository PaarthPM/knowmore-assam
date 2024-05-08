<?php
require("includes/common.php");
if (isset($_SESSION['email'])) {
    header('location: weeklywall.php');
}
?>
<?php require ("vendor/autoload.php");
//Step 1: Enter you google account credentials

$g_client = new Google_Client();

$g_client->setClientId("406056269966-6rdimpj9fp6lo3dpp1iumlj1agnuauf0.apps.googleusercontent.com");
$g_client->setClientSecret("GbKnSP4HcUWXfu5U_xzXyXyO");
$g_client->setRedirectUri("http://localhost/loginchat.php");
$g_client->setScopes("email");

//Step 2 : Create the url

$auth_url = $g_client->createAuthUrl();

//Step 3 : Get the authorization  code
$code = isset($_GET['code']) ? $_GET['code'] : NULL;

//Step 4: Get access token
if(isset($code)) {

    try {

        $token = $g_client->fetchAccessTokenWithAuthCode($code);
        $g_client->setAccessToken($token);

    }catch (Exception $e){
        echo $e->getMessage();
    }




    try {
        $pay_load = $g_client->verifyIdToken();
        var_dump($pay_load);

    }catch (Exception $e) {
        echo $e->getMessage();
    }

} else{
    $pay_load = null;
}

if(isset($pay_load)){

echo "success";
echo $pay_load["email"];
    
//header('loginchat.php');
}?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="406056269966-6rdimpj9fp6lo3dpp1iumlj1agnuauf0.apps.googleusercontent.com">
 
        <title>Login | Knowmore Assam</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
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
       window.location.replace('http://localhost/kmas/googleloginscript.php');
      }
    </script>
  
        <?php include 'includes/header3.php'; ?>
        <div id="content">
            <div class="container">
                <br><br><br>
                <div class="card">
  <div class="card-header">
 Log In
  </div>
  <div class="card-body">
 
    <p class="card-text">If you have Signed Up with Google account, please Log In here.</p>
    
                  <?php echo "<div href='$auth_url' class='g-signin2' data-onsuccess='onSignIn' > </div>";
?> <hr>    
    <a href="#" class="btn btn-outline-secondary btn-sm" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Log in with other email.</a>
  <hr>
    <div class="col collapse"  id="collapseExample">
                        <form action="login_submit.php" method="POST">
                                    <div class="form-group">
                                        <input type="email" class="form-control"  placeholder="Email" name="e-mail" required = "true"><?php echo filter_input(INPUT_GET,'m1'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="password" required = "true">
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">Login</button><br><br>
                                   
                                </form><br/>
                           
                            <div ><p>Forgot your password? <a href="forgot.php">Click Here..</a></p></div>
                            <div ><p>Don't have an account? <a href="signup.php">Register</a></p></div>
                    </div>
  </div>
                 
</div>
      
                </div>
            </div>


        </body>
</html>
