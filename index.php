<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    

       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
       
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

 

    <link rel="stylesheet" href="owl.carousel.min.css">
    <link rel="stylesheet" href="owl.theme.default.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/HomeCSS.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">

   

</head>
<style>
      
     .card-img-top
     {
         height:100%;
         object-fit:cover;
     }
       .card-img
     {
         height:100%;
         object-fit:cover;
     }
    .a:hover
    {
        transform:scale(1.3);
    }
    .b
    {
        transition:3s;
    }
</style>
<script>
    $(window).on('load', function () {
        $('#myModal').modal('show');
    });
</script>
<body>
 
 <?php

include("navbar.php");
 if (isset($_SESSION['useremail'])) {
    $useremail = $_SESSION['useremail'];
  
    //making query
    $sql = "SELECT * from account_info where email='$useremail'" or die("image name fetching failed");
    $result = mysqli_query($db, $sql) or die("query failed");
    $row = mysqli_fetch_assoc($result);
    $imagename = "profileImages/" . $row['image'];
    $profilename = $row['name'];
   

    echo "
    
    <script type='text/javascript'>
     $(document).ready(function(){

      $('#logindropdown').css('display','none');
       $('#logoutdropdown').css('display','');
     });
    </script>
    
    
    ";
  } else {

    $imagename = 'https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg';
    $profilename = "comming from register";

    echo "
    <script type='text/javascript'>
     $(document).ready(function(){
      $('#logoutdropdown').css('display','none');
     $('#logindropdown').css('display','');
     });
    </script>
    ";
  }

 ?> 
 <div class="modal" tabindex="-1" id="myModal">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Instruction About COVID-19</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>LorLorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus corporis possimus assumenda
                        excepturi odit. Officia velit eveniet laboriosam numquam quia, magnam earum, delectus blanditiis
                        fugiat, necessitatibus optio quaerat doloribus veritatim.Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Ducimus corporis possimus assumenda.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


 
        <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel"  >
            <ol class="carousel-indicators">
             
              
            </ol>
            <div class="carousel-inner"  >
              <div class="carousel-item active" >
                
                <video id="video" muted controls class="d-block w-100" loop="loop" preload="auto">
                  <source src="http://egypt.travel/media/1644/this-is-egypt.mp4" controls></source>
                </video>
                <div class="carousel-caption d-none d-md-block">
                  <h5>This is EGYPT</h5>
                  <p>The most ancient culture of the World</p>
                </div>
              </div>
              
             
            </div>
            <script src="owl.carousel.min.js"></script>
            <script src="custom.js"></script>
           
          </div>
          
<!-- ***********************top stories ****************************** -->
   <div class="text-center event-headings" >
     <B><h2>TOP STORIES</h2></B>

   </div>

<div id="section2" class="container">
   <div class="row"> 
    <div class="col-md-6 col-sm-12">
        <div class="card text-white mb-6 border-light">
          <img src="images/kazirangaStroy.jpg" class="card-img-top" alt="...">
          <div class="card-img-overlay">
            <h5 class="card-title">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-geo-alt-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
              </svg>Kaziranga NationalPark,Aasam,India</h5>
              <p class="card-text"><button type="button"  data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample" class="btn btn-outline-light">Read More</button></p>
              <div class="card-img-middle card-body collapse" id="collapseExample1"> 
                  <h5>Rhino-Unique Animal of India</h5>
                  <p class="card-text">We were Roaming in a Gipssy and Suddenly A Rhino Appeared!
                  We were amazed , that was an amazing sight.
                </p>
               </div>
            </div>
            <div class="card-footer text-white">
              <small class="text-muted">-by Kamlesh Vaishnav</small>
            </div>
         
        </div>
      </div>

    <div class="col-md-6 col-sm-12">
        <div class="card text-white mb-6 border-light">
            <img src="images/Munnar.jpg" class="card-img-top" alt="...">
            <div class="card-img-overlay">
                <h5 class="card-title"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-geo-alt-fill"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                    </svg>Munnar,Kerala,India</h5>
               <p class="card-text"><button type="button" data-toggle="collapse" data-target="#collapseExample2"
                        aria-expanded="false" aria-controls="collapseExample" class="btn btn-outline-light ">Read
                        More</button></p>
                <div class="collapse" id="collapseExample2">
                    <div class="card-body card-img-miidle">
                        <h5>Beautiful palce In God's own Country</h5>
                        <p class="card-text">I heared lots of about Munnar and seen Good Photograpy of Munnar, But
                            Munnar is The kind of a place
                            which can't be captured in Photos.The beauty of Munnar gives Pleasure to mankind. </p>
                    </div>
                </div>
            </div>

            <div class="card-footer text-white">
                <small class="text-muted">- by Maximillion</small>
            </div>
        </div>
    </div>
           
  <div class="row">
    <div class="col-md-4 col-sm-12">
      <div class="card text-white  mb-6 border-light">
        <img src="images/ronda.jpg" class="card-img-top" alt="...">
        <div class="card-img-overlay">
          <h5 class="card-title"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-geo-alt-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
          </svg>Ronda Village,Spain</h5>
          <p class="card-text"><button type="button"  data-toggle="collapse" data-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample"  class="btn btn-outline-light">Read More</button></p>
          <div class="card-img-middle card-body collapse" id="collapseExample3">
          <h5>The Most ancient Village</h5>
          <p class="card-text" >Ronda village is the best example of architecture and e-specially for bridge kinda architecture.</p>
         
        </div>
      </div>
        <div class="card-footer text-white">
          <small class="text-muted">-by Gaurang</small>
        </div>
      </div>
      
      </div>
    <div class="col-md-4 col-sm-12">
      <div class="card text-white  mb-6 border-light">
        <img src="images/Burj-Khalifa.jpg"  class="card-img-top" alt="...">
        <div class="card-img-overlay">
          <h5 class="card-title"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-geo-alt-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
          </svg>Burj-Khalifa,Dubai</h5>
          <p class="card-text"><button type="button"   data-toggle="collapse" data-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample" class="btn btn-outline-light">Read More</button></p>
          <div class="card-img-middle card-body collapse" id="collapseExample4">
         
          <h5>World's Tallest Building</h5>
          <p class="card-text">It Ends in the Sky!My eyes were not able to see half of the bulding at a time</p>
        </div>
        </div>
        <div class="card-footer text-white">
          <small class="text-muted">-by Hardik</small>
        </div>
      </div>
      </div>
    <div class="col-md-4 col-sm-12">
      <div class="card text-white  mb-6 border-light">
        <img src="images/bg2.jpg"  class="card-img-top" alt="...">
        <div class="card-img-overlay">
          <h5 class="card-title"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-geo-alt-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
          </svg>Himalaya Mountains,India</h5>
          <p class="card-text"><button type="button"  data-toggle="collapse" data-target="#collapseExample5" aria-expanded="false" aria-controls="collapseExample" class="btn btn-outline-light">Read More</button></p>
          <div class="card-img-middle card-body collapse " id="collapseExample5">
          <h5>Sunset At Himalayas</h5>
          <p class="card-text">Himalaya's mountains are known for their uniqueness and It it.Beauty at its good at the time of Sunset.</p>
         </div>
        </div>
        <div class="card-footer text-white">
          <small class="text-muted">-by Jayen</small>
        </div>
      </div>
      </div>

  </div>

