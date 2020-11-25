<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome To Leh Ladakh</title>
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
  <link rel="stylesheet" href="css/HomeCSS.css">

  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
</head>

<style>

.changeStyle{
  display :inline-flexbox;
}

@media only screen and (max-width: 1000px){
  .changeStyle{
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
      <li data-target="#carouselExampleCaptions" data-slide-to="0"></li>

    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images//ladakh-2300904_1920.jpg" class="d-block w-100">

        <div class="carousel-caption d-none d-md-block">
          <h5 style="color: black; font-weight: bolder;">Beautiful Valleys </h5>
          <p style="color: black; font-weight: bolder;"> Wonderful Valleys and streams of rivers.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images//statue-2691173_1920.jpg" class="d-block w-100">

        <div class="carousel-caption d-none d-md-block">
          <h5>Buddhism</h5>
          <p>Place for great monks and Buddhists.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images//pexels-chethan-gowda-4226919.jpg" class="d-block w-100">

        <div class="carousel-caption d-none d-md-block">
          <h5>Great  Snow Mountains</h5>
          <p>Neighter hot nor cold.</p>
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
      <h2>Leh Ladakh</h2>
    </B>

  </div>
  <div class="text-center mt-1 mb-4 ">
    <!-- <button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button> -->
    <button type="button" class="btn btn-warning btn-lg ">SCHEDULE A TRIP</button>

  </div>

  <div class="container-fluid text-center">
    <div class=" bg-light changeStyle">
      <form name="date_start">
        <div>
          <label for="TRIP" class="text-info">
            <h3>Start Date:</h3>
          </label>
          <input type="date" id="start" name="start">
  
        </div>
       
        <div>
          <label  for="TRIP" class="text-info">
            <h3>End Date:</h3>
          </label>
          <input type="date" id="end" name="end">
  
        </div>
        
      </form>
      <input style="margin-left: 40px;" type="submit" class="btn btn-info">
    </div>

  </div>

  <div class="text-center event-headings">
    <B>
      <h2>WorLd wHeRe PeAcE MeeTs Minds</h2>
    </B>

  </div>

  <div class="row container-fluid" style="margin:auto">
    <div class="card mb-4 bg-light border-light">
      <div class="row no-gutters">
        <div class="col-md-5">
          <img src="images//pexels-avinash-patel-3392154.jpg" class="card-img" alt="...">
        </div>
        <div class="col-md-7">
          <div class="card-body">
            <h5 class="card-title display-4">Long Bike Rides...</h5>
            <p class="card-text text-center">
            
            <h5>Your long-awaited ride to Ladakh finally begins on this day.
               Pack your bags and get set for a thrilling ride. On the way, you will pass Vashisht Hot Springs.
                Although Manali is known for its freezing temperatures, these hot springs which are located 6 
                km from the town, have temperatures ranging from 43-50 °C. You will then visit Solang Valley, 
                known for a variety of winter sports, followed by Rohtang Pass
               and Keylong. Once you reach Jipsa, an overnight stay will be provided.</h>
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
          <img src="images/nubra-232728_1920.jpg" class="card-img" alt="...">
        </div>
        <div class="col-md-7">
          <div class="card-body">
            <h5 class="card-title display-4 ">Buddhists Culture<svg width="1em" height="1em" viewBox="0 0 16 16"
                class="bi bi-emoji-sunglasses" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                <path fill-rule="evenodd"
                  d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM6.5 6.497V6.5h-1c0-.568.447-.947.862-1.154C6.807 5.123 7.387 5 8 5s1.193.123 1.638.346c.415.207.862.586.862 1.154h-1v-.003l-.003-.01a.213.213 0 0 0-.036-.053.86.86 0 0 0-.27-.194C8.91 6.1 8.49 6 8 6c-.491 0-.912.1-1.19.24a.86.86 0 0 0-.271.194.213.213 0 0 0-.036.054l-.003.01z" />
                <path
                  d="M2.31 5.243A1 1 0 0 1 3.28 4H6a1 1 0 0 1 1 1v1a2 2 0 0 1-2 2h-.438a2 2 0 0 1-1.94-1.515L2.31 5.243zM9 5a1 1 0 0 1 1-1h2.72a1 1 0 0 1 .97 1.243l-.311 1.242A2 2 0 0 1 11.439 8H11a2 2 0 0 1-2-2V5z" />
              </svg></h5>
            <p class="card-text text-center">
            
            <h5>Buddhist Culture Economics or the way in which work life is organized and the demands of production 
              are met form an integral part of any culture. Buddhist economics forms an integral part of the Buddhist culture.
               Buddhist Economics does not work to maximum consumption 
              but human well-being, which lies in a simple, purposeful and dutiful life, in which rightful livelihood is earned.
              Human beings must remain true to their heritage and avoid materialistic pursuit. Mechanical and redundant work that
               deprives the soul of meaningful pursuit is looked down upon, while too much leisure also is not approved of.
            
            </h5>
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
          <img src="images//buddhism-1822518_1920.jpg" class="card-img" alt="...">
        </div>
        <div class="col-md-7">
          <div class="card-body">
            <h5 class="card-title display-4">Monks and  Monastaries</h5>
            <p class="card-text">
            
            <h5>
              Renowned as the oldest Buddhist learning centre, the Alchi Gompa is one
               of the magnificently built monasteries in Ladakh. Located 70 kilometres west of Leh on the banks 
               of the Indus River, it is also the largest and most famous of the gompas built by Tibetan translator 
               Rinchen Zangpo in the middle of the 11th century. With the lack of a monarchy, he appointed four 
              families to look after the monastery till the 15th century when it was taken over by the Likir Monastery.

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

  <div class="container-fluid row" style="margin:auto;">
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
  <?php
  include("footer.html");
  ?>
</body>

</html>