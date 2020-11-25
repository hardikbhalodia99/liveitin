<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Latest compiled and minified CSS -->

	<title>Themeparks</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
	 crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
	 crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
	 crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
	 crossorigin="anonymous">
	</script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="owl.carousel.min.css">
	<link rel="stylesheet" href="owl.theme.default.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">


	<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="css/beaches.css">
	<link rel="stylesheet" href="css/HomeCSS.css">
    <script src="js/submit.js"></script>


</head>
<style>
	.card-img {
		height: 100%;
		object-fit: cover;
	}
</style>

<body>


	<?php
  include("nav.php");
  ?>
<script>
$(document).ready(function(){
$('#WaterKingdom_favBtn').click(function(){
var place="Water Kingdom,Mumbai";
var imgSrc="images/themepark23.jpg";
var loc="themepark.php";
var id="WaterKingdom_favBtn";
$.ajax({
url:'insert.php',
type:'post',
data:{'place':place,'imgSrc':imgSrc,'loc':loc,'id':id},

success:function(data)
{
    console.log(data);
}
});

$('#WaterKingdom_favBtn').prop('disabled',true);
$('#WaterKingdom_favBtn').val('Already Added To Your Favourites');
$('#WaterKingdom_favBtn').css("background-color", "green");

});

$('#EsselWorld_favBtn').click(function(){
var place="Essel World,Mumbai";
var imgSrc="images/themepark5.jpg";
var loc="themepark.php";
var id="EsselWorld_favBtn";
$.ajax({
url:'insert.php',
type:'post',
data:{'place':place,'imgSrc':imgSrc,'loc':loc,'id':id},

success:function(data)
{
    console.log(data);
}
});
$('#EsselWorld_favBtn').prop('disabled',true);
$('#EsselWorld_favBtn').val('Already Added To Your Favourites');
$('#EsselWorld_favBtn').css("background-color", "green");
});

$('#Atlantis_favBtn').click(function(){
var place="Atlantis Water Park,Dubai";
var imgSrc="images/themepark6.jpg";
var loc="themepark.php";
var id="Atlantis_favBtn";
$.ajax({
url:'insert.php',
type:'post',
data:{'place':place,'imgSrc':imgSrc,'loc':loc,'id':id},

success:function(data)
{
    console.log(data);
}
});
$('#Atlantis_favBtn').prop('disabled',true);
$('#Atlantis_favBtn').val('Already Added To Your Favourites');
$('#Atlantis_favBtn').css("background-color", "green");
});

});
</script>




	<div id="carouselExampleCaptions" class="carousel slide " data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>


		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="images/themepark3.jpg" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="text-primary">Ramoji Film City,Hyderabad</h5>
                </div>
            </div>

            <div class="carousel-item">
                <img src="images/themepark1.jpg" class="d-block w-100">

                <div class="carousel-caption d-none d-md-block">
                    <h5>Imagica,Pune</h5>
                </div>
            </div>

            <div class="carousel-item">
                <img src="images/themepark4.jpg" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Atlantis Water Park,Dubai</h5>
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
            <h2>Themeparks</h2>
        </B>
    </div>


    <form name="f1" action="">
        <div class="row container-fluid" style="margin:auto">
            <div class="card mb-4 bg-light border-light">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="images/themepark23.jpg" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h6 class="card-title display-4">Water Kingdom,Mumbai</h6>
                            <p class="card-text">
                            <p>
                            <h5>Asia’s largest theme water parks, it boasts of the largest wave pool in the world,
                                slides that will test you, play pools to help you adopt the philosophy of chill and
                                great food. There are a few restaurants serving multiple cuisines including Tai Pan,
                                Kabab Corner, Hunger Thrill, Oh Mumbai, Dip n Sip, Food Wharf etc. but don’t expect it
                                to be a fine-dining menu. It’s less about judging the food, more about reliving some
                                childhood memories. Have a scoop from Kwality Walls to finish.<h5>
                                    </p>
                                    <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                                    <br><input type="submit" class="btn btn-dark" id="WaterKingdom_favBtn" name="WaterKingdom_favBtn" value="Add Place To your List">
                                       <br><br>
                                    <a href="themeparkend.php" class="btn btn-outline-dark">Explore</a><br><br>
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
                            <h6 class="card-title display-4">Essel World,Mumbai</h6>
                            <p class="card-text">
                            <p>
                            <h5>One of the most famous and popular amusement parks in the country, Essel World is
                                located in Gorai, close to the capital of Maharashtra, Mumbai. EsselWorld and Water
                                Kingdom together make one of Asia's largest amusement parks. They expand over an area of
                                64 acres and are frequented by locals and non-locals from all age groups, especially
                                kids. With some exciting rides and entertainment, Essel World and Water Kingdom are a
                                favourite summer destination for many families. </h5>
                            </p>
                            <br>
                                <input type="submit" class="btn btn-dark" id="EsselWorld_favBtn" name="EsselWorld_favBtn" value="Add Place To your List"><br><br>
                            <a href="themeparkend.php" class="btn btn-outline-dark">Explore</a><br><br>

                        </div>
                    </div>
                    <div class="col-md-4">

                        <img src="images/themepark5.jpg" class="card-img" alt="...">
                    </div>
                </div>
            </div>
        </div>
        <div class="row container-fluid" style="margin:auto">
            <div class="card mb-4 bg-light border-light">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="images/themepark6.webp" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h6 class="card-title display-4">Atlantis Water Park,Dubai</h6>
                            <p class="card-text">
                            <p>
                            <h5>Aquaventure Waterpark promises a world of excitement to make you feel different in water in more ways than one. Get your pulse racing on 30 slides and attractions, laugh your way down Dubai’s longest Lazy River, and relax on 500m of private beach. Thrill-seekers can scream down world-record-breaking waterslides, young families will enjoy the safety of Splashers Island, and animal lovers can get up close with dolphins, sea lions, sharks and stingrays.</h5>
                            </p>
                            <br><input type="submit" class="btn btn-dark" id="Atlantis_favBtn" name="Atlantis_favBtn" value="Add Place To your List">
                                <br><br>
                            <a href="themeparkend.php" class="btn btn-outline-dark">Explore</a><br><br>
                            <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                        </div>
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