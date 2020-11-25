<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
   
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
    <style>
 .card-img-top {
        height: 100%;
        object-fit: cover;
    }
     ion-icon {
  color:green;
  
  margin:4px 22px;
}
</style>
</head>
<body>
    <?php
    include("nav.php");
    ?><br><br>

 <div class="modal fade bd-example-modal-lg" tabindex="-1" id="myModal">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hotel booking conformation message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                     <div class="jumbotron container text-center bg-light">
        <h1><img src="check-circle-solid.svg" style="height:100px;"> </h1>
        <h1 class="display-4 text-success text-center">Awesome</h1>
        <p class="lead">Your booking <span id="getHotelName"></span> is confirmed.Sit back and relax,will contact you shortly</p>
        <hr class="my-4">
        
        <p class="lead ">
            <a class="btn btn-success btn-lg" href="flightBook.html" role="button">BOOK A FLIGHT</a>
            <a class="btn btn-success btn-lg" href="index.php" role="button">BACK TO HOMEPAGE</a>
        </p>
    </div>
    <div>
        <div class="container col-md-10 col-sm-10">
            <h2 class="text-success text-center">Instructions</h2>
            <div class="row text-center">
                <div class="col-md col-sm">
                    
                    <ion-icon name="bus-outline" size="large" class="text-center"></ion-icon>
                    <br>
                    <button class="btn btn-success"  type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                       Free Transportation
                      </button>
                   
                    <div class="collapse" id="collapseExample">
                      <div class="card card-body">
                       The Transportation is free and a pickup Bus arrives at your Hotel location everyday morning and will drop you back there at night.
                      </div>
                    </div>
                </div>
               
                    <div class="col-md col-sm">
                    
                        <ion-icon name="walk-outline" size="large" class="text-center"></ion-icon>
                        <br>
                        <button class="btn btn-success"  type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
                            Free Guide
                          </button>
                       
                        <div class="collapse" id="collapseExample1">
                          <div class="card card-body">
                            A Tour guid will be provided to you and he/she will give introduction to respective places and tell you about the main attraction of the place!
                          </div>
                        </div>
                    </div>
            
                    <div class="col-md col-sm">
                        <ion-icon name="repeat-outline" size="large" class="text-center"></ion-icon>
                        <br>
                        <button class="btn btn-success"  type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
                            Easy Currency Exchange
                          </button>
                       
                        <div class="collapse" id="collapseExample2">
                          <div class="card card-body">
                           We provide Easy Curency Exchange at Current currency price.
                          </div>
                        </div>
                    </div>
                    <div class="col-md col-sm">
                            <ion-icon name="people-outline" size="large" class="text-center"></ion-icon>
                            <br>
                        <button class="btn btn-success"  type="button" data-toggle="collapse" data-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample3">
                            Social Distancing
                          </button>
                       
                        <div class="collapse" id="collapseExample3">
                          <div class="card card-body">
                           We take care of covid-19 rules like social distancing, senitization of rooms everyday and wearing a mask.
                          </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <br>
        <div class="container col-md-8 col-sm-10">
            <h2 class="text-success text-center">Complementary services</h2>
           
            <br>
            <br>
            <div class="row text-center">
              <div class="col-md col-sm">
                  
                  <ion-icon name="wifi-outline" size="large" class="text-center"></ion-icon>
                <h5 class="text-success">Free Wifi</h5>
                </div>
                <div class="col-md col-sm">
                    <ion-icon name="restaurant-outline" size="large" class="text-center"></ion-icon>
                    <h5 class="text-success">Hygienic Food</h5>
                    </div>
            
                    <div class="col-md col-sm">
                        <ion-icon name="water-outline" size="large" class="text-center"></ion-icon>
                        <h5 class="text-success ">Senitization</h5>
                    </div>
                    <div class="col-md col-sm">
                            <ion-icon name="close-circle-outline"  size="large" class="text-center"></ion-icon>
                            <h5 class="text-success ">Easy online cancelation</h5>
                    </div>
            </div>
        </div>
        
    
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<?php

$des=$_POST['destination'];
$checkIn=$_POST['startDate'];
$checkOut=$_POST['endDate'];
$adult=$_POST['adults'];
$child=$_POST['kids'];
$tot=$child+$adult;
$curlop = curl_init();