</div>
<!--<div class="row container-fluid">--> 
 <!--<div class="col-md">-->
  <div class=" text-center " style="color: rgb(82, 79, 79);">
    <a style="color: rgb(82, 79, 79);font-size: x-large ;" href="#">Read More Stories</a><span><svg width="2em" height="2em" style="margin-left:12px;" viewBox="0 0 16 16" class="bi bi-arrow-right-circle-fill" fill="rgb(82,79,79)" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-8.354 2.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L9.793 7.5H5a.5.5 0 0 0 0 1h4.793l-2.147 2.146z"/>
    </svg></span>

  <!--</div>-->
<!--</div>-->
  

</div>
<!-- **************************************************************** -->
<div class="text-center event-headings">
  <h3 style="font-weight: bolder;" class="event-headings">Top Destinations</h3>
  <h5  >Everyday is a journey and your journey starts here</h5>
</div>

</div>

<div class="container-fluid">
  

  <div class="owl-carousel owl-theme " >
    
    <div class="item"  data-merge="4"  >
      <div class="card mb-4" >
        <div class="row no-gutters">
          <div class="col-md-7 card-sm-10 cardWhereToGO">
           <a href="himalayas.php"> <img src="images/bg2.jpg" class="card-img img-fluid" alt="..."></a>
          </div>
          <div class="col-md container">
            <div class="card-body">
              <h2 style="opacity: 1;font-weight: bolder;font-size: 20px;"><svg style="margin: 2px;" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-compass" fill="black" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8 15.016a6.5 6.5 0 1 0 0-13 6.5 6.5 0 0 0 0 13zm0 1a7.5 7.5 0 1 0 0-15 7.5 7.5 0 0 0 0 15z"/>
                <path d="M6 1a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2H7a1 1 0 0 1-1-1zm.94 6.44l4.95-2.83-2.83 4.95-4.95 2.83 2.83-4.95z"/>
                </svg>Top Destinations</h2><hr>
                <h4>Himalayas,India</h4>
              <p class="card-text"><h5>Himalayas are know for SnowTrecking.Worlds tallest Mountain Mount-Everest belongs to Himalayas.</h5></p>
              <br><a class="btn btn-outline-dark" >
              <svg width="1.6em" height="1.6em" viewBox="0 0 16 16" class="bi bi-bookmark-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4.5 2a.5.5 0 0 0-.5.5v11.066l4-2.667 4 2.667V8.5a.5.5 0 0 1 1 0v6.934l-5-3.333-5 3.333V2.5A1.5 1.5 0 0 1 4.5 1h4a.5.5 0 0 1 0 1h-4zm9-1a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H13V1.5a.5.5 0 0 1 .5-.5z"/>
                <path fill-rule="evenodd" d="M13 3.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0v-2z"/>
              </svg>
             Schedual a Trip</a><br><br>
            <a href="himalayas.php">  <button class="btn btn-outline-dark" >Explore</button></a><br><br>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="item"  data-merge="4"  >
  <div class="card mb-4" >
    <div class="row no-gutters">
      <div class="col-md-7 card-sm-10  cardWhereToGO">
        <a href="beaches.php"><img src="images/most-final1.jpg" class="card-img img-fluid" alt="..."></a>
      </div>
      <div class="col-md container">
        <div class="card-body">
          <h2 style="opacity: 1;font-weight: bolder;font-size: 20px;"><svg style="margin: 2px;" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-compass" fill="black" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 15.016a6.5 6.5 0 1 0 0-13 6.5 6.5 0 0 0 0 13zm0 1a7.5 7.5 0 1 0 0-15 7.5 7.5 0 0 0 0 15z"/>
            <path d="M6 1a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2H7a1 1 0 0 1-1-1zm.94 6.44l4.95-2.83-2.83 4.95-4.95 2.83 2.83-4.95z"/>
            </svg>Top Destinations</h2><hr>
            <h4>Beaches </h4>
            <p class="card-text"><h5></h5>Most of people love peaceful beaches.Maldivs,Miami,Hawaai etc are known for their beutiful beaches.</p>
          <br><a class="btn btn-outline-dark" >
          <svg width="1.6em" height="1.6em" viewBox="0 0 16 16" class="bi bi-bookmark-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.5 2a.5.5 0 0 0-.5.5v11.066l4-2.667 4 2.667V8.5a.5.5 0 0 1 1 0v6.934l-5-3.333-5 3.333V2.5A1.5 1.5 0 0 1 4.5 1h4a.5.5 0 0 1 0 1h-4zm9-1a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H13V1.5a.5.5 0 0 1 .5-.5z"/>
            <path fill-rule="evenodd" d="M13 3.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0v-2z"/>
          </svg>
          Schedual a Trip</a><br><br>
         <a href="beaches.php"> <button class="btn btn-outline-dark" >Explore</button></a><br><br>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
  </div>
