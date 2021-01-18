<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Latest compiled and minified CSS -->

  <title>wildLife</title>

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
<style>
    .card-img {
        height: 100%;
        object-fit: cover;
    }
</style>

   <?php
  include("nav.php");
  ?>
    <script>

$(document).ready(function(){
$('#Gir_favBtn').click(function(){
var place="Gir National-Park(Gujarat),India";
var imgSrc="images/safari-corousel-2.jpg";
var loc="safari-intermediate.php";
var id="Gir_favBtn";
$.ajax({
url:'insert.php',
type:'post',
data:{'place':place,'imgSrc':imgSrc,'loc':loc,'id':id},

success:function(data)
{
    console.log(data);
}
});

$('#Gir_favBtn').prop('disabled',true);
$('#Gir_favBtn').val('Already Added To Your Favourites');
$('#Gir_favBtn').css("background-color", "green");

});

$('#Kaziranga_favBtn').click(function(){
var place="Kaziranga National-Park(Aasam),India";
var imgSrc="images/kazirangaStroy.jpg";
var loc="safari-intermediate.php";
var id="Kaziranga_favBtn";
$.ajax({
url:'insert.php',
type:'post',
data:{'place':place,'imgSrc':imgSrc,'loc':loc,'id':id},

success:function(data)
{
    console.log(data);
}
});
$('#Kaziranga_favBtn').prop('disabled',true);
$('#Kaziranga_favBtn').val('Already Added To Your Favourites');
$('#Kaziranga_favBtn').css("background-color", "green");
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
      
      
    </ol>
    <div class="carousel-inner"  >
      <div class="carousel-item active" >
        <img src="images/kaziranga-corousel-2.jpg" class="d-block w-100" >
        <div class="carousel-caption d-none d-md-block">
          <h5>Royal Bengal Tiger</h5>
          <p>Kaziranga National Park</p>
        </div>
      </div>
      
      <div class="carousel-item" >
        <img src="images/kaziranga-corousel.jpg" class="d-block w-100" >
        
        <div class="carousel-caption d-none d-md-block">
          <h5>Rhino</h5>
          <p>Rhino is Unique Animal of India</p>
        </div>
      </div>
      
      <div class="carousel-item" >
        <img src="images/wildlife-carousel-2.jpg"class="d-block w-100" >
        <div class="carousel-caption d-none d-md-block">
          <h5>Pride Of India</h5>
          <p>Asiatic Lions are Only Seen In India</p>
        </div>
      </div>
     
    </div>
    <!-- <script src="owl.carousel.min.js"></script>
    <script src="custom.js"></script> -->
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
      <h2>NATIONAL PARK</h2>
    </B>

  </div>


<form name="f1" action="safari-intermediate.php">
  <div class="card mb-6 ">
    <div class="row no-gutters">
      <div class="col-md-7 cardWhereToGO">
        
        <img src="images/safari-corousel-2.jpg" class="card-img img-fluid" alt=" ">
      </a>
      </div>
      <div class="col container">
        <div class="card-body str">
          <h2 style="opacity: 1;font-weight: bolder;font-size: 30px;"><svg style="margin: 2px;" width="1em" height="1em"
              viewBox="0 0 16 16" class="bi bi-compass" fill="black" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M8 15.016a6.5 6.5 0 1 0 0-13 6.5 6.5 0 0 0 0 13zm0 1a7.5 7.5 0 1 0 0-15 7.5 7.5 0 0 0 0 15z" />
              <path
                d="M6 1a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2H7a1 1 0 0 1-1-1zm.94 6.44l4.95-2.83-2.83 4.95-4.95 2.83 2.83-4.95z" />
            </svg>&nbsp;Gir National-Park,India</h2>
          <hr>
          <p class="card-text">
          <h4>Gir is House of Asiatic Lions.One can explore Lions,Leopards,Deers,Peacocks and many types of trees in the National Park.</h4>
          </p>
          <br><input type="" class="btn btn-dark" id="Gir_favBtn" name="Gir_favBtn" value="Add Place To your List">
            <br><br>
          <a href="kaziranga-last.php" class="btn btn-outline-dark">Explore</a><br><br>
        </div>
      </div>
    </div>
  </div>
  



  <div class="card mb-6 ">
    <div class="row no-gutters">
      <div class="col-md-7 cardWhereToGO">
        <img src="images/kazirangaStroy.jpg" class="card-img img-fluid" alt="">
      </div>
      <div class="col container">
        <div class="card-body str">
          <h2 style="opacity: 1;font-weight: bolder;font-size: 30px;"><svg style="margin: 2px;" width="1em" height="1em"
              viewBox="0 0 16 16" class="bi bi-compass" fill="black" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M8 15.016a6.5 6.5 0 1 0 0-13 6.5 6.5 0 0 0 0 13zm0 1a7.5 7.5 0 1 0 0-15 7.5 7.5 0 0 0 0 15z" />
              <path
                d="M6 1a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2H7a1 1 0 0 1-1-1zm.94 6.44l4.95-2.83-2.83 4.95-4.95 2.83 2.83-4.95z" />
            </svg>&nbsp;Kaziranga National-Park,India</h2>
          <hr>
          <p class="card-text">
          <h4>The National-Park is known for Tiger-National Animal of India and  Rhinos.Rhinos can only be seen in this National-Park of India.</h4>
          </p>
          <br><input type="" class="btn btn-dark" id="Kaziranga_favBtn" name="Kaziranga_favBtn" value="Add Place To your List"><br><br>
          <a href="kaziranga-last.php" class="btn btn-outline-dark">Explore</a><br><br>
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