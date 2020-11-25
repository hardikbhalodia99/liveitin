<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Latest compiled and minified CSS -->

  <title>World Heritage Sites</title>

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
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">


  <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/worldHeritageSite.css">


</head>

<body>
<?php
include("nav.php");

?>



  <!--***********************************navigation bar*******************************************************-->


  <!--**************************************slide images****************************************************-->

  <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="0"></li>

      
    </ol>

    <div class="carousel-inner">
      <div class="carousel-item active" data-merge="4">
        <img src="images/worldHeritage-Pic1.jpg" class=" w-100 coroimg ">
        <div class="carousel-caption ">
          <h5 style="color : black;">Taj MAhal</h5>
          <p>The grave with IVORY</p>
        </div>
      </div>
      <div class="carousel-item" data-merge="4">
        <img src="images/worldHeritageSitePic2.jpg" class=" w-100 coroimg ">

        <div class="carousel-caption">
          <h5>MAyan Stones</h5>
          <p>The biggest stonesthat are unmovable!!.</p>
        </div>
      </div>
      <div class="carousel-item" data-merge="4">
        <img src="images/worldHeritageSitePic3.jpg" class=" w-100 coroimg ">

        <div class="carousel-caption">
          <h5>JAck and the BeanStock</h5>
          <p>The house built within the tree.</p>
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
      <h2>TOP HERITAGE SITES OF THE WORLD</h2>
    </B>

  </div>



  <div class="card mb-6 ">
    <div class="row ">
      <div class="col-md-7 cardWhereToGO">
        <a href="tajMahal.php">
        <img src="images/TajMAhal.jpg" class="card-img" alt="Taj MAhal, India">
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
            </svg>&nbsp;Taj Mahal, INDIA</h2>
          <hr>
          <p class="card-text">
          <h4>The Taj Mahal 'Crown of the Palace', is an ivory-white marble mausoleum on the southern bank of the river Yamuna in the Indian city of Agra. In 1653 its cost of construction at that time was around 32 Million rupees which would be approx 1 Billion USD</h4>
          </p>
          <br><button class="btn btn-dark">
            <svg width="1.6em" height="1.6em" viewBox="0 0 16 16" class="bi bi-bookmark-plus" fill="orange"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M4.5 2a.5.5 0 0 0-.5.5v11.066l4-2.667 4 2.667V8.5a.5.5 0 0 1 1 0v6.934l-5-3.333-5 3.333V2.5A1.5 1.5 0 0 1 4.5 1h4a.5.5 0 0 1 0 1h-4zm9-1a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H13V1.5a.5.5 0 0 1 .5-.5z" />
              <path fill-rule="evenodd" d="M13 3.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0v-2z" />
            </svg>&nbsp;
            Add Place To your List</button><br><br>
          <a href="TajMahal.php"><button class="btn btn-outline-dark" >Explore</button></a><br><br>
        </div>
      </div>
    </div>
  </div>



  <!--


<div style="display: inline;">




  
    <div class="innerdiv innerimg" style="background-image: url(images/Palolem-Beach-in-South-Goa.webp); background-size: cover; background-repeat: no-repeat;">

      <div class="readbtn ">
      <button type="button" class="btn btn-dark resizebtn" style="width : fit-content; ">Goa Beach</button>
  
      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi resizebtn" fill="white" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M12.024 3.797L4.499 7.56l-.448-.895 7.525-3.762.448.894zm-.448 9.3L4.051 9.335 4.5 8.44l7.525 3.763-.448.894z"/>
        <path fill-rule="evenodd" d="M13.5 5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm0 11a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm-11-5.5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
      </svg>

      <svg width="1.2em" height="1.2em"  viewBox="0 0 16 16" class="bi resizebtn" fill="white" >
        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
      </svg>
      
      </div>  
  
    </div>

    <div class="innerdiv innerimg" style="background-image: url(images/bondi\ beach.jpg); background-size: cover; background-repeat: no-repeat;">

      <div class="readbtn ">
      <button type="button" class="btn btn-dark resizebtn" style="width : fit-content; ">Bondi Beach - Australia</button>
  
      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi resizebtn" fill="white" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M12.024 3.797L4.499 7.56l-.448-.895 7.525-3.762.448.894zm-.448 9.3L4.051 9.335 4.5 8.44l7.525 3.763-.448.894z"/>
        <path fill-rule="evenodd" d="M13.5 5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm0 11a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm-11-5.5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
      </svg>

      <svg width="1.2em" height="1.2em"  viewBox="0 0 16 16" class="bi resizebtn" fill="white" >
        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
      </svg>
      
       
  
    </div>

  </div>
  
    <div class="innerdiv innerimg" style="background-image: url(images/rio.jpg); background-size: cover; background-repeat: no-repeat;">

      <div class="readbtn ">
      <button type="button" class="btn btn-dark resizebtn" style="width : fit-content; ">Copacabana, Rio de Janeiro, Brazil</button>
  
      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi resizebtn" fill="white" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M12.024 3.797L4.499 7.56l-.448-.895 7.525-3.762.448.894zm-.448 9.3L4.051 9.335 4.5 8.44l7.525 3.763-.448.894z"/>
        <path fill-rule="evenodd" d="M13.5 5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm0 11a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm-11-5.5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
      </svg>

      <svg width="1.2em" height="1.2em"  viewBox="0 0 16 16" class="bi resizebtn" fill="white" >
        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
      </svg>
      
      </div>  
  
    </div>

    <div class="innerdiv innerimg" style="background-image: url(images/hawai.jpg); background-size: cover; background-repeat: no-repeat;">

      <div class="readbtn ">
      <button type="button" class="btn btn-dark resizebtn" style="width : fit-content; ">Waikiki Honolulu, Hawaii</button>
  
      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi resizebtn" fill="white" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M12.024 3.797L4.499 7.56l-.448-.895 7.525-3.762.448.894zm-.448 9.3L4.051 9.335 4.5 8.44l7.525 3.763-.448.894z"/>
        <path fill-rule="evenodd" d="M13.5 5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm0 11a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm-11-5.5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
      </svg>

      <svg width="1.2em" height="1.2em"  viewBox="0 0 16 16" class="bi resizebtn" fill="white" >
        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
      </svg>
      
      </div>  
  
    </div>

  
    
</div>


-->
<?php
  include("footer.html");
  ?>

</body>

</html>