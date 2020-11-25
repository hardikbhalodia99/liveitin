<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Latest compiled and minified CSS -->

    <title>Spiritual Places</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

   
     
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="owl.carousel.min.css">
    <link rel="stylesheet" href="owl.theme.default.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/beaches.css">
    <link rel="stylesheet" href="css/HomeCSS.css">
    <!--<script src="js/btn.js" type="text/javascript"></script>-->


</head>
<style>
    .card-img {
        height: 100%;
        object-fit: cover;
    }
</style>

<script>
$(document).ready(function(){
$('#Golden_favBtn').click(function(){
var place="Golden Temple,Amritsar";
var imgSrc="images/spirtual2.jpg";
var loc="spiritual.php";
var id="Golden_favBtn";
$.ajax({
url:'insert.php',
type:'post',
data:{'place':place,'imgSrc':imgSrc,'loc':loc,'id':id},

success:function(data)
{
    console.log(data);
}
});

$('#Golden_favBtn').prop('disabled',true);
$('#Golden_favBtn').val('Already Added To Your Favourites');
$('#Golden_favBtn').css("background-color", "green");
//$('#Mumbai_Goa_favBtn').classList.add('btn btn-success');
//$('#Mumbai_Goa_favBtn').classList.remove('btn btn-dark');
});

$('#Konark_favBtn').click(function(){
var place="Konark Sun Temple";
var imgSrc="images/spiritual5.jpg";
var loc="spiritual.php";
var id="Konark_favBtn";
$.ajax({
url:'insert.php',
type:'post',
data:{'place':place,'imgSrc':imgSrc,'loc':loc,'id':id},

success:function(data)
{
    console.log(data);
}
});
$('#Konark_favBtn').prop('disabled',true);
$('#Konark_favBtn').val('Already Added To Your Favourites');
$('#Konark_favBtn').css("background-color", "green");
});

$('#Somnath_favBtn').click(function(){
var place="Somnath Jyotirlings,Gujarat";
var imgSrc="images/spiritual16.jpg";
var loc="spiritual.php";
var id="Somnath_favBtn";
$.ajax({
url:'insert.php',
type:'post',
data:{'place':place,'imgSrc':imgSrc,'loc':loc,'id':id},

success:function(data)
{
    console.log(data);
}
});
$('#Somnath_favBtn').prop('disabled',true);
$('#Somnath_favBtn').val('Already Added To Your Favourites');
$('#Somnath_favBtn').css("background-color", "green");
});

});
</script>

<body>


    <?php
  include("nav.php");
  ?>
  
  



    <div id="carouselExampleCaptions" class="carousel slide " data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>


        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/spiritual2.jpg" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Swaminarayan Akshardham,New Delhi</h5>
                </div>
            </div>

            <div class="carousel-item">
                <img src="images/spiritual3.jpg" class="d-block w-100">

                <div class="carousel-caption d-none d-md-block">
                    <h5>Kedarnath,Uttarakhand</h5>
                </div>
            </div>

            <div class="carousel-item">
                <img src="images/spiritual1.jpg" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Lotus Temple,New Delhi</h5>
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
            <h2>Spiritual Places</h2>
        </B>
    </div>


    <form name="f1" action="">
        <div class="row container-fluid" style="margin:auto">
            <div class="card mb-4 bg-light border-light">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="images/spirtual2.jpg" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h6 class="card-title display-4">Golden Temple,Amritsar</h6>
                            <p class="card-text">
                            <p>
                            <h5>The Golden Temple Amritsar India (Sri Harimandir Sahib Amritsar) is not only a central
                                religious place of the Sikhs, but also a symbol of human brotherhood and equality.
                                Everybody, irrespective of cast, creed or race can seek spiritual solace and religious
                                fulfilment without any hindrance. It also represents the distinct identity, glory and
                                heritage of the Sikhs.<h5>
                                    </p>
                                    <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                                    <br><input type="button" class="btn btn-dark" id="Golden_favBtn"" name="Golden_favBtn" value="Add Place To your List"></button><br><br>
                                    <a href="spiritualend.php" class="btn btn-outline-dark">Explore</a><br><br>
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
                            <h6 class="card-title display-4">Konark Sun Temple</h6>
                            <p class="card-text">
                            <p>
                            <h5>On the shores of the Bay of Bengal, bathed in the rays of the rising sun, the temple at
                                Konarak is a monumental representation of the sun god Surya's chariot; its 24 wheels are
                                decorated with symbolic designs and it is led by a team of six horses. Built in the 13th
                                century, it is one of India's most famous Brahman sanctuaries.</h5>
                            </p>
                            <br><input type="button" class="btn btn-dark" id="Konark_favBtn" name="Konark_favBtn" value="Add Place To your List"><br><br>
                            <a href="spiritualend.php" class="btn btn-outline-dark">Explore</a><br><br>

                        </div>
                    </div>
                    <div class="col-md-4">

                        <img src="images/spiritual5.jpg" class="card-img" alt="...">
                    </div>
                </div>
            </div>
        </div>
        <div class="row container-fluid" style="margin:auto">
            <div class="card mb-4 bg-light border-light">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="images/spiritual6.jpg" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h6 class="card-title display-4">Somnath Jyotirlings,Gujarat</h6>
                            <p class="card-text">
                            <p>
                            <h5>Shree Somnath is first among the twelve Aadi Jyotirlings of India. Moon was
                                married to Twenty-Seven daughters of Daksha. However, he favoured Rohini and neglected
                                other queens.Moon arrived at the Prabhas Teerth and worshipped
                                Bhagvan Shiva. Pleased with the great penance and devotion of Moon, Bhagvan Shiva
                                blessed him and relieved him from the curse of darkness. Bhagvan
                                Shree Krishna is believed to have built Somnath temple with Sandalwood.</h5>
                            </p>
                            <br><input type="button" class="btn btn-dark" id="Somnath_favBtn" name="Somnath_favBtn" value="Add Place To your List">
                                <br><br>
                            <a href="spiritualend.php" class="btn btn-outline-dark">Explore</a><br><br>
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