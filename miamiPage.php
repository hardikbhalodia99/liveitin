<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome To Miami</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="owl.carousel.min.css">
  <link rel="stylesheet" href="owl.theme.default.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@700&display=swap" rel="stylesheet">


  <link rel="stylesheet" href="css/HomeCSS.css">

  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>

<style>
  .changeStyle {
    display: inline-flexbox;
  }

  @media only screen and (max-width: 1000px) {
    .changeStyle {
      display: inline;
    }
  }
</style>


<body>
  <?php
  include("nav.php");
  ?>
  <div id="carouselExampleCaptions" class="carousel slide carousel-fade  " data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>

    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images//miami.jpg" class="d-block w-100">

        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images//miami2.jpg" class="d-block w-100">

        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images//miami3.jpg" class="d-block w-100">

        <div class="carousel-caption d-none d-md-block">
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

  <div class="text-center event-headings mb-1">
    <B>
      <h2>MIAMI</h2>
    </B>

  </div>
   <div class="container-fluid text-center">
    <div class=" bg-light changeStyle">
      <a  class="btn btn-warning btn-lg " href="tripPlan2.html" style="margin: 14px;">SCHEDUAL A TRIP</a>
  </div>
  </div>


  

  <div class="text-center event-headings">
    <B>
      <h2>Wel-Come To ThE WOrLd oF MiAmI</h2>
    </B>

  </div>

  <div class="row container-fluid" style="margin:auto">
    <div class="card mb-4 bg-light border-light">
      <div class="row no-gutters">
        <div class="col-md-5">
          <img src="images//miami-info-2.jpg" class="card-img" alt="...">
        </div>
        <div class="col-md-7">
          <div class="card-body">
            <h5 class="card-title display-4">Wonderful Eve' At Miami!!</h5>
            <p class="card-text text-center">

              <h5>South Beach easily lives up to it's reputation for being one of the most famous beaches in the world.
                Visit at different times of the day for different experiences.
                Very much enjoyed the solitude of a beautiful sunrise, the people-watching action-packed atmosphere of a
                busy sunny afternoon, and the fun filled evening vibe of the area once the sun goes down. Fabulous place
                to walk and walk and walk along the shoreline ...
                Lifeguards, beach chairs and umbrellas for rent. Marine animals and sea life upon closer look. Beautiful
                people everywhere (and lots of everyday average people too.)
                Spanish and English are the go-to languages.
                Soak up some sunny south Florida rays here!</h>
            </p>
            <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row container-fluid " style="margin:auto">
    <div class="card mb-4 bg-light border-light">
      <div class="row no-gutters">
        <div class="col-md-5 ">
          <img src="https://media-cdn.tripadvisor.com/media/photo-w/17/e6/88/c5/gay-pride-a-south-beach.jpg" class="card-img" alt="...">
        </div>
        <div class="col-md-7">
          <div class="card-body">
            <h5 class="card-title display-4 ">Enjoyfull Miami<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-emoji-sunglasses" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                <path fill-rule="evenodd" d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM6.5 6.497V6.5h-1c0-.568.447-.947.862-1.154C6.807 5.123 7.387 5 8 5s1.193.123 1.638.346c.415.207.862.586.862 1.154h-1v-.003l-.003-.01a.213.213 0 0 0-.036-.053.86.86 0 0 0-.27-.194C8.91 6.1 8.49 6 8 6c-.491 0-.912.1-1.19.24a.86.86 0 0 0-.271.194.213.213 0 0 0-.036.054l-.003.01z" />
                <path d="M2.31 5.243A1 1 0 0 1 3.28 4H6a1 1 0 0 1 1 1v1a2 2 0 0 1-2 2h-.438a2 2 0 0 1-1.94-1.515L2.31 5.243zM9 5a1 1 0 0 1 1-1h2.72a1 1 0 0 1 .97 1.243l-.311 1.242A2 2 0 0 1 11.439 8H11a2 2 0 0 1-2-2V5z" />
              </svg></h5>
            <p class="card-text text-center">

              <h5>Miami Beach is vivacious and relaxing at the same time. This is a place with tropical white sand
                beaches, aquamarine water and palm trees that attracts visitors from Italy, France, Great Britain,Eastern Europe, Brazil and Japan, to mention a few.
                The three things you must know:
                1) a tropical place with the amenities of an American city and a heavy Cuban accent that welcomes you.
                2) You do not need a car
                just take a walk to Lincoln Rd and the terrific Sunday morning Latin open air market, Ocean Drive. Local buses and airport buses are very
                inexpensive.
                3) Make time to watch the sunrise from the beach.You may find the company
                of visitors from Japan who welcome the new day with chants, open arms and a great admiration for this
                event that occurs everyday.</h5>
            </p>
            <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="row container-fluid" style="margin:auto">
    <div class="card mb-4 bg-light border-light">
      <div class="row no-gutters">
        <div class="col-md-5">
          <img src="images//miami-info-3.jpg" class="card-img" alt="...">
        </div>
        <div class="col-md-7">
          <div class="card-body">
            <h5 class="card-title display-4">BEAUTIFUL DOLPHINS</h5>
            <p class="card-text">

              <h5>Travelers that want a near-perfect day trip from Miami often visit Key West, but getting there without a
                car can be a hassle. Avoid the expense of renting a car with a round-trip transfer, where you're whisked
                from Miami for a tropical day trip. Along the way, cruise on the Overseas Highway, take in the views of
                open waters, and enjoy ample time to explore Key West before heading back. Upgrade to include a snorkel
                tour on the turquoise waters.
              </h5>
            </p>
            <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="text-center event-headings">
    <B>
      <h2>BLOGS/EXPERIENCES</h2>
    </B>
  </div>


  <script>
    window.onload=function() {
      document.getElementById("readmore").click();
    }

  
     function loadbox(){
          $("#itembox").load("Loadblogs.php?place=miami");
   
  }
  </script>


      <div id="itembox"  >
