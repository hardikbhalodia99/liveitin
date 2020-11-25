<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
    <style>
    ion-icon {
  color:green;
  
  margin:4px 22px;
}
</style>
</head>
<body>
    <?php
    include("nav.php");
    ?><br><br><br>
    <div class="modal" tabindex="-1" id="myModal">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Flight Ticket Conformation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
       <div class="jumbotron container text-center bg-light">
        <h1><img src="check-circle-solid.svg" style="height:100px;"> </h1>
        <h1 class="display-4 text-success text-center">Awesome</h1>
        <p class="lead">Your booking for Flight Ticket is confirmed.Sit back and relax,will mail details to you shortly</p>
        <hr class="my-4">
        
        <p class="lead ">
            <a class="btn btn-success btn-lg" href="hotelBook.html" role="button">BOOK A HOTEL</a>
            <a class="btn btn-success btn-lg mx-auto" href="index.php" role="button">BACK TO HOMEPAGE</a>
        </p>
    </div>
   
        <div class="container col-md-10 col-sm-10">
            <h2 class="text-success text-center">Services During Flight</h2>
           
            <br>
            <br>
            <div class="row text-center">
              <div class="col-md col-sm">
                  
                  <ion-icon name="wifi-outline" size="large" class="text-center"></ion-icon>
                <h5 class="text-success">Free Wifi</h5>
                </div>
                <div class="col-md col-sm">
                  
                    <ion-icon name="laptop-outline" size="large" class="text-center"></ion-icon>
                  <h5 class="text-success">Free Unlimited Movies</h5>
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
                            <ion-icon name="airplane-outline"  size="large" class="text-center"></ion-icon>
                            <h5 class="text-success ">Online Flight Updates</h5>
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
$loc=$_POST['current_location'];
$des=$_POST['destination'];
$date=$_POST['startDate'];
$adult=$_POST['adults'];
$child=$_POST['kids'];
$tot=$adult+$child;


$curl1 = curl_init();

curl_setopt_array($curl1, array(
	CURLOPT_URL => "https://rapidapi.p.rapidapi.com/apiservices/autosuggest/v1.0/IN/INR/en-US/?query=".$loc,
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => array(
		"x-rapidapi-host: skyscanner-skyscanner-flight-search-v1.p.rapidapi.com",
		"x-rapidapi-key: 18daba6401mshbe0740ea0d7b755p1df9f7jsn20cef4fb4567"
	),
));
curl_setopt($curl1, CURLOPT_SSL_VERIFYPEER, false);
$response1 = curl_exec($curl1);
$err = curl_error($curl1);
$data1=json_decode($response1);
curl_close($curl1);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	$originAPI=$data1->Places[0]->PlaceId;

$curl1 = curl_init();

curl_setopt_array($curl1, array(
	CURLOPT_URL => "https://rapidapi.p.rapidapi.com/apiservices/autosuggest/v1.0/IN/INR/en-US/?query=".$des,
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => array(
		"x-rapidapi-host: skyscanner-skyscanner-flight-search-v1.p.rapidapi.com",
		"x-rapidapi-key: 18daba6401mshbe0740ea0d7b755p1df9f7jsn20cef4fb4567"
	),
));
curl_setopt($curl1, CURLOPT_SSL_VERIFYPEER, false);
$response1 = curl_exec($curl1);
$err = curl_error($curl1);
$data1=json_decode($response1);
curl_close($curl1);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	$destinationAPI=$data1->Places[0]->PlaceId;



$curl = curl_init();

