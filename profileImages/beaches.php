<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Latest compiled and minified CSS -->

  <title>Beaches</title>

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
$('#Miami_Florida_favBtn').click(function(){
var place="Miami,Florida";
var imgSrc="images/miami.jpg";
var loc="beaches.php";
var id="Miami_Florida_favBtn";
$.ajax({
url:'insert.php',
type:'post',
data:{'place':place,'imgSrc':imgSrc,'loc':loc,'id':id},

success:function(data)
{
    console.log(data);
}
});

$('#Miami_Florida_favBtn').prop('disabled',true);
$('#Miami_Florida_favBtn').val('Already Added To Your Favourites');
$('#Miami_Florida_favBtn').css("background-color", "green");

});

$('#Hawai_America_favBtn').click(function(){
var place="Hawaai,America";
var imgSrc="images/hawai.jpg";
var loc="beaches.php";
var id="Hawai_America_favBtn";
$.ajax({
url:'insert.php',
type:'post',
data:{'place':place,'imgSrc':imgSrc,'loc':loc,'id':id},

success:function(data)
{
    console.log(data);
}
});
$('#Hawai_America_favBtn').prop('disabled',true);
$('#Hawai_America_favBtn').val('Already Added To Your Favourites');
$('#Hawai_America_favBtn').css("background-color", "green");
});

$('#Goa_India_favBtn').click(function(){
var place="Goa,India";

var imgSrc="images/Palolem-Beach-in-South-Goa.webp";
var loc="beaches.php";
var id="Goa_India_favBtn";
$.ajax({
url:'insert.php',
type:'post',
data:{'place':place,'imgSrc':imgSrc,'loc':loc,'id':id},

success:function(data)
{
    console.log(data);
}
});
$('#Goa_India_favBtn').prop('disabled',true);
$('#Goa_India_favBtn').val('Already Added To Your Favourites');
$('#Goa_India_favBtn').css("background-color", "green");
});

$('#Bondi_Australia_favBtn').click(function(){
var place="Bondi,Australia";

var imgSrc="images/bondi beach.jpg";
var loc="beaches.php";
var id="Bondi_Australia_favBtn";
$.ajax({
url:'insert.php',
type:'post',
data:{'place':place,'imgSrc':imgSrc,'loc':loc,'id':id},

success:function(data)
{
    console.log(data);
}
});
$('#Bondi_Australia_favBtn').prop('disabled',true);
$('#Bondi_Australia_favBtn').val('Already Added To Your Favourites');
$('#Bondi_Australia_favBtn').css("background-color", "green");
});

});
</script>


  <!--***********************************navigation bar*******************************************************-->


  <!--**************************************slide images****************************************************-->

  <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
    </ol>

    <div class="carousel-inner">
      <div class="carousel-item active" data-merge="4">
        <img src="images/pexels-oleg-magni-1427741.jpg" class=" w-100 coroimg ">
        <div class="carousel-caption ">
          <h5 style="color : black;">First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item" data-merge="4">
        <img src="images/ladysurf.jpg" class=" w-100 coroimg ">

        <div class="carousel-caption">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>


    </div>
    <script src="owl.carousel.min.js"></script>
    <script src="custom.js"></script>
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
      <h2>TOP BEACHES</h2>
    </B>

  </div>


