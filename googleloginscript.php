<?php require ("vendor/autoload.php");
//Step 1: Enter you google account credentials

$g_client = new Google_Client();

$g_client->setClientId("406056269966-6rdimpj9fp6lo3dpp1iumlj1agnuauf0.apps.googleusercontent.com");
$g_client->setClientSecret("GbKnSP4HcUWXfu5U_xzXyXyO");
$g_client->setRedirectUri("http://localhost/kmas/googleloginscript.php");
$g_client->setScopes("email");

//Step 2 : Create the url

$auth_url = $g_client->createAuthUrl();
//echo "<a href='$auth_url' >yesss </a>";
//
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
      //  var_dump($pay_load);
        
    }catch (Exception $e) {
        echo $e->getMessage();
    }

} else{
    $pay_load = null;
}

if(isset($pay_load)){
$email = $pay_load["email"]; 
require("includes/common.php");
  $query = "SELECT * FROM users WHERE email='$email'";
  $result = mysqli_query($con, $query)or die($mysqli_error($con));
  $num = mysqli_num_rows($result);
  
 if ($num == 0) {
   echo '<script>alert("Email not registered go to Sign Up.")</script>';
} else {  
  $row = mysqli_fetch_array($result);
  $_SESSION['email'] = $row['email'];
$_SESSION['user_id'] = $row['userid'];
header('location:weeklywall.php');
}

}
?>
<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
      
        <title>Log in | Knowmore Assam</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
   
    </head>

    <body>
                 <?php include 'includes/header2.php'; ?>
        <div id="content">
            <div class="container">
                <br><br><br>
            <?php echo "<a class='btn btn-outline-danger' href='$auth_url' >Continue log in with Google</a>";
?> <br>
<hr>
<a href="signup.php" class="btn btn-outline-secondary btn-sm" type="button" >Go to Sign Up.</a>
 
            </div>
            </div>


        </body>
    
</html>
