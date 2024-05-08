<!DOCTYPE html>
<html>
     <head>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
         
      


         </script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
          <style>
              .load1{
                  
 
   -webkit-animation: rotation 8s linear infinite;
}
@-webkit-keyframes rotation {
		from {
				-webkit-transform: rotate(0deg);
		}
		to {
				-webkit-transform: rotate(359deg);
		}
}
           .loader {
    position: fixed;
  z-index: 999;
  height: 100%;
  width: 100%;
 
 
  background-color: white;
  }

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

.hide-loader{
display:none;
}
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
.bottomMenu {
   
  width: 100%;
  z-index: 1;
  transition: all 1s;
}
.hide {
  opacity: 0;
  left : -100%;
}
.show {
  opacity: 1;
 left: 0;
 margin-left: 50%
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
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        
    </head>
    <body>
        <div class="loader" id="loader"><img src="./image/jaapi1.png" class="load1" style="width: 5%; text-align: center;"></div>
  <?php
         include 'includes/header2.php';
       ?>
        <br>
        <br>
        <div class="container" >
        <div class="row">
           
        
            <div class='col'>
              
               
 
                <div id="one"><img src="./image/bacbone2.png" alt="kiba" ></div>
                 
                <div id="three"><img src="./image/jaapi1.png"  alt="kiba" style="width:75%;max-width: 650px;height:auto;"  ></div>
                   
                    <div id="two"><img src="./image/rhino2.png" alt="kiba" style="width:85%;max-width:250px ;height:100%;" ></div>
                   <div id="eight"><img src="./image/tea.png" alt="kiba"  style="width:95%;max-width:450px ;  "></div>
                   <div id="nine"><img src="./image/hill1.png" alt="kiba"  style="width:85%;height:100%; max-width: 450px;" ></div>
                   <div id="ten"><img src="./image/horai.png" alt="kiba"  style="width:82%;height:70%; max-width: 450px;" ></div>
                   <div id="ele"><img src="./image/duck.png" alt="kiba"  style="width:45%;height:70%;max-width: 450px; " ></div>
                   <div id="twe"><img src="./image/water.png" alt="kiba"  style="width:85%;height:auto;max-width: 380px; " ></div>
                 <div id="tex"><img src="./image/text.png" alt="kiba"  style="width:85%;height:auto; max-width: 450px;" ></div>
                 <div id="sk"><img src="./image/sku1.png" alt="kiba"  style="width:98%;height:auto; max-width: 400px;" ></div>
                 <br><br>
               
            </div>
           
         <div class=' col '>
                <div class="" style="width: 100%;">
                   
  <div class="card-body">
    
    <h3 class="card-title text-danger">A platform to
  <span
     class="txt-rotate"
     data-period="2000"
     data-rotate='[ "learn.", "grow.", "know more." ]'></span>
</h3>
      <p class="card-text">Some quick example text to build on the card title and makesum has been the industry's standard dummy.</p>
      <button type="button" class="btn btn-dark" >Explore Now</button>
          <button type="button" class="btn btn-light" >Writer's Section</button>

      <div id="scene1" style="margin-top: 5%;">
          <div data-depth="0.4"><img class="happy" src="./image/g1.png" width="100%;"></div>
  <div data-depth="0.6"><img class="happy" src="./image/g2.png" width="100%;"></div>
  <div data-depth="0.8"><img class="happy" src="./image/g3.png" width="100%;"></div>
</div>
  </div>
</div>
            </div>
        </div></div>
        <br><br>
        <div style="text-align: center" ><h4 class="text-danger" data-aos="zoom-in-up" data-aos-duration="3000">AXOM AMAR RUPOHI GUNORU NAI HEKH.</h4>
            <h6>Searching topics is easy.</h6>
        </div>
                   <div class="container">
                       <br><br><br><br><br>
        <div class="row">
           <div class=' col-md-6 '>
                <div  id="scene" style="margin-top: 0%;">
          <div data-depth="0.4" ><img  class="happy"  src="./image/m4.png" width="140%;"></div>
 </div>
            </div>
            <div class="col-md-6" data-aos="zoom-in-down">
               <h4 class="text-danger">Did you know?</h4>
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <h6>Searching topics is easy. Part 1.</h6>
    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

</p></div>
    <div class="carousel-item"><h6>Searching topics is easy. Part 2.</h6>
        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

</p>
    </div>
    <div class="carousel-item">
      <h6>Searching topics is easy. Part 3.</h6>
        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

</p>
    </div>
  </div>
</div>
            </div>
            </div>
            
        
         
           
         
        </div> 
         
                   <div class="container">
                       <br><br><br><br><br>
                       <div class="row">
                           <div class="col-md-6">
                              <div class="card">
  <h5 class="card-header">Featured</h5>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-outline-danger">Go somewhere</a>
  </div>
</div>
                               
                           </div>
                           <div class="col-md-6">
                               <img   data-aos="zoom-in-left" src="./image/khul.png" width="150%" >
                           </div>
                    
                       </div></div>
        <div class="row">
            <div class="col-md-6">
                 <div id="scene2" style="margin-top: 5%;">
                     <div data-depth="0.4"><img class="happy" src="./image/bod.png" width="60%;"></div>
                     <div data-depth="0.6"><img data-aos="fade-right" data-aos-duration="3000" src="./image/pho.png" width="80%;" style="margin-left: -15%;"></div>
</div>
            </div>
            <div class="col-md-6">
                <img   data-aos="zoom-in-right" src="./image/handloom2.png" width="75%" >
            
            </div>
        </div>
                   
          
        
           
         
        
        <div style="text-align: center">
                <p id="font2">Currently this site is under construction.</p>
            </div>                 
            
        
     <script>
 //var currentScrollPos =    window.scrollTop;
        myID = document.getElementById("myID");
                //   pico = document.getElementById("pico");
var myScrollFunc = function() {
    // var y = pico.scrollY;
  var y = window.scrollY;
  if (y>400) {
    myID.className = "bottomMenu show"
  } else {
    myID.className = "bottomMenu hide"
  }
};

window.addEventListener("scroll", myScrollFunc);
         //*******************************//
         var scene = document.getElementById('scene');
var parallaxInstance = new Parallax(scene);

var scene1 = document.getElementById('scene1');
var parallaxInstance = new Parallax(scene1);

var scene2 = document.getElementById('scene2');
var parallaxInstance = new Parallax(scene2);

         //*******************//
  var TxtRotate = function(el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 2000;
  this.txt = '';
  this.tick();
  this.isDeleting = false;
};

TxtRotate.prototype.tick = function() {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

  var that = this;
  var delta = 300 - Math.random() * 100;

  if (this.isDeleting) { delta /= 2; }

  if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
  }

  setTimeout(function() {
    that.tick();
  }, delta);
};

window.onload = function() {
  var elements = document.getElementsByClassName('txt-rotate');
  for (var i=0; i<elements.length; i++) {
    var toRotate = elements[i].getAttribute('data-rotate');
    var period = elements[i].getAttribute('data-period');
    if (toRotate) {
      new TxtRotate(elements[i], JSON.parse(toRotate), period);
    }
  }
  // INJECT CSS
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
  document.body.appendChild(css);
};


    //*******************************//
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
    $('#loader').addClass("hide-loader");  
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
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
          <script>
  AOS.init();
</script>
    </body>
     
</html>