</div>
    <div class="item"  data-merge="4"  >
  <div class="card mb-4" >
    <div class="row no-gutters">
      <div class="col-md-7 card-sm-10 cardWhereToGO">
        <a href="paris.php"><img src="images/Australia.jpg" class="card-img img-fluid" alt="..."></a>
      </div>
      <div class="col-md container">
        <div class="card-body">
          <h2 style="opacity: 1;font-weight: bolder;font-size: 20px;"><svg style="margin: 2px;" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-compass" fill="black" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 15.016a6.5 6.5 0 1 0 0-13 6.5 6.5 0 0 0 0 13zm0 1a7.5 7.5 0 1 0 0-15 7.5 7.5 0 0 0 0 15z"/>
            <path d="M6 1a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2H7a1 1 0 0 1-1-1zm.94 6.44l4.95-2.83-2.83 4.95-4.95 2.83 2.83-4.95z"/>
            </svg>Top Destinations</h2><hr>
          <p class="card-text"><h4>Paris</h4></p>
          <p class="card-text"><h5></h5>Its streets, squares, buildings, gardens and monuments beckon tourists to return, and indeed, many do.</p>
          <br><a class="btn btn-outline-dark" >
          <svg width="1.6em" height="1.6em" viewBox="0 0 16 16" class="bi bi-bookmark-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.5 2a.5.5 0 0 0-.5.5v11.066l4-2.667 4 2.667V8.5a.5.5 0 0 1 1 0v6.934l-5-3.333-5 3.333V2.5A1.5 1.5 0 0 1 4.5 1h4a.5.5 0 0 1 0 1h-4zm9-1a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H13V1.5a.5.5 0 0 1 .5-.5z"/>
            <path fill-rule="evenodd" d="M13 3.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0v-2z"/>
          </svg>
          Schedual a Trip</a><br><br>
           <a href="paris.php"><button class="btn btn-outline-dark" >Explore</button></a><br><br>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
  </div>
</div>
    <div class="item"  data-merge="4"  >
  <div class="card mb-4" >
    <div class="row no-gutters">
      <div class="col-md-7 card-sm-10 cardWhereToGO">
        <a href="ladakh.php"><img src="images/Leh-India.jpg" class="card-img img-fluid" alt="..."></a>
      </div>
      <div class="col-md container">
        <div class="card-body">
          <h2 style="opacity: 1;font-weight: bolder;font-size: 20px;"><svg style="margin: 2px;" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-compass" fill="black" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 15.016a6.5 6.5 0 1 0 0-13 6.5 6.5 0 0 0 0 13zm0 1a7.5 7.5 0 1 0 0-15 7.5 7.5 0 0 0 0 15z"/>
            <path d="M6 1a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2H7a1 1 0 0 1-1-1zm.94 6.44l4.95-2.83-2.83 4.95-4.95 2.83 2.83-4.95z"/>
            </svg>Top Destinations</h2><hr>
            <h4>Ladakh,India</h4>
            <p class="card-text"><h5></h5>Ladakh is The most famous place for bike riders to Visit.Natural Scence and clean atmostphere is key of the area! </p>
          
          <br><a class="btn btn-outline-dark" >
          <svg width="1.6em" height="1.6em" viewBox="0 0 16 16" class="bi bi-bookmark-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.5 2a.5.5 0 0 0-.5.5v11.066l4-2.667 4 2.667V8.5a.5.5 0 0 1 1 0v6.934l-5-3.333-5 3.333V2.5A1.5 1.5 0 0 1 4.5 1h4a.5.5 0 0 1 0 1h-4zm9-1a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H13V1.5a.5.5 0 0 1 .5-.5z"/>
            <path fill-rule="evenodd" d="M13 3.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0v-2z"/>
          </svg>
         Schedual a Trip</a><br><br>
          <a href="ladakh.php"><button class="btn btn-outline-dark" >Explore</button></a><br><br>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
  </div>
</div>

  
</div>

</div>


<script src="owl.carousel.min.js"></script>
<script src="custom.js"></script>
<div class="text-center event-headings">
  <B><h2 style="font-weight: bolder;font-size: xx-large;">WHAT TO DO</h2></B>
  <h5 >Your Very Own Bucket List</h5>
</div>

