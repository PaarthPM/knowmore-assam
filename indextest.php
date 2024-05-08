<!DOCTYPE html>
<html>
     <head>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
          <style>
           
            #one{
                position: relative;
            }
            #two
            {
               position: absolute;
               left: 50%;
               margin-left: 10%;
               
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
               padding-top: -35px;
               top: 28%;
               margin-top: 5px;
                z-index: -3; 
                opacity: 0;
               transition: opacity 5s;
            }
            #nine
            {
                position: absolute;
               left: 50%;
               margin-left: -200px;
               top: 50%;
               margin-top: -160px;
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
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
          
    </head>
    <body>
         <?php
         include 'includes/header.php';
       ?>
        
        <div class='container' id="banner_image">
              
               
 
                
                 
                    <div id="three"><img src="./image/front/jaapi1.png" alt="kiba" style="width:75%;max-width: 650px;height:auto;"  ></div>
                   
                    <div id="two"><img src="./image/front/rhino1.png" alt="kiba" style="width:115%;max-width:200px ;height:100%;" ></div>
                   <div id="eight"><img src="./image/front/tea.png" alt="kiba"  style="width:95%;max-width:450px ;max-height: 350px;  "></div>
                   <div id="nine"><img src="./image/front/hill.png" alt="kiba"  style="width:135%;height:100%; max-width: 420px;" ></div>
                   <div id="ten"><img src="./image/front/horai.png" alt="kiba"  style="width:82%;height:70%; max-width: 450px;" ></div>
                   <div id="ele"><img src="./image/front/duck.png" alt="kiba"  style="width:45%;height:70%;max-width: 450px; " ></div>
                   <div id="twe"><img src="./image/front/water.png" alt="kiba"  style="width:85%;height:auto;max-width: 380px; " ></div>
                 <div id="tex"><img src="./image/front/text.png" alt="kiba"  style="width:85%;height:auto; max-width: 450px;" ></div>
                 <div id="sk"><img src="./image/front/sku1.png" alt="kiba"  style="width:98%;height:auto; max-width: 400px;" ></div>
                
                </div>
                  <div style="text-align: center">
               
                <p id="font2">Currently this site is under construction.</p>
            </div>             
            </div>
        
      
        <?php
           include 'includes/footer.php';
       ?>
     <script>
                   
  
  window.onload = down1(); 
   
  
   
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
       
    $("#eight").animate({top: '-=7%'},2510);
  }
    function down2(){
    $("#four").animate({top: '+=200px'},2510);
    
  }

 </script>
    </body>
</html>