<!DOCTYPE html>
<?php
require("includes/common.php");
?>
<html>
     <head>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
         
      


         </script>
          <style>
           
            #one{
                position: relative;
            }
            #two
            {
               position: absolute;
               left: 50%;
               margin-left: 19%;
               
               top: 50%;
               margin-top: -60px;
               opacity: 0;
               transition: opacity 3s;
            }
            #sk
            {
               position: absolute;
               left: 50%;
               margin-left: -145px;
               
               top: 50%;
               margin-top: -180px;
               opacity: 0;
               transition: opacity 3s;
               z-index: -7;
            }
            #ten
            {
               position: absolute;
               left: 50%;
               margin-left: -200px;
               
               top: 50%;
               margin-top: -170px;
               opacity: 0;
               transition: opacity 3s;
               z-index: 3;
            }
             #ele
            {
               position: absolute;
               left: 50%;
               margin-left: -140px;
               
               top: 50%;
               margin-top: 0px;
               opacity: 0;
               transition: opacity 3s;
               z-index: 2;
            }
             #twe
            {
               position: absolute;
               left: 50%;
               margin-left: -200px;
               
               top: 50%;
               margin-top: -115px;
               opacity: 0;
               transition: opacity 3s;
               z-index: -6;
            }
            #three
            {
                position: absolute;
               left: 50%;
               margin-left: -60px;
               top: 50%;
               margin-top: -270px;
               z-index: 2;
            }
            #four
            {
                position: absolute;
               left: 50%;
               margin-left: 50px;
               top: 50%;
               margin-top: -320px;
               
            }
            #five
            {
                position: absolute;
               left: 50%;
               margin-left: 250px;
               top: 50%;
               margin-top: 60px;
            
            }
            #six
            {
                position: absolute;
               left: 50%;
               margin-left: -350px;
               top: 50%;
               margin-top: 60px;
              opacity: 0;
               transition: opacity 3s;
            }
            #seven
            {
                position: absolute;
               left: 50%;
               margin-left: -350px;
               top: 50%;
               margin-top: 60px;
              z-index: -1; 
            }
            #eight
            {
                position: absolute;
               left: 45%;
               margin-left:3px;
               padding-top: -155px;
               top: 28%;
               margin-top: 45px;
                z-index: -3; 
                opacity: 0;
               transition: opacity 5s;
            }
            #nine
            {
                position: absolute;
               left: 50%;
               margin-left: -220px;
               top: 50%;
               margin-top: -130px;
               z-index: -4;
               opacity: 0;
               transition: opacity 5s;
            }
             #tex
            {
                position: absolute;
               left: 50%;
               margin-left: -140px;
               top: 50%;
               margin-top: -110px;
               z-index: -4;
               opacity: 0;
               transition: opacity 5s;
            }
            #two.fade{
                opacity: 1;
            }
            #ten.fade{
                opacity: 1;
            }
             #ele.fade{
                opacity: 1;
            }
            #twe.fade{
                opacity: 1;
            }
            #six.fade{
                opacity: 1;
            }
            #nine.fade{
                opacity: 1;
            }
            #tex.fade{
                opacity: 1;
            }
            #sk.fade{
                opacity: 1;
            }
            #eight.fade{
                opacity: 1;
            }
            #slideSource {
  opacity: 1;
  transition: opacity 1s; 
}

#slideSource.fade {
  opacity: 0;
}
#slide
{
    width:200px;
    height:50px;
    border:1px solid black;
}
        </style>    
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome | Knowmore Assam</title>
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
         <script src="js/bootstrap.js"></script>
        <link href="css/bootstrap.css" rel="stylesheet">
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
        <div class="row">
           
        
            <div class='col'>
              
               
 
                <div id="one"><img src="./image/bacbone2.png" alt="kiba" ></div>
                 
                    <div id="three"><img src="./image/jaapi1.png" alt="kiba" style="width:75%;max-width: 650px;height:auto;"  ></div>
                   
                    <div id="two"><img src="./image/rhino2.png" alt="kiba" style="width:85%;max-width:250px ;height:100%;" ></div>
                   <div id="eight"><img src="./image/tea.png" alt="kiba"  style="width:95%;max-width:450px ;  "></div>
                   <div id="nine"><img src="./image/hill1.png" alt="kiba"  style="width:85%;height:100%; max-width: 450px;" ></div>
                   <div id="ten"><img src="./image/horai.png" alt="kiba"  style="width:82%;height:70%; max-width: 450px;" ></div>
                   <div id="ele"><img src="./image/duck.png" alt="kiba"  style="width:45%;height:70%;max-width: 450px; " ></div>
                   <div id="twe"><img src="./image/water.png" alt="kiba"  style="width:85%;height:auto;max-width: 380px; " ></div>
                 <div id="tex"><img src="./image/text.png" alt="kiba"  style="width:85%;height:auto; max-width: 450px;" ></div>
                 <div id="sk"><img src="./image/sku1.png" alt="kiba"  style="width:98%;height:auto; max-width: 400px;" ></div>
                 <br><br>
                 <div style="text-align: center">  <button type="button" class="btn btn-dark" >Explore Now</button></div>

            </div>
           
         <div class=' col '>
                <div class="card" style="width: 18rem;">
                   
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and makesum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing 
        software like Aldus PageMaker including versions of Lorem Ipsum.</p>
   
  </div>