</div>
<!-- *****************************************************What to do****************************************************** -->
<!-- <section class="where-to-go"  id="section2"> -->

<!-- </section> -->
<div class="container-fluid b d-flex flex-row">
   <div class="owl-carousel owl-theme " >
    <div class="item "  data-merge="2.3" >
      
      <div class="card cardWhatToDo container" style="background-color:whitesmoke;">
        <!-- style="width: 18rem;" -->
        <h3><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-signpost-2-fill" fill="black" xmlns="http://www.w3.org/2000/svg">
  <path d="M7 1.414V16h2V1.414a1 1 0 0 0-2 0z"/>
  <path d="M1 3a1 1 0 0 1 1-1h11.5a1 1 0 0 1 .8.4l.975 1.3a.5.5 0 0 1 0 .6L14.3 5.6a1 1 0 0 1-.8.4H2a1 1 0 0 1-1-1V3zm14 5a1 1 0 0 0-1-1H2.5a1 1 0 0 0-.8.4L.725 8.7a.5.5 0 0 0 0 .6l.975 1.3a1 1 0 0 0 .8.4H14a1 1 0 0 0 1-1V8z"/>
</svg>
       WHAT TO DO</h3><hr>
        <img src="images/culture2.jpg" class="card-img-top" alt="...">
        <div class="card-body ">
          <p class="card-text">  
         
           <h3>CULTURE</h3></p>
          <a href="cultureend.php" class="btn btn-outline-info">Explore</a>
        </div>
      </div>
    </div>
    <div class="item " data-merge="2.3"  >
      
    <div class="card cardWhatToDo container" style="background-color:whitesmoke;">
      <!-- style="width: 18rem;" -->
      <h3><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-signpost-2-fill" fill="black" xmlns="http://www.w3.org/2000/svg">
  <path d="M7 1.414V16h2V1.414a1 1 0 0 0-2 0z"/>
  <path d="M1 3a1 1 0 0 1 1-1h11.5a1 1 0 0 1 .8.4l.975 1.3a.5.5 0 0 1 0 .6L14.3 5.6a1 1 0 0 1-.8.4H2a1 1 0 0 1-1-1V3zm14 5a1 1 0 0 0-1-1H2.5a1 1 0 0 0-.8.4L.725 8.7a.5.5 0 0 0 0 .6l.975 1.3a1 1 0 0 0 .8.4H14a1 1 0 0 0 1-1V8z"/>
</svg>
     WHAT TO DO</h3><hr>
      <img src="images/lakes.jpg " class="card-img-top " alt="...">
      <div class="card-body">
        <p class="card-text">  
       
         <h3> LAKES</h3></p>
        <a href="lakes.php" class="btn btn-outline-info">Explore</a>
      </div>
    </div>
  </div>
  <div class="item"  data-merge="2.3">
    <div class="card cardWhatToDo container" style="background-color:whitesmoke;">
      <!-- style="width: 18rem;" -->
      <h3><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-signpost-2-fill" fill="black" xmlns="http://www.w3.org/2000/svg">
  <path d="M7 1.414V16h2V1.414a1 1 0 0 0-2 0z"/>
  <path d="M1 3a1 1 0 0 1 1-1h11.5a1 1 0 0 1 .8.4l.975 1.3a.5.5 0 0 1 0 .6L14.3 5.6a1 1 0 0 1-.8.4H2a1 1 0 0 1-1-1V3zm14 5a1 1 0 0 0-1-1H2.5a1 1 0 0 0-.8.4L.725 8.7a.5.5 0 0 0 0 .6l.975 1.3a1 1 0 0 0 .8.4H14a1 1 0 0 0 1-1V8z"/>
</svg>
     WHAT TO DO</h3><hr>
      <img src="images/spiritual2.jpg" class="card-img-top" alt="...">
      <div class="card-body ">
        <p class="card-text">  
       
         <h3>SPIRITUAL</h3></p>
        <a href="spiritual.php" class="btn btn-outline-info">Explore</a>
      </div>
    </div>
  </div>
  
  <div class="item"  data-merge="2.3">
    <div class="card cardWhatToDo container" style="background-color:whitesmoke;">
      <!-- style="width: 18rem;" -->
      <h3><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-signpost-2-fill" fill="black" xmlns="http://www.w3.org/2000/svg">
  <path d="M7 1.414V16h2V1.414a1 1 0 0 0-2 0z"/>
  <path d="M1 3a1 1 0 0 1 1-1h11.5a1 1 0 0 1 .8.4l.975 1.3a.5.5 0 0 1 0 .6L14.3 5.6a1 1 0 0 1-.8.4H2a1 1 0 0 1-1-1V3zm14 5a1 1 0 0 0-1-1H2.5a1 1 0 0 0-.8.4L.725 8.7a.5.5 0 0 0 0 .6l.975 1.3a1 1 0 0 0 .8.4H14a1 1 0 0 0 1-1V8z"/>