curl_setopt_array($curl, array(
	CURLOPT_URL => "https://rapidapi.p.rapidapi.com/apiservices/browseroutes/v1.0/IN/INR/en-US/".$originAPI."/".$destinationAPI."/".$date."",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => array(
		"x-rapidapi-host: skyscanner-skyscanner-flight-search-v1.p.rapidapi.com",
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

<div class="container-fluid">
<?php
$i=0;

$name="";
$src="";
$direct="";
$origin=$data->Places[0]->Name;

$destination=$data->Places[1]->Name;

$x=sizeof($data->Carriers);
$y=sizeof($data->Quotes);

for($i=0;$i<$y;$i++)
{
for($j=0;$j<$x;$j++)
{
if($data->Quotes[$i]->OutboundLeg->CarrierIds[0]==$data->Carriers[$j]->CarrierId)
{
$name=$data->Carriers[$j]->Name;
}
}

$price=($data->Quotes[$i]->MinPrice);
$tot_price=($data->Quotes[$i]->MinPrice)*$tot;
$date=$data->Quotes[$i]->OutboundLeg->DepartureDate;
$dir=$data->Quotes[$i]->Direct;

if($dir==true)
{
    $direct="direct";
}
else
{
$direct="Non-direct";
}


if($name=="AirAsia India")
{
$src="images/airasia.png";
}
else if($name=="Air India")
{
$src="images/airindia.jpg";
}
else if($name=="Vistara")
{
$src="images/vistara.png";
}
else if($name=="GoAir")
{
$src="images/goair.jpg";
}
else if($name=="SpiceJet")
{
$src="images/spicejet.png";
}
else if($name=="IndiGo")
{
$src="images/indigo.png";
}
else
{
$src="images/emirates.svg";
}

   echo '<div class="card mb-3 bg-light container" style="vertical-align: middle;">
  <div class="row no-gutters">
    <div class="col-md-2 col-sm-6 text-center">
      <img src='.$src.' id="imgSrc'.$i.'" style="width: 55px;height:55px; border-radius: 50%;margin: 5px;" class="img-fluid" alt="..."><br>
       <span style="white-space:nowrap;font-size:2vh;" id="name'.$i.'">'.$name.'</span><br>
       <span style="white-space:nowrap;font-size:2vh;" id="date'.$i.'">'.$date.'</span>
    </div>
    
      <div class="card-body col-md-10 col-sm-12 row text-center">
        <div class="card-title col-md-6 col-sm-12  text-center align-bottom">
        
                    <span style="white-space:nowrap;font-size:26px;" id="origin'.$i.'">'.$origin.'</span>
                    <br>
                    <span class=" col-sm-6" ><img class="text-center mx-auto ml-4" src="images/departures.png" style="width:70px;height:53px;"></span>
                    <br>
                    
                    <span  style="white-space:nowrap;font-size:26px;" id="destination'.$i.'">'.$destination.'</span>
                     <br>
                 
                   
                    
                <br></div>
        
        <p class="card-text col-md-3 col-sm-6 text-center align-bottom">
           <span class="display-5 " style="align-text:leftt;" >'.$direct.'</span> 
            <br><span style="white-space:nowrap;font-size:30px;" id="price'.$i.'">'.$price.'*'.$tot.'='.$tot_price.'<img src="images/25473.svg" style="width: 20px;"></span></p>
        <p class="col-md text-center"><button style="margin:15px 4px;" id="add'.$i.'" value="BOOK NOW'.$i.'" class="btn btn-outline-primary" onclick="addRec('.$i.')">Book Now!</button></p>
    </div>
  </div>
</div>';




?>
</div>


  <script>
            function addRec(id)
            {
                
                var btnname=document.getElementById('add' + id).value; 
                var price = document.getElementById('price' + id).innerText;
                var name = document.getElementById('name' + id).innerText;
                var origin = document.getElementById('origin' + id).innerText;
                var destination= document.getElementById('destination' + id).innerText;
                var date = document.getElementById('date' + id).innerText;
                var imgSrc=document.getElementById('imgSrc' + id).src;

                console.log(price);
                console.log(name);
                console.log(origin);
                console.log(destination);
                console.log(date);
                console.log(btnname);
                console.log(imgSrc);
                
               
                 $.ajax({
                url:'insertFlight.php',
                type:'post',
                data:{'price':price,'airline-name':name,'origin':origin,'destination':destination,'date':date,'btnname':btnname,'imgSrc':imgSrc},
            
                
                
                success:function(data)
                {
                    
                    console.log(data);
                  
                    
                }
                });
                $('#myModal').modal('show');
                
              
                           
            }
          
              </script>
<?php              
}
}
}
    
}

?><br><br>

  <?php
include("footer.html");
?>

</body>

</html>

