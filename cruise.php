<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Latest compiled and minified CSS -->

    <title>Cruise</title>
     <script src="jquery-3.5.1.min.js"></script>
    <script src="jquery-ui.min.js"></script>
    <link rel="stylesheet" href="jquery-ui.min.css">
    
</head>
<style>
    .card-img {
        height: 100%;
        object-fit: cover;
    }
</style>

<body>


    <?php
  include("navbar.php");
  ?>

  





    <div id="carouselExampleCaptions" class="carousel slide " data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>


        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/c1.jpg" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Find Ur Best Cruise</h5>
                    <p>One Of The Trustable Website</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="images/c2.jpg" class="d-block w-100">

                <div class="carousel-caption d-none d-md-block">
                    <h5>Find Ur Best Cruise</h5>
                    <p>One Of The Trustable Website</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="images/c4.jpg" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Find Ur Best Cruise</h5>
                    <p>One Of The Trustable Website</p>
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

    <!--****************************************Top Cruises****************************************************************-->
    <div class="text-center " name="click"
        style="margin-top:25px;font-weight:bolder;font-size: xx-large;padding: 30px;">
        <B>
            <h1>Cruises</h1>
        </B> 
    </div>


   
        <div class="row container-fluid" style="margin:auto">
            <div class="card mb-4 bg-light border-light">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="images/goa.jpg" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h6 class="card-title display-4">Mumbai To Goa</h6>
                            <p class="card-text">
                            <p><h5 id="b">The journey from Mumbai to Goa is now more fun and luxurious with the launch of India’s
                                first domestic luxury cruise liner Angriya. The cruise, operating on the Mumbai-Goa sea
                                route from last weekend, is a luxurious 7-deck, 131-meter long passenger ship built in
                                Japan. Complete with bars, restaurants, swimming pool, spa and discotheque, the ship can
                                accommodate about 400 passengers.</h5></p>
                            <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                            <br><input type="button" class="btn btn-dark" id="sub"  name="Mumba_Goa_Cruise_favBtn" value="Add Place To your List">
                               <br><br>
                            <a href="cruiseend.php" class="btn btn-outline-dark">Explore</a><br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row container-fluid" style="margin:auto">
            <div class="card mb-4 bg-light border-light">
                <div class="row no-gutters">

                    <div class="col-md-8">
                        <div class="card-body">
                            <h6 class="card-title display-4">Goa Cruises</h6>
                            <p class="card-text">
                            <p><h5>The glorious land of Goa, despite being one of the smallest states in the country, it
                                holds the top position for the places to visit if you want to have a good time. The
                                popular beach fronts will keep you in a sun, sand and surf mode, but if you want to
                                explore the undaunted ocean, there are many cruise and sailing tours in North Goa.
                                Offering an amazing experience with tons of activities on a boat cruise, catamaran
                                cruise or even a luxury sea liner along the pristine deep waters of the Arabian Sea, it
                                is one of the most sought after adventure sports in Goa.</h5>

                            </p>
                            <br>
                            <input type="submit" class="btn btn-dark" name="Goa_Cruise_favBtn" value="Add Place To your List">
                                <br><br>
                            <a href="cruiseend.php" class="btn btn-outline-dark">Explore</a><br><br>

                        </div>
                    </div>
                    <div class="col-md-4">

                        <img src="images/mumbai.jpg" class="card-img" alt="...">
                    </div>
                </div>
            </div>
        </div>

        <div class="row container-fluid" style="margin:auto">
            <div class="card mb-4 bg-light border-light">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="images/ganges.jpg" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h6 class="card-title display-4">Kochi Houseboat</h6>
                            <p class="card-text">
                            <p><h5>Only a half hour from Kochi is the town of Alappuzha, which is affectionately nicknamed
                                the “Venice of the East” for its elaborate network of canals and its famous houseboat
                                cruises through them. Walk the pier, which is nearly 150 years old, and enjoy a
                                kettuvallam, a thatched roof boat ride which is like a house on the water. Relax and
                                float on before returning to your Cochin cruise ship.</h5>
                            </p>
                            <br><input type="submit" class="btn btn-dark" name="Kochi_Cruise_favBtn" value="Add Place To your List">
                               <br><br>
                            <a href="cruiseend.php" class="btn btn-outline-dark">Explore</a><br><br>
                            <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>




    <?php
  include("footer.html");
  ?>

</body>

</html>