<form name="f1" action="beaches.php">
  <div class="card mb-6 ">
    <div class="row ">
      <div class="col-md-7 cardWhereToGO">
        <a href="miamiPage.php">
        <img src="images/miami.jpg" class="card-img" alt="Miami Florida">
      </a>
      </div>
      <div class="col container">
        <div class="card-body">
          <h2 style="opacity: 1;font-weight: bolder;font-size: 30px;"><svg style="margin: 2px;" width="1em" height="1em"
              viewBox="0 0 16 16" class="bi bi-compass" fill="black" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M8 15.016a6.5 6.5 0 1 0 0-13 6.5 6.5 0 0 0 0 13zm0 1a7.5 7.5 0 1 0 0-15 7.5 7.5 0 0 0 0 15z" />
              <path
                d="M6 1a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2H7a1 1 0 0 1-1-1zm.94 6.44l4.95-2.83-2.83 4.95-4.95 2.83 2.83-4.95z" />
            </svg>&nbsp;Miami , Florida</h2>
          <hr>
          <p class="card-text">
          <h4>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis aliquid quisquam, illum quos illo
            necessitatibus. Laboriosam!</h4>
          </p>
          <br><input type="submit" class="btn btn-dark" id="Miami_Florida_favBtn" name="Miami_Florida_favBtn" value="Add Place To your List">
          
           <br><br>
          <a href="miamiPage.php" class="btn btn-outline-dark">Explore</a><br><br>
        </div>
      </div>
    </div>
  </div>



  <div class="card mb-6 ">
    <div class="row ">
      <div class="col-md-7 cardWhereToGO">
        <img src="images/hawai.jpg" class="card-img" alt="Hawai , America">
      </div>
      <div class="col container">
        <div class="card-body">
          <h2 style="opacity: 1;font-weight: bolder;font-size: 30px;"><svg style="margin: 2px;" width="1em" height="1em"
              viewBox="0 0 16 16" class="bi bi-compass" fill="black" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M8 15.016a6.5 6.5 0 1 0 0-13 6.5 6.5 0 0 0 0 13zm0 1a7.5 7.5 0 1 0 0-15 7.5 7.5 0 0 0 0 15z" />
              <path
                d="M6 1a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2H7a1 1 0 0 1-1-1zm.94 6.44l4.95-2.83-2.83 4.95-4.95 2.83 2.83-4.95z" />
            </svg>&nbsp;Hawai , America</h2>
          <hr>
          <p class="card-text">
          <h4>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis aliquid quisquam, illum quos illo
            necessitatibus. Laboriosam!</h4>
          </p>
          <br>
          <input type="submit" class="btn btn-dark" id="Hawai_America_favBtn" name="Hawai_America_favBtn" value="Add Place To your List">
          
           <br><br>
          <a href="miamiPage.php" class="btn btn-outline-dark">Explore</a><br><br>
        </div>
      </div>
    </div>
  </div>


  <div class="card mb-6 ">
    <div class="row ">
      <div class="col-md-7 cardWhereToGO">
        <img src="images/Palolem-Beach-in-South-Goa.webp" class="card-img" alt="Goa India">
      </div>
      <div class="col container">
        <div class="card-body">
          <h2 style="opacity: 1;font-weight: bolder;font-size: 30px;"><svg style="margin: 2px;" width="1em" height="1em"
              viewBox="0 0 16 16" class="bi bi-compass" fill="black" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M8 15.016a6.5 6.5 0 1 0 0-13 6.5 6.5 0 0 0 0 13zm0 1a7.5 7.5 0 1 0 0-15 7.5 7.5 0 0 0 0 15z" />
              <path
                d="M6 1a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2H7a1 1 0 0 1-1-1zm.94 6.44l4.95-2.83-2.83 4.95-4.95 2.83 2.83-4.95z" />
            </svg>&nbsp;Goa , India</h2>
          <hr>
          <p class="card-text">
          <h4>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis aliquid quisquam, illum quos illo
            necessitatibus. Laboriosam!</h4>
          </p>
          <br><input type="submit" class="btn btn-dark" id="Goa_India_favBtn" name="Goa_India_favBtn" value="Add Place To your List">
            
            <br><br>
          <a href="miamiPage.php" class="btn btn-outline-dark">Explore</a><br><br>
        </div>
      </div>
    </div>
  </div>



  <div class="card mb-6 ">
    <div class="row ">
      <div class="col-md-7 cardWhereToGO">
        <img src="images/bondi beach.jpg" class="card-img" alt="bondi beach Australia">
      </div>
      <div class="col container">
        <div class="card-body">
          <h2 style="opacity: 1;font-weight: bolder;font-size: 30px;"><svg style="margin: 2px;" width="1em" height="1em"
              viewBox="0 0 16 16" class="bi bi-compass" fill="black" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M8 15.016a6.5 6.5 0 1 0 0-13 6.5 6.5 0 0 0 0 13zm0 1a7.5 7.5 0 1 0 0-15 7.5 7.5 0 0 0 0 15z" />
              <path
                d="M6 1a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2H7a1 1 0 0 1-1-1zm.94 6.44l4.95-2.83-2.83 4.95-4.95 2.83 2.83-4.95z" />
            </svg>&nbsp;Bondi Beach , Australia</h2>
          <hr>
          <p class="card-text">
          <h4>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis aliquid quisquam, illum quos illo
            necessitatibus. Laboriosam!</h4>
          </p>
          <br>
          <input type="submit" class="btn btn-dark" id="Bondi_Australia_favBtn" name="Bondi_Australia_favBtn" value="Add Place To your List">
           <br><br>
          <a href="miamiPage.php" class="btn btn-outline-dark">Explore</a><br><br>
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