</svg>
     WHAT TO DO</h3><hr>
     <a href="worldHeritageSites.php">  <img src="images/taj.jpg" class="card-img-top" alt="..."></a>
      <div class="card-body ">
        <p class="card-text">  
       
         <h3>WORLD HERITAGE SITES</h3></p>
        <a href="worldHeritageSites.php" class="btn btn-outline-info">Explore</a>
      </div>
    </div>
  </div>
  <div class="item"  data-merge="2.3">
    <div class="card cardWhatToDo container" style="background-color:whitesmoke;">
      <!-- style="width: 18rem;" -->
      <h3><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-signpost-2-fill" fill="black" xmlns="http://www.w3.org/2000/svg">
  <path d="M7 1.414V16h2V1.414a1 1 0 0 0-2 0z"/>
  <path d="M1 3a1 1 0 0 1 1-1h11.5a1 1 0 0 1 .8.4l.975 1.3a.5.5 0 0 1 0 .6L14.3 5.6a1 1 0 0 1-.8.4H2a1 1 0 0 1-1-1V3zm14 5a1 1 0 0 0-1-1H2.5a1 1 0 0 0-.8.4L.725 8.7a.5.5 0 0 0 0 .6l.975 1.3a1 1 0 0 0 .8.4H14a1 1 0 0 0 1-1V8z"/>
</svg>
     WHAT TO DO</h3><hr>
      <img src="images/nature&wildlife.jpg" class="card-img-top" alt="...">
      <div class="card-body ">
        <p class="card-text">  
       
         <h3>NATURE & WILDLIFE</h3></p>
        <a href="#" class="btn btn-outline-info">Explore</a>
      </div>
    </div>
  </div>

 <div class="item "  data-merge="2.5" >
      <div class="card cardWhatToDo container" style="background-color:whitesmoke;">
    <!-- style="width: 18rem;" -->
    <h3><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-signpost-2-fill" fill="black" xmlns="http://www.w3.org/2000/svg">
      <path d="M7 1.414V16h2V1.414a1 1 0 0 0-2 0z"/>
      <path d="M1 3a1 1 0 0 1 1-1h11.5a1 1 0 0 1 .8.4l.975 1.3a.5.5 0 0 1 0 .6L14.3 5.6a1 1 0 0 1-.8.4H2a1 1 0 0 1-1-1V3zm14 5a1 1 0 0 0-1-1H2.5a1 1 0 0 0-.8.4L.725 8.7a.5.5 0 0 0 0 .6l.975 1.3a1 1 0 0 0 .8.4H14a1 1 0 0 0 1-1V8z"/>
    </svg>
   WHAT TO DO</h3><hr>
    <img src="images/adventure2.jpeg" class="card-img-top" alt="...">
    <div class="card-body ">
      <p class="card-text">  
     
       <h3>ADVENTURE</h3></p>
      <a href="#" class="btn btn-outline-info">Explore</a>
    </div>
  </div>
</div>
 
 
 <div class="item "  data-merge="2.5" >
      
  <div class="card cardWhatToDo container" style="background-color:whitesmoke;">
    <!-- style="width: 18rem;" -->
    <h3><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-signpost-2-fill" fill="black" xmlns="http://www.w3.org/2000/svg">
      <path d="M7 1.414V16h2V1.414a1 1 0 0 0-2 0z"/>
      <path d="M1 3a1 1 0 0 1 1-1h11.5a1 1 0 0 1 .8.4l.975 1.3a.5.5 0 0 1 0 .6L14.3 5.6a1 1 0 0 1-.8.4H2a1 1 0 0 1-1-1V3zm14 5a1 1 0 0 0-1-1H2.5a1 1 0 0 0-.8.4L.725 8.7a.5.5 0 0 0 0 .6l.975 1.3a1 1 0 0 0 .8.4H14a1 1 0 0 0 1-1V8z"/>
    </svg>
   WHAT TO DO</h3><hr>
    <img src="images/themepark.jpg" class="card-img-top" alt="...">
    <div class="card-body ">
      <p class="card-text">  
     
       <h3>THEMEPARKS</h3></p>
      <a href="themepark.php" class="btn btn-outline-info">Explore</a>
    </div>
  </div>
</div>
  
  
  </div>

</div>


<script src="owl.carousel.min.js"></script>
<script src="custom.js"></script>

</div>


<!-- *****************************************************experiences****************************************************** -->
<!-- <section class="where-to-go"  id="section2"> -->

<!-- </section> -->
<div class="text-center event-headings">
  <B><h2 style="font-weight: bolder;font-size: xx-large;">EXPERIENCES</h2></B>
  <h5 >Everyday is a journey and your journey starts here</h5>