Your contents will load here
      </div>

  <button  id="readmore" hidden onclick="loadbox()" style="margin-left: 50%; margin-bottom: 40px;" >READ MORE</button>


  <!--   <div class="container-fluid row" style="margin:auto;">
    <div class="card-deck ">
     
      <div class="card border-light bg-light">
        <div class="card-header text-muted">
          <img class="rounded-circle float-left dropdown-toggle" style="height: 45px; margin-right: 30px;" src="https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg"> 
          <span>By Varun Dhavan</span><br>
          <span style="font-size: 13px; float: right;">Visited@April2019</span>
        </div>
        <img src="images//miami-exp-1.jpg" class="card-img-top" alt="...">
        <div class="card-body bg-light">
          <h3 class="card-title">AWESOME EXPERIENCE</h3>
          <p>
          <h5>This was a very awesome experience. I loved every it of it. I was so nervous going in but everyone was so
            calm and laid back. The instructors definitely made you feel comfortable and safe to go up. Once you get up
            there you love it, even if you are afraid of heights like me. Will definitely be doing this every time I
            come to Miami now.</h5>
          </p>

        </div>


      </div>
      <div class="card border-light bg-light">
        <div class="card-header text-muted ">
          <img class="rounded-circle float-left dropdown-toggle" style="height: 45px; margin-right: 30px;" src="https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg"> 

          <span>By Jayen Patel</span><br>
          <span style="font-size: 13px; float: right;">Visited@December2017</span>
        </div>
        <img src="images//miami-exp-3.jpg" class="card-img-top" alt="...">
        <div class="card-body bg-light">
          <h3 class="card-title"> Parasailing</h3>
          <p>
          <h5>
            My niece turned 13, and I wanted her to have an amazing birthday adventure.
            I told Jared and Adam, and they made her feel like a rock star!
            They saved her for last, so that they could take some pictures of her alone.
            She felt like she was famous! She then asked to be dipped in the water more than once, and they dipped and
            dragged us 4 wonderful times! It was magnificent! They kept their eyes on us the whole time, and gave hand
            signals throughout. I was so pleased with their professionalism, and their genuinely wanting to make our
            experience a perfect 10. It truly was, and we cannot wait to go back!</h5>
          </p>
        </div>

        
      </div>

     
    </div>

    <div class="card-deck ">
      <div class="card border-light bg-light">
        <div class="card-header text-muted ">
                    <img class="rounded-circle float-left dropdown-toggle" style="height: 45px; margin-right: 30px;" src="https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg"> 

          <span>By Hardik Bhalodia</span><br>
          <span style="font-size: 13px;">Visited@January2020</span>
        </div>
        <img src="images//miami-exp2.jpg" class="card-img-top" alt="...">
        <div class="card-body bg-light">
          <h3 class="card-title"> Water was Warm</h3>
          <p>
          <h5> My stay was during weekdays and the weekend and wasn't that crowed, we rented some chairs an umbrella.
            Our experience was Great!</h5>
          </p>
        </div>
      </div>
    

    
      <div class="card border-light bg-light">
        <div class="card-header text-muted ">
          <img class="rounded-circle float-left dropdown-toggle" style="height: 45px; margin-right: 30px;" src="https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg"> 
          <span >By Sam Jordan</span><br>
          <span style="font-size: 13px; float: right;">Visited@March2018</span>

        </div>
        <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1c/09/70/88/photo5jpg.jpg?w=300&h=200&s=1" class="card-img-top" alt="...">
        <div class="card-body bg-light">
          <h3 class="card-title">Yummy!!! Clean and Beautiful Beaches for Surfing...</h3>
          <p>
          <h5>Clean and beautiful. I highly recommend staying at one of the hotels right on the beach with chair, umbrella and food service (stayed @ The Confidante)</h5>
          </p>
        </div>
      </div>
    </div>
    
  </div>

 -->

  <?php
  include("footer.html");
  ?>
</body>

</html>