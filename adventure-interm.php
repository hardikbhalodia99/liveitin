<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Latest compiled and minified CSS -->

  <title>Adventures</title>

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
$('#Maldivs_ScubaDiving_favBtn').click(function(){
var place="Scubadiving , Maldivs";
var imgSrc="images/adv-info=3.jpg";
var loc="adventure-interm.php";
var id="Maldivs_ScubaDiving_favBtn";
$.ajax({
url:'insert.php',
type:'post',
data:{'place':place,'imgSrc':imgSrc,'loc':loc,'id':id},

success:function(data)
{
    console.log(data);
}
});

$('#Maldivs_ScubaDiving_favBtn').prop('disabled',true);
$('#Maldivs_ScubaDiving_favBtn').val('Already Added To Your Favourites');
$('#Maldivs_ScubaDiving_favBtn').css("background-color", "green");

});

$('#Dubai_SkyDiving_favBtn').click(function(){
var place="Sky Diving , Dubai";
var imgSrc="images/adv-info-2.jpg";
var loc="adventure-interm.php";
var id="Dubai_SkyDiving_favBtn";
$.ajax({
url:'insert.php',
type:'post',
data:{'place':place,'imgSrc':imgSrc,'loc':loc,'id':id},

success:function(data)
{
    console.log(data);
}
});
$('#Dubai_SkyDiving_favBtn').prop('disabled',true);
$('#Dubai_SkyDiving_favBtn').val('Already Added To Your Favourites');
$('#Dubai_SkyDiving_favBtn').css("background-color", "green");
});