</div>
            </div>
        </div></div>
                
                   <div class="container">
                       <br><br><br><br><br>
        <div class="row">
           <div class=' col-md-4 '>
                <div class="" style="width: 18rem;">
                   
  <div class=" card card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and makesum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing 
        software like Aldus PageMaker including versions of Lorem Ipsum.</p>
   
  </div>
</div>
            </div>
         <div class=' col-md-4 '>
                <div class="" style="width: 18rem;">
                   
  <div class=" card card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and makesum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing 
        software like Aldus PageMaker including versions of Lorem Ipsum.</p>
   
  </div>
</div>
            </div>
            <div class=' col-md-4 '></div>
         
         
        </div></div> 
         
                  
        <div style="text-align: center">
                <p id="font2">Currently this site is under construction.</p>
            </div>                 
            
        
      
        <?php
           include 'includes/footer.php';
       ?>
     <script>
                     $(document).ready(function() {
  // Images loaded is zero because we're going to process a new set of images.
  var imagesLoaded = 0;
  // Total images is still the total number of <img> elements on the page.
  var totalImages = $('img').length;

  // Step through each image in the DOM, clone it, attach an onload event
  // listener, then set its source to the source of the original image. When
  // that new image has loaded, fire the imageLoaded() callback.
  $('img').each(function(idx, img) {
    $('<img>').on('load', imageLoaded).attr('src', $(img).attr('src'));
  });

  // Do exactly as we had before -- increment the loaded count and if all are
  // loaded, call the allImagesLoaded() function.
  function imageLoaded() {
    imagesLoaded++;
    if (imagesLoaded === totalImages) {
      allImagesLoaded();
    }else{
         console.log('NOT LOADED');
    }
  }

  function allImagesLoaded() {
    console.log('ALL IMAGES LOADED');
    down1();    
  }
});

 // window.onload = down1(); 
   
  
   
          function down1(){
    $("#three").animate({top: '+=200px'},2510);
    setTimeout(down2,1000);//reserved for text
    setTimeout(one,4000);
     setTimeout(one1,5000);
     setTimeout(one2,6000);
     setTimeout(one3,7000);
      setTimeout(one4,8000);
      setTimeout(one5,8000);
     setTimeout(one6,9000);
     
    setTimeout(up1,9000);
    setTimeout(up2,9000);
    
    setTimeout(up3,9000);
    
    
  }
  
      function one() {
     var slideSource = document.getElementById('two');
  slideSource.classList.toggle('fade');
}
function one6() {
     var slideSource = document.getElementById('sk');
  slideSource.classList.toggle('fade');
}
 function one1() {
     var slideSource = document.getElementById('ten');
  slideSource.classList.toggle('fade');
}
function one2() {
     var slideSource = document.getElementById('ele');
  slideSource.classList.toggle('fade');
}
function one3() {
     var slideSource = document.getElementById('twe');
  slideSource.classList.toggle('fade');
}
function one4() {
     var slideSource = document.getElementById('nine');
  slideSource.classList.toggle('fade');
}

function one5() {
     var slideSource = document.getElementById('eight');
  slideSource.classList.toggle('fade');
}
function up1(){
      
    $("#nine").animate({top: '-=100px'},2510);
  }
  function up3(){
      
    $("#tex").animate({top: '-=100px'},2510);
     var slideSource = document.getElementById('tex');
  slideSource.classList.toggle('fade');
  }
   function up2(){
       
    $("#eight").animate({top: '-=17%'},2510);
  }
    function down2(){
    $("#four").animate({top: '+=200px'},2510);
    
  }

 </script>
    </body>
</html>