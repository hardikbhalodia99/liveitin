<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Latest compiled and minified CSS -->

  <title>city-bricks</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="owl.carousel.min.css">
  <link rel="stylesheet" href="owl.theme.default.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">


  <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/beaches.css">
  <link rel="stylesheet" href="css/HomeCSS.css">
    


</head>

<body>


   <?php
  include("nav.php");
  ?>
  <script>

$(document).ready(function(){
$('#Dubai_favBtn').click(function(){
var place="Dubai";
var imgSrc="images/dubai-info-2.jpeg";
var loc="citybricks-interm.php";
var id="Dubai_favBtn";
$.ajax({
url:'insert.php',
type:'post',
data:{'place':place,'imgSrc':imgSrc,'loc':loc,'id':id},

success:function(data)
{
    console.log(data);
}
});

$('#Dubai_favBtn').prop('disabled',true);
$('#Dubai_favBtn').val('Already Added To Your Favourites');
$('#Dubai_favBtn').css("background-color", "green");

});

$('#Paris_favBtn').click(function(){
var place="Paris";
var imgSrc="images/Louvre-museum-paris.jpg";
var loc="citybricks-interm.php";
var id="Paris_favBtn";
$.ajax({
url:'insert.php',
type:'post',
data:{'place':place,'imgSrc':imgSrc,'loc':loc,'id':id},

success:function(data)
{
    console.log(data);
}
});
$('#Paris_favBtn').prop('disabled',true);
$('#Paris_favBtn').val('Already Added To Your Favourites');
$('#Paris_favBtn').css("background-color", "green");
});
});


</script>



  <!--***********************************navigation bar*******************************************************-->


  <!--**************************************slide images****************************************************-->

  <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel"  >
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      <!-- <li data-target="#carouselExampleCaptions" data-slide-to="3"></li> -->
      
    </ol>
    <div class="carousel-inner"  >
      <div class="carousel-item active" >
        <img src="images/paris-info-3.jpg" class="d-block w-100" >
        <div class="carousel-caption d-none d-md-block">
          <h5>Paris</h5>
        </div>
      </div>
      
      <div class="carousel-item" >
        <img src="images/city.jpg" class="d-block w-100" >
        
        <div class="carousel-caption d-none d-md-block">
          <h5>London</h5>
          
        </div>
      </div>
      
      <div class="carousel-item" >
        <img src="images/burj-khalifa1.jpg"class="d-block w-100" >
        <div class="carousel-caption d-none d-md-block">
          <h5>Dubai</h5>
          
        </div>
      </div>
     
    </div>
  
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!--****************************************Top Beaches****************************************************************-->
  <div class="text-center " name="click" style="margin-top:25px;font-weight:bolder;font-size: xx-large;padding: 30px;">
    <B>
      <h2>FAMOUS CITIES</h2>
    </B>

  </div>

  <form name="f1" action="citybricks-interm.php">
    <div class="card mb-6 ">
      <div class="row no-gutters">
           <div class="col-md-6 cardWhereToGO">
          
          <img src="images/dubai-info-2.jpeg" name="Dubai_SkyDiving_imgSrc" class="card-img img-fluid" alt=" ">
        
        </div>
        
        <div class="col-md-6 container">
          <div class="card-body">
            <h2 style="opacity: 1;font-weight: bolder;font-size: 30px;" name="skydiving"><svg style="margin: 2px;" width="1em" height="1em"
                viewBox="0 0 16 16" class="bi bi-compass" fill="black" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M8 15.016a6.5 6.5 0 1 0 0-13 6.5 6.5 0 0 0 0 13zm0 1a7.5 7.5 0 1 0 0-15 7.5 7.5 0 0 0 0 15z" />
                <path
                  d="M6 1a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2H7a1 1 0 0 1-1-1zm.94 6.44l4.95-2.83-2.83 4.95-4.95 2.83 2.83-4.95z" />
              </svg>Dubai:The city that ends in Sky!</h2>
            <hr>
            <p class="card-text">
            <h5>The UAE, particularly Dubai, is a safe place to visit. It is designated as one of the safest holiday destinations by the international travel industry. However, it is wise to carry travel insurance and follow normal precautions to safeguard yourself and your valuables.</h5>
            </p>
            <br>
             <input type="submit"  class="btn btn-dark" id="Dubai_favBtn" name="Dubai_favBtn" value="Add To Favourites" id="SkyDiving">
            
             <br><br>
            <a href="city-bricks.php" class="btn btn-outline-dark">Explore</a><br><br>
          </div>
        </div>
       
      </div>
    </div>
  
  
  
    <div class="card mb-6 ">
      <div class="row no-gutters">
          <div class="col-md-6 cardWhereToGO">
          <img src="images/Louvre-museum-paris.jpg" name="Rishikesh_RiveRafting_imgSrc" class="card-img img-fluid" alt="Hawai , America">
        </div>
       
        <div class="col-md-6 container">
          <div class="card-body str">
            <h2 style="opacity: 1;font-weight: bolder;font-size: 30px;" name="RiverRafting"><svg style="margin: 2px;" width="1em" height="1em"
                viewBox="0 0 16 16" class="bi bi-compass" fill="black" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M8 15.016a6.5 6.5 0 1 0 0-13 6.5 6.5 0 0 0 0 13zm0 1a7.5 7.5 0 1 0 0-15 7.5 7.5 0 0 0 0 15z" />
                <path
                  d="M6 1a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2H7a1 1 0 0 1-1-1zm.94 6.44l4.95-2.83-2.83 4.95-4.95 2.83 2.83-4.95z" />
              </svg>Paris:Known for Archietecture</h2>
            <hr>
            <p class="card-text">
            <h5>
                Its streets, squares, buildings, gardens and monuments beckon tourists to return, and indeed, many do.

                Some of the most memorable things to do in Paris include visiting the Eiffel Tower, the Arc de Triomphe and Notre-Dame Cathedral. During the evening, experiencing one of the legendary Moulin Rouge cabaret shows, strolling through some of the most picturesque neighborhoods, like Montmartre, or climbing the Montparnasse Tower are a must.</h5>
            </p>
             <input type="submit"  class="btn btn-dark" id="Paris_favBtn" name="Paris_favBtn" value="Add To Favourites" >
             <br><br>
            <a href="paris.php" class="btn btn-outline-dark">Explore</a>
          </div>
        </div>
         
      </div>
    </div>
    
    </form>




  
<?php
  include("footer.html");
  ?>

</body>

</html>