$('#Rishikesh_RiveRafting_favBtn').click(function(){
var place="River Rafting , Rishikesh";

var imgSrc="images/adventure-info-1.jpg";
var loc="adventure-interm.php";
var id="Rishikesh_RiveRafting_favBtn";
$.ajax({
url:'insert.php',
type:'post',
data:{'place':place,'imgSrc':imgSrc,'loc':loc,'id':id},

success:function(data)
{
    console.log(data);
}
});
$('#Rishikesh_RiveRafting_favBtn').prop('disabled',true);
$('#Rishikesh_RiveRafting_favBtn').val('Already Added To Your Favourites');
$('#Rishikesh_RiveRafting_favBtn').css("background-color", "green");
});

});
</script>
   
  


  <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel"  >
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      
      
    </ol>
    <div class="carousel-inner"  >
      <div class="carousel-item active" >
        <img src="images/adventure-carousel-1.jpg" class="d-block w-100" >
        <div class="carousel-caption d-none d-md-block">
          <h5 style="color: navy;">River Rafting</h5>
          <p style="color: navy;">At Hrishikesh,India</p>
        </div>
      </div>
      
      <div class="carousel-item" >
        <img src="images/adven-carousel-2.jpg" class="d-block w-100" >
        
        <div class="carousel-caption d-none d-md-block">
          <h5>SkyDiving</h5>
          <p>Dubai</p>
        </div>
      </div>
      
      <div class="carousel-item" >
        <img src="images/adv-carousel-3.jpg"class="d-block w-100" >
        <div class="carousel-caption d-none d-md-block">
          <h5>ScubaDiving</h5>
          <p>Maldivs Islands</p>
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

  <!--****************************************Top Beaches****************************************************************-->
  <div class="text-center " name="click" style="margin-top:25px;font-weight:bolder;font-size: xx-large;padding: 30px;">
    <B>
      <h2>Adventures</h2>
    </B>
  </div>


 <form name="f1" action="">
  <div class="card mb-6 ">
    <div class="row ">
      <div class="col-md-7 cardWhereToGO">
        <a href="miamiPage.php">
        <img src="images/adv-info-2.jpg" name="Dubai_SkyDiving_imgSrc" class="card-img" alt=" ">
      </a>
      </div>
      <div class="col container">
        <div class="card-body str">
          <h2 style="opacity: 1;font-weight: bolder;font-size: 30px;" name="skydiving"><svg style="margin: 2px;" width="1em" height="1em"
              viewBox="0 0 16 16" class="bi bi-compass" fill="black" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M8 15.016a6.5 6.5 0 1 0 0-13 6.5 6.5 0 0 0 0 13zm0 1a7.5 7.5 0 1 0 0-15 7.5 7.5 0 0 0 0 15z" />
              <path
                d="M6 1a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2H7a1 1 0 0 1-1-1zm.94 6.44l4.95-2.83-2.83 4.95-4.95 2.83 2.83-4.95z" />
            </svg>SkyDiving</h2>
          <hr>
          <p class="card-text">
          <h5>Skydiving is parachuting from an airplane for fun. Skydiving can be done individually and with groups of people. Training is required. Unlike most paratroopers, skydivers often wait until they are low, before opening the parachute. The jump can also be made from a helicopter or a balloon that is high enough in the sky. Skydiving can be an exciting sport.Many places like Dubai,Spain are famous for it.</h5>
          </p>
          <br>
           <input type="submit"  class="btn btn-dark" id="Dubai_SkyDiving_favBtn" name="Dubai_SkyDiving_favBtn" value="Add To Favourites" id="SkyDiving">
          <!--  <input type="submit"  class="btn btn-dark" name="addTOFav" value="Add To Favourites"> -->
           <br><br>
          <a href="adventure-last.php" class="btn btn-outline-dark">Explore</a><br><br>
        </div>
      </div>
    </div>
  </div>



  <div class="card mb-6 ">
    <div class="row ">
      <div class="col-md-7 cardWhereToGO">
        <img src="images/adventure-info-1.jpg" name="Rishikesh_RiveRafting_imgSrc" class="card-img" alt="Hawai , America">
      </div>
      <div class="col container">
        <div class="card-body str">
          <h2 style="opacity: 1;font-weight: bolder;font-size: 30px;" name="RiverRafting"><svg style="margin: 2px;" width="1em" height="1em"
              viewBox="0 0 16 16" class="bi bi-compass" fill="black" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M8 15.016a6.5 6.5 0 1 0 0-13 6.5 6.5 0 0 0 0 13zm0 1a7.5 7.5 0 1 0 0-15 7.5 7.5 0 0 0 0 15z" />
              <path
                d="M6 1a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2H7a1 1 0 0 1-1-1zm.94 6.44l4.95-2.83-2.83 4.95-4.95 2.83 2.83-4.95z" />
            </svg>White Water Rafting in Rishikesh</h2>
          <hr>
          <p class="card-text">
          <h5>
            Rafting at the Rafting Capital of India is something every adventure lover craves for and since rafting is a sport you can enjoy with the whole family therefore large number of tourists arrive in Rishikesh every year.  You can feast your eyes with the enchanting beauty of The Ganges and the mesmerizing sceneries surrounding the river.</h5>
          </p>
          <br> <input type="submit"  class="btn btn-dark" id="Rishikesh_RiveRafting_favBtn" name="Rishikesh_RiveRafting_favBtn" value="Add To Favourites" id="Rishikesh">
           <br><br>
          <a href="adventure-last.php" class="btn btn-outline-dark">Explore</a><br><br>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-6 ">
    <div class="row ">
      <div class="col-md-7 cardWhereToGO">
        <img src="images/adv-info=3.jpg" name="Maldivs_ScubaDiving_imgSrc" class="card-img" alt="">
      </div>
      <div class="col container">
        <div class="card-body str">
          <h2 style="opacity: 1;font-weight: bolder;font-size: 30px;" name="ScubaDiving"><svg style="margin: 2px;" width="1em" height="1em"
              viewBox="0 0 16 16" class="bi bi-compass" fill="black" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M8 15.016a6.5 6.5 0 1 0 0-13 6.5 6.5 0 0 0 0 13zm0 1a7.5 7.5 0 1 0 0-15 7.5 7.5 0 0 0 0 15z" />
              <path
                d="M6 1a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2H7a1 1 0 0 1-1-1zm.94 6.44l4.95-2.83-2.83 4.95-4.95 2.83 2.83-4.95z" />
            </svg>ScubaDiving at Maldivs</h2>
          <hr>
          <p class="card-text">
          <h5>
            Scuba diving is a mode of underwater diving where the diver uses a self-contained underwater breathing apparatus (scuba), which is completely independent of surface supply, to             breathe underwater.Most of Islands And places nearby Ocean have scubadiving facilities.</h5>
          </p>
          <br> <input type="submit"  class="btn btn-dark" id="Maldivs_ScubaDiving_favBtn" name="Maldivs_ScubaDiving_favBtn" value="Add To Favourites" id="ScubaDiving at Maldivs">
           <br><br>
          <a href="adventure-last.php" class="btn btn-outline-dark">Explore</a><br><br>
        </div>
      </div>
    </div>
  </div>
  </form>


<?php
  include("footer.html");
  ?>

<!-- Code injected by live-server -->
<script type="text/javascript">
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script></body>

</html>