</div>
<div class="container-fluid">
  

  <div class="owl-carousel owl-theme " >
    
    <div class="item "  data-merge="2.5" >
      
      <div class="card cardHoliday container" style="background-color:whitesmoke;">
        <!-- style="width: 44rem;" -->
        <h3><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-easel-fill" fill="black" xmlns="http://www.w3.org/2000/svg">
          <path d="M8.473.337a.5.5 0 0 0-.946 0L6.954 2h2.092L8.473.337zM12.15 11h-1.058l1.435 4.163a.5.5 0 0 0 .946-.326L12.15 11zM8.5 11h-1v2.5a.5.5 0 0 0 1 0V11zm-3.592 0H3.85l-1.323 3.837a.5.5 0 1 0 .946.326L4.908 11zM1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3z"/>
        </svg>
            EXPERIENCES</h3><hr>
        <img src="images/adventureimg.webp" class="card-img-top" alt="...">
        <div class="card-body ">
          <p class="card-text">  
         
          <h3>ADVENTURE</h3></p>
          <a href="#" class="btn btn-outline-info">Explore</a>
        </div>
      </div>
    </div>
    <div class="item "  data-merge="2.5" >
      
      <div class="card cardHoliday container" style="background-color:whitesmoke;">
        <!-- style="width: 18rem;" -->
        <h3><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-easel-fill" fill="black" xmlns="http://www.w3.org/2000/svg">
          <path d="M8.473.337a.5.5 0 0 0-.946 0L6.954 2h2.092L8.473.337zM12.15 11h-1.058l1.435 4.163a.5.5 0 0 0 .946-.326L12.15 11zM8.5 11h-1v2.5a.5.5 0 0 0 1 0V11zm-3.592 0H3.85l-1.323 3.837a.5.5 0 1 0 .946.326L4.908 11zM1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3z"/>
        </svg>
            EXPERIENCES</h3><hr>
        <img src="images/wildlife.jpg" class="card-img-top" alt="...">
        <div class="card-body ">
          <p class="card-text">  
         
           <h3>WILDLIFE</h3></p>
          <a href="#" class="btn btn-outline-info">Explore</a>
        </div>
      </div>
    </div>
    <div class="item "  data-merge="2.5" >
      
      <div class="card cardHoliday container" style="background-color:whitesmoke;">
        <!-- style="width: 44rem;" -->
        <h3><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-easel-fill" fill="black" xmlns="http://www.w3.org/2000/svg">
          <path d="M8.473.337a.5.5 0 0 0-.946 0L6.954 2h2.092L8.473.337zM12.15 11h-1.058l1.435 4.163a.5.5 0 0 0 .946-.326L12.15 11zM8.5 11h-1v2.5a.5.5 0 0 0 1 0V11zm-3.592 0H3.85l-1.323 3.837a.5.5 0 1 0 .946.326L4.908 11zM1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3z"/>
        </svg>
            EXPERIENCES</h3><hr>
        <img src="images/culture.jpg" class="card-img-top" alt="...">
        <div class="card-body ">
          <p class="card-text">  
         
          <h3>CULTURE</h3></p>
          <a href="#" class="btn btn-outline-info">Explore</a>
        </div>
      </div>
    </div>
    <div class="item "  data-merge="2.5" >
      
      <div class="card cardHoliday container" style="background-color:whitesmoke;">
        <!-- style="width: 44rem;" -->
        <h3><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-easel-fill" fill="black" xmlns="http://www.w3.org/2000/svg">
          <path d="M8.473.337a.5.5 0 0 0-.946 0L6.954 2h2.092L8.473.337zM12.15 11h-1.058l1.435 4.163a.5.5 0 0 0 .946-.326L12.15 11zM8.5 11h-1v2.5a.5.5 0 0 0 1 0V11zm-3.592 0H3.85l-1.323 3.837a.5.5 0 1 0 .946.326L4.908 11zM1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3z"/>
        </svg>
            EXPERIENCES</h3><hr>
        <img src="images/nature.jpg" class="card-img-top" alt="...">
        <div class="card-body ">
          <p class="card-text">  
         
          <h3>NATURE</h3></p>
          <a href="#" class="btn btn-outline-info">Explore</a>
        </div>
      </div>
    </div>
    <div class="item "  data-merge="2.5" >
      
      <div class="card cardHoliday container" style="background-color:whitesmoke;">
        <!-- style="width: 44rem;" -->
        <h3><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-easel-fill" fill="black" xmlns="http://www.w3.org/2000/svg">
          <path d="M8.473.337a.5.5 0 0 0-.946 0L6.954 2h2.092L8.473.337zM12.15 11h-1.058l1.435 4.163a.5.5 0 0 0 .946-.326L12.15 11zM8.5 11h-1v2.5a.5.5 0 0 0 1 0V11zm-3.592 0H3.85l-1.323 3.837a.5.5 0 1 0 .946.326L4.908 11zM1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3z"/>
        </svg>
            EXPERIENCES</h3><hr>
        <img src="images/spiritual21.jpg" class="card-img-top" alt="...">
        <div class="card-body ">
          <p class="card-text">  
         
          <h3>SPIRITUAL</h3></p>
          <a href="#" class="btn btn-outline-info">Explore</a>
        </div>
      </div>
    </div>
    <div class="item "  data-merge="2.5" >
      
      <div class="card cardHoliday container" style="background-color:whitesmoke;">
        <!-- style="width: 44rem;" -->
        <h3><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-easel-fill" fill="black" xmlns="http://www.w3.org/2000/svg">
          <path d="M8.473.337a.5.5 0 0 0-.946 0L6.954 2h2.092L8.473.337zM12.15 11h-1.058l1.435 4.163a.5.5 0 0 0 .946-.326L12.15 11zM8.5 11h-1v2.5a.5.5 0 0 0 1 0V11zm-3.592 0H3.85l-1.323 3.837a.5.5 0 1 0 .946.326L4.908 11zM1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3z"/>
        </svg>
            EXPERIENCES</h3><hr>
        <img src="images/sun-sea.jpg" class="card-img-top" alt="...">
        <div class="card-body ">
          <p class="card-text">  
         
          <h3>SEA & SUN</h3></p>
          <a href="#" class="btn btn-outline-info">Explore</a>
        </div>
      </div>
    </div>
    <div class="item "  data-merge="2.5" >
      
      <div class="card cardHoliday container" style="background-color:whitesmoke;">
        <!-- style="width: 44rem;" -->
        <h3><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-easel-fill" fill="black" xmlns="http://www.w3.org/2000/svg">
          <path d="M8.473.337a.5.5 0 0 0-.946 0L6.954 2h2.092L8.473.337zM12.15 11h-1.058l1.435 4.163a.5.5 0 0 0 .946-.326L12.15 11zM8.5 11h-1v2.5a.5.5 0 0 0 1 0V11zm-3.592 0H3.85l-1.323 3.837a.5.5 0 1 0 .946.326L4.908 11zM1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3z"/>
        </svg>
            EXPERIENCES</h3><hr>
        <img src="images/relaxation.jpg" class="card-img-top" alt="...">
        <div class="card-body ">
          <p class="card-text">  
         
          <h3>RELAXATION</h3></p>
          <a href="#" class="btn btn-outline-info">Explore</a>
        </div>
      </div>
    </div>
    <div class="item "  data-merge="2.5" >
    <div class="card cardHoliday container" style="background-color:whitesmoke;">
      <!-- style="width: 44rem;" -->
      <h3><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-easel-fill" fill="black" xmlns="http://www.w3.org/2000/svg">
        <path d="M8.473.337a.5.5 0 0 0-.946 0L6.954 2h2.092L8.473.337zM12.15 11h-1.058l1.435 4.163a.5.5 0 0 0 .946-.326L12.15 11zM8.5 11h-1v2.5a.5.5 0 0 0 1 0V11zm-3.592 0H3.85l-1.323 3.837a.5.5 0 1 0 .946.326L4.908 11zM1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3z"/>
      </svg>
          EXPERIENCES</h3><hr>
      <img src="images/family.webp" class="card-img-top" alt="...">
      <div class="card-body ">
        <p class="card-text">  
       
        <h3>FAMILY</h3></p>
        <a href="#" class="btn btn-outline-info">Explore</a>
      </div>
    </div>
  </div>


     
