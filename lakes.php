<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Latest compiled and minified CSS -->

    <title>Lakes</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
    <script src="js/submit.js" type="text/javascript"></script>


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
$('#Wular_favBtn').click(function(){
var place="Wular Lake, Kashmir";
var imgSrc="images/lake18.jpg";
var loc="lakes.php";
var id="Wular_favBtn";
$.ajax({
url:'insert.php',
type:'post',
data:{'place':place,'imgSrc':imgSrc,'loc':loc,'id':id},

success:function(data)
{
    console.log(data);
}
});

$('#Wular_favBtn').prop('disabled',true);
$('#Wular_favBtn').val('Already Added To Your Favourites');
$('#Wular_favBtn').css("background-color", "green");
//$('#Mumbai_Goa_favBtn').classList.add('btn btn-success');
//$('#Mumbai_Goa_favBtn').classList.remove('btn btn-dark');
});

$('#Nainital_favBtn').click(function(){
var place="Nainital Lake (Naini Lake),Uttarakhand";
var imgSrc="images/lake10.jpg";
var loc="lakes.php";
var id="Nainital_favBtn";
$.ajax({
url:'insert.php',
type:'post',
data:{'place':place,'imgSrc':imgSrc,'loc':loc,'id':id},

success:function(data)
{
    console.log(data);
}
});
$('#Nainital_favBtn').prop('disabled',true);
$('#Nainital_favBtn').val('Already Added To Your Favourites');
$('#Nainital_favBtn').css("background-color", "green");
});
$('#Saputara_favBtn').click(function(){
var place="Saputara Lake,Uttarakhand";
var imgSrc="images/lake13.jpg";
var loc="lakes.php";
var id="Saputara_favBtn";
$.ajax({
url:'insert.php',
type:'post',
data:{'place':place,'imgSrc':imgSrc,'loc':loc,'id':id},

success:function(data)
{
    console.log(data);
}
});
$('#Saputara_favBtn').prop('disabled',true);
$('#Saputara_favBtn').val('Already Added To Your Favourites');
$('#Saputara_favBtn').css("background-color", "green");
});


$('#Pichola_favBtn').click(function(){
var place="Pichola Lake,Udaipur";
var imgSrc="images/lake24.jpg";
var loc="lakes.php";
var id="Pichola_favBtn";
$.ajax({
url:'insert.php',
type:'post',
data:{'place':place,'imgSrc':imgSrc,'loc':loc,'id':id},

success:function(data)
{
    console.log(data);
}
});
$('#Pichola_favBtn').prop('disabled',true);
$('#Pichola_favBtn').val('Already Added To Your Favourites');
$('#Pichola_favBtn').css("background-color", "green");
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
                <img src="images/lake7.jpg" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Dal Lake,Srinagar</h5>
                    <p>Most Popular Lakes</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="images/lake8.jpg" class="d-block w-100">

                <div class="carousel-caption d-none d-md-block">
                    <h5>Pangong Lake,Ladakh</h5>
                    <p>Most Popular Lakes</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="images/lake19.jpg" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Lake Pichola,Udaipur</h5>
                    <p>Most Popular Lakes</p>
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
            <h1>Lakes</h1>
        </B>
    </div>


    <form name="f1" action="">
        <div class="row container-fluid" style="margin:auto">
            <div class="card mb-4 bg-light border-light">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="images/lake18.jpg" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h6 class="card-title display-4">Wular Lake, Kashmir</h6>
                            <p class="card-text">
                            <p><h5>Located in Jammu and Kashmir, this lake is considered as the largest fresh water lake in
                                India. The water reservoir is surrounded by farms of small vegetation; plus you can
                                experience some interesting sites like mountains, vegetation, flowers etc. Mountain
                                skiing, and hiking facilities are also available on the bank of the lake. So put on your
                                adventurer hat and witness the fabled beauty of Kashmir. The best time to visit the
                                Wular Lake is during the months of June and August.<h5></p>
                            <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                            <br><input type="submit" class="btn btn-dark" id="Wular_favBtn" name="Wular_favBtn" value="Add Place To your List">
                                <br><br>
                            <a href="lakesend.php" class="btn btn-outline-dark">Explore</a><br><br>
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
                            <h6 class="card-title display-4">Nainital Lake (Naini Lake),Uttarakhand</h6>
                            <p class="card-text">
                            <p><h5>Aha! I have been to this place ‘n’ no of times but have never got bored. The best part
                                about Naini Lake is that it located right in the middle of town and offers a spectacular
                                view of the hills. The 3.5 kms long lake captures the essence of nature and offers an
                                amazing view of the town. Nainital Lake is a year-round destination, but the ideal time
                                to visit is between the months of March and June. Come what may, this place is must a
                                visit for all the lake lovers.</h5>
                            </p>
                            <br><input type="submit" class="btn btn-dark" id="Nainital_favBtn" name="Nainital_favBtn" value="Add Place To your List">
                                
                               <br><br>
                            <a href="lakesend.php" class="btn btn-outline-dark">Explore</a><br><br>

                        </div>
                    </div>
                    <div class="col-md-4">

                        <img src="images/lake10.jpg" class="card-img" alt="...">
                    </div>
                </div>
            </div>
        </div>
        


        <div class="row container-fluid" style="margin:auto">
            <div class="card mb-4 bg-light border-light">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="images/lake24.jpg" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h6 class="card-title display-4">Lake Pichola,Udaipur</h6>
                            <p class="card-text">
                            <p><h5>Mesmerising the visitors with its charm and enchanting beauty, Lake Pichola is an
                                artificial lake built in the year of 1362 AD and one of the popular sightseeing places
                                to visit in Udaipur. It was built by a Banjara tribesman, Pichhu Banjara who used to
                                transport grain during the reign of Maharana Lakha.</h5>
                            </p>
                            <br><input type="submit" class="btn btn-dark"  id="Pichola_favBtn" name="Pichola_favBtn" value="Add Place To your List"><br><br>
                            <a href="lakesend.php" class="btn btn-outline-dark">Explore</a><br><br>
                            <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
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
                            <h6 class="card-title display-4">Saputara Lake,Gujarat</h6>
                            <p class="card-text">
                            <p><h5>Saputara lake is located in Gujarat.The picturesque lake Saputara is located on the
                                foothills of Sahyadri range. This lake is
                                the perfect site for boating, paddling and many more activities. March to November is
                                the best to visit this place.</h5></p>
                            <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                            <br><input type="submit" class="btn btn-dark" name="Saputara_favBtn" id="Saputara_favBtn" value="Add Place To your List"><br><br>
                            <a href="lakesend.php" class="btn btn-outline-dark">Explore</a><br><br>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="images/lake13.jpg" class="card-img" alt="...">
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