curl_setopt_array($curlop, array(
	CURLOPT_URL => "https://rapidapi.p.rapidapi.com/locations/search?query=".$des."&locale=en_US",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => array(
		"x-rapidapi-host: hotels4.p.rapidapi.com",
		"x-rapidapi-key: 18daba6401mshbe0740ea0d7b755p1df9f7jsn20cef4fb4567"
	),
));
curl_setopt($curlop, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($curlop);
$err = curl_error($curlop);

curl_close($curlop);
$dataop=json_decode($response);
if ($err) {
	echo "cURL Error #:" . $err;
} else {

        $destId=$dataop->suggestions[0]->entities[0]->destinationId;


$curl = curl_init();

curl_setopt_array($curl,array(
	CURLOPT_URL => "https://rapidapi.p.rapidapi.com/properties/list?destinationId=".$destId."&pageNumber=1&checkIn=".$checkIn."&checkOut=".$checkOut."&pageSize=25&adults1=1&currency=INR&locale=en_US&sortOrder=PRICE",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => array(
		"x-rapidapi-host: hotels4.p.rapidapi.com",
		"x-rapidapi-key: 18daba6401mshbe0740ea0d7b755p1df9f7jsn20cef4fb4567"
	),
));
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);
$data =json_decode($response);
if ($err) {
	echo "cURL Error #:" . $err;
} else 
{
?>

<div class="row">
<?php
$size=sizeof($data->data->body->searchResults->results);
for($i=0;$i<$size;$i++)
{
$name=$data->data->body->searchResults->results[$i]->name;
$rating=$data->data->body->searchResults->results[$i]->starRating;
$url=$data->data->body->searchResults->results[$i]->thumbnailUrl;
$add=$data->data->body->searchResults->results[$i]->address->streetAddress;
$add2=$data->data->body->searchResults->results[$i]->address->locality;
$add3=$data->data->body->searchResults->results[$i]->address->postalCode;
$price=$data->data->body->searchResults->results[$i]->ratePlan->price->current;


echo '<div class="card mb-3 bg-light col-md-6" >
  <div class="row no-gutters">
    <div class="col-lg-6 col-md-6 col-sm-6">
      <img src='. $url .' class="card-img-top" id="imgSrc'.$i.'">
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6">
      <div class="card-body">
        <h3 class="card-title" id="name'.$i.'">'. $name .'</h3>
        <p class="card-text" id="address'.$i.'">Address:'.$add.' , '.$add2.'</p>
        <p class="card-text" id="rating'.$i.'">Star-Rating:'.$rating.' </p>
	<p class="card-text" id="price'.$i.'">Price: '.$price.'</p>
       <button class="btn btn-outline-primary" id="addHotel'.$i.'" value="BOOK NOW'.$i.'"  onclick="book('.$i.')">Book Now!</button>
      
      </div>
    </div>
  </div>
</div>';
?>


<?php

}
}
}
?><br><br>
</div>
<script>

function set(id)
{
    var id="addHotel"+id;
    $("#confHotel").css('visibility','visible');
}
    function book(id)
    {
                
                 var btnname=document.getElementById('addHotel' + id).value; 
                 var hotelname=document.getElementById('name'+id).innerText;
                var price = document.getElementById('price' + id).innerText;
                var rating= document.getElementById('rating' + id).innerText;
                var address = document.getElementById('address' + id).innerText;
                var imgSrc=document.getElementById('imgSrc'+id).src;
                var checkIn ="<?php echo $checkIn; ?>";
                var checkOut ="<?php echo $checkOut; ?>";
                var destination = "<?php echo $_POST['destination']; ?>";
                document.getElementById("getHotelName").innerHTML=hotelname;
               

                console.log(price);
                console.log(hotelname);
                console.log(rating);
                console.log(address);
                console.log(checkIn);
                console.log(checkOut);
                console.log(imgSrc);
    
       $.ajax({
                url:'insertHotels.php',
                type:'post',
                data:{'price':price,'hotelname':hotelname,'rating':rating,'checkIn':checkIn,'checkOut':checkOut,'address':address,'imgSrc':imgSrc,'destination':destination},
            
                
                
                success:function(data)
                {
                    
                    console.log(data);
                  
                    
                }
                });
                  $('#myModal').modal('show');
              
                           
            }
</script>
<?php
include("footer.html");
?>

</body>

</html>