</div>

</div>


<script src="owl.carousel.min.js"></script>
<script src="custom.js"></script>
<!-- *********************************holiday type***************************************** -->

<div class="text-center event-headings">
  <B><h2 style="font-weight: bolder;font-size: xx-large;">HOLIDAY TYPE</h2></B>
  <h5  >Have Great Holidays</h5>
</div>


<div class="container-fluid">
  

  <div class="owl-carousel owl-theme imgSize" >
    <div class="item "  data-merge="1.8" >
      <div class="card cardType container" >
        <!-- style="width: 44rem;" -->
        <h3>HOLIDAY TYPE</h3><hr>
       <img src="images/bg-h1.jpg" class="card-img-top" alt="...">
        <div class="card-body ">
          <p class="card-text">  
         
          <h3><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-building" fill="black" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694L1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>
            <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/>
          
          </svg>CITY BREAKS</h3></p>
          <a href="citybricks-interm.php" class="btn btn-outline-info">Explore</a>
        </div>
      </div>
    </div>
    
  
    <div class="item "  data-merge="1.8" >
      <div class="card cardType container" >
        <!-- style="width: 44rem;" -->
        <h3>HOLIDAY TYPE</h3><hr>
        <img src="images/cruise.jpg" class="card-img-top" alt="...">
        <div class="card-body ">
          <p class="card-text">  
            
         <h3>
         
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-filter" fill="black" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
          </svg>CRUISE</h3></p>
          <a href="cruisesucc.php" class="btn btn-outline-info">Explore</a>
        </div>
      </div>
    </div>
    <div class="item "  data-merge="1.8" >
      <div class="card cardType container" >
        <!-- style="width: 44rem;" -->
        <h3>HOLIDAY TYPE</h3><hr>
        <img src="images/adventureexp.jpg" class="card-img-top" alt="...">
        <div class="card-body ">
          <p class="card-text">  
            
         <h3>
         
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-compass" fill="black" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 15.016a6.5 6.5 0 1 0 0-13 6.5 6.5 0 0 0 0 13zm0 1a7.5 7.5 0 1 0 0-15 7.5 7.5 0 0 0 0 15z"/>
            <path d="M6 1a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2H7a1 1 0 0 1-1-1zm.94 6.44l4.95-2.83-2.83 4.95-4.95 2.83 2.83-4.95z"/>
          </svg>ADVENTURE</h3></p>
          <a href="adventure-interm.php" class="btn btn-outline-info">Explore</a>
        </div>
      </div>
    </div>
    <!--<div class="item "  data-merge="1.8" >-->
    <!--  <div class="card cardType container" >-->
        <!-- style="width: 44rem;" -->
    <!--    <h3>HOLIDAY TYPE</h3><hr>-->
    <!--    <img src="images/htype-safari.jpg" class="card-img-top" alt="...">-->
    <!--    <div class="card-body ">-->
    <!--      <p class="card-text">  -->
            
    <!--     <h3>-->
         
    <!--      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-tree-fill" fill="black" xmlns="http://www.w3.org/2000/svg">-->
    <!--        <path fill-rule="evenodd" d="M8 0a.5.5 0 0 1 .416.223l3 4.5A.5.5 0 0 1 11 5.5h-.098l2.022 3.235a.5.5 0 0 1-.424.765h-.191l1.638 3.276a.5.5 0 0 1-.447.724h-11a.5.5 0 0 1-.447-.724L3.69 9.5H3.5a.5.5 0 0 1-.424-.765L5.098 5.5H5a.5.5 0 0 1-.416-.777l3-4.5A.5.5 0 0 1 8 0z"/>-->
    <!--        <path d="M7 13h2v3H7v-3z"/>-->
    <!--      </svg>-->
    <!--     ADVENTURE</h3></p>-->
    <!--      <a href="#" class="btn btn-outline-info">Explore</a>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</div>-->
    <div class="item "  data-merge="1.8" >
      <div class="card cardType container" >
        <!-- style="width: 44rem;" -->
        <h3>HOLIDAY TYPE</h3><hr>
        <img src="images/htype-safari.jpg" class="card-img-top" alt="...">
        <div class="card-body ">
          <p class="card-text">  
            
         <h3>
         
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-tree-fill" fill="black" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 0a.5.5 0 0 1 .416.223l3 4.5A.5.5 0 0 1 11 5.5h-.098l2.022 3.235a.5.5 0 0 1-.424.765h-.191l1.638 3.276a.5.5 0 0 1-.447.724h-11a.5.5 0 0 1-.447-.724L3.69 9.5H3.5a.5.5 0 0 1-.424-.765L5.098 5.5H5a.5.5 0 0 1-.416-.777l3-4.5A.5.5 0 0 1 8 0z"/>
            <path d="M7 13h2v3H7v-3z"/>
          </svg>
         SAFARI</h3></p>
          <a href="safari-intermediate.php" class="btn btn-outline-info">Explore</a>
        </div>
      </div>
    </div>
    <div class="item "  data-merge="1.8" >
      <div class="card cardType container" >
        <!-- style="width: 44rem;" -->
        <h3>HOLIDAY TYPE</h3><hr>
       <a href="beaches.php">  <img src="images/islands.jpg" class="card-img-top" alt="..."></a>
        <div class="card-body ">
          <p class="card-text">  
            
         <h3>
         
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-egg-fried" fill="black" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M13.665 6.113a1 1 0 0 1-.667-.977L13 5a4 4 0 0 0-6.483-3.136 1 1 0 0 1-.8.2 4 4 0 0 0-3.693 6.61 1 1 0 0 1 .2 1 4 4 0 0 0 6.67 4.087 1 1 0 0 1 1.262-.152 2.5 2.5 0 0 0 3.715-2.905 1 1 0 0 1 .341-1.113 2.001 2.001 0 0 0-.547-3.478zM14 5c0 .057 0 .113-.003.17a3.001 3.001 0 0 1 .822 5.216 3.5 3.5 0 0 1-5.201 4.065 5 5 0 0 1-8.336-5.109A5 5 0 0 1 5.896 1.08 5 5 0 0 1 14 5z"/>
            <circle cx="6" cy="8" r="0.8"/>
          </svg>
         BEACHES</h3></p>
          <a href="beaches.php" class="btn btn-outline-info">Explore</a>
        </div>
      </div>
    </div>
     <div class="item "  data-merge="1.8" >
      <div class="card cardType container" >
        
        <h3>Plan Your Own Now!</h3><hr>
        <img src="images/plantrip.jpg" class="card-img-top" alt="...">
        <div class="card-body ">
          <p class="card-text">  
            
         <h3>Customize Your Trip Now</h3>
          <a href="#" class="btn btn-block btn-outline-info">PLAN A TRIP NOW!</a>
        </div>
      </div>
    </div> 
    
</div>

</div>
<script src="owl.carousel.min.js"></script>
<script src="custom.js"></script>
    


  <!-- Footer -->
<footer class="page-footer font-small mdb-color lighten-3 pt-4 " style="background-color:rgba(0, 0, 0,1);color: white;" >

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      
      <!-- Grid column -->
      <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4 mx-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mb-4">About</h5>

        <ul class="list-unstyled">
          <li>
            <p>
              <a href="#!">PROJECTS</a>
            </p>
          </li>
          <li>
            <p>
              <a href="#!">ABOUT US</a>
            </p>
          </li>
          <li>
            <p>
              <a href="#!">BLOG</a>
            </p>
          </li>
          <li>
            <p>
              <a href="#!">AWARDS</a>
            </p>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4 mx-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Contact details -->
        <h5 class="font-weight-bold text-uppercase mb-4">Address</h5>

        <ul class="list-unstyled">
          <li>
            <p>
              <svg width="1.4em" height="1.4em" viewBox="0 0 16 16" class="bi bi-house-fill" fill="White" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
              </svg> New York, NY 10012, US</p>
          </li>
          <li>
            <p>
              <svg width="1.4em" height="1.4em" viewBox="0 0 16 16" class="bi bi-envelope-fill" fill="white" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
              </svg></i> info@example.com</p>
          </li>
          <li>
            <p>
              <svg width="1.4em" height="1.4em" viewBox="0 0 16 16" class="bi bi-telephone-fill" fill="white" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M2.267.98a1.636 1.636 0 0 1 2.448.152l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z"/>
              </svg></i> + 01 234 567 88</p>
          </li>
          <li>
            <p>
              <svg width="1.4em" height="1.4em" viewBox="0 0 16 16" class="bi bi-printer-fill" fill="white" xmlns="http://www.w3.org/2000/svg">
                <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5z"/>
                <path fill-rule="evenodd" d="M11 9H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z"/>
                <path fill-rule="evenodd" d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
              </svg></i> + 01 234 567 89</p>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4 text-center mx-auto my-4">

        <!-- Social buttons -->
        <h5 class="font-weight-bold text-uppercase mb-4">Follow Us</h5>

          <a href="#" class="fa fa-twitter text-center"></a><br>
          <a href="#" class="fa fa-google text-center"></a><br>
           <a href="#" class="fa fa-instagram text-center"></a><br>
           <a href="#" class="fa fa-youtube text-center"></a><br>
           <a href="#" class="fa fa-facebook text-center"></a>
           <!-- <a href="#" class="fa fa-google text-center"></a><br> -->
           

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">&copy; 2020 Copyright:
    <a href="#" >Mywebsitename.com</a>
    
  </div>
  <!-- Copyright -->
   
</footer>
<!-- Footer -->


</body>
</html>