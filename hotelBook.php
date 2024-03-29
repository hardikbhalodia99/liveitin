<?php

include("nav.php");

if(!isset($_SESSION['useremail']))
{
   echo ' 
   <script>
     window.location="error.html";
   </script>';
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking</title>
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>
    <script src="jquery-ui.min.js"></script>
    <link rel="stylesheet" href="jquery-ui.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="owl.carousel.min.css">
  <link rel="stylesheet" href="owl.theme.default.min.css">
 
  <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
   
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
 


  <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@700&display=swap" rel="stylesheet">
  <style>
    body{
      font-family:'Raleway';
    }
    @media (min-width: 768px)
    {
    .card-img {
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    height:900px;
    max-width: 100%;
}
    }
    ion-icon {
  color:navy;
  size: 34px;
  margin:4px 22px;
}
.text-navy{
    color:navy;
    font-weight: bolder;
}


/*.ui-datepicker {*/
/*    background-color: yellow;*/
/*    border: 1px solid #555;*/
/*    color: green;*/
/*}*/
   /*.ui-datepicker {*/
   /*         color: orchid;*/
   /*         background-color: lightblue;*/
   /*     }*/


  </style>

</head>
<body>
 
 <script>
//  console.log(document.getElementById('startdate').value);
      function validate()
      {
        var dest=document.getElementById("destination").value;
        var msg=document.getElementById("a");
        var msg2=document.getElementById("b");
        var msg3=document.getElementById("c");
        
        // let today = new Date();
        var sdate=document.getElementById("startdate").value;
        // var startdate=new Date(sdate);
        // console.log(startdate);
        var edate= document.getElementById("enddate").value;
        //  var enddate=new Date(edate);
        // console.log(enddate);
     
            
            if(dest=='')
            {
            msg.innerHTML="*Please fill the destination field";
            return false;
            }
            else if(sdate=='' ){
             msg2.innerHTML="*CkeckIn date must not be empty"; 
              return false;
            }
            else if(edate==''){
             msg3.innerHTML="*CkeckOut date must not be empty"; 
              return false;
            }
            else if(sdate>edate)
            {
                 msg3.innerHTML="*chekIn date must be less than  checkout date"; 
                return false;
            }
      }
      
     $(document).ready(function () {
            $('#startdate').datepicker({
                dateFormat: "yy-mm-dd",
                changeMonth: true,
                changeYear: true,
                minDate: '0D',
                // defaultDate:"2021/01/16" 
            });
               $('#enddate').datepicker({
                dateFormat: "yy-mm-dd",
                changeMonth: true,
                changeYear: true,
                minDate: "document.getElementById('startdate').value+1",
            });
        });
      
      
       
   </script>


  <div class="card bg-light">
    <img class="img-fluid card-img" src="images/hotel_bg.jpg"  alt="" style="height:840px;opacity: 0.8;">
    <div class="card-img-overlay">
     
      <h1 class="card-title  " style="color:rgb(189, 228, 243);z-index: 2;"><br>Book Hotels As Per Your Destinations</h1>
      <br>
      
      <p class="card-text"><h2 style="color:whitesmoke;z-index: 2;">Get Amazing Prices On Luxurious Hotels!</h2>
      <br>
      <div class="row">
        <div class="col-md-8 col-sm-8">
            <form class="form-group col-md-10 col-md-12"  action="hotel.php" method="post">
          <div class="form-group row">
          <!-- <div class="form-group col-md-3 col-sm-6">
            <label for="inputEmail4"><h4 style="color:whitesmoke;z-index:3;">Your Location</h4></label>-->
          <!--  <input type="text" class="form-control" id="inputEmail4" placeholder="e.g. Mumbai">-->
          <!--</div> -->
          <div class="form-group col-md-6 col-sm-8">
            <label for="inputEmail4"><h4 style="color:whitesmoke;z-index:3;">Destination</h4></label>
            <input type="text" class="form-control" name="destination" id="destination" placeholder="e.g. Gangtok">
            <span id="a"></span>
          </div>
         </div>
          <div class="form-group" >
          <div class="form-group row">
            <div class="form-group col-md-6 col-sm-8">
              <label for="startdate"><h4 style="color:whitesmoke;z-index:3;">Check-In Date</h4></label>
              <input type="text" class="form-control" name="startDate" autocomplete="off" id="startdate" placeholder="e.g. From date">
              <span id="b"></span>
            </div>
            <div class="form-group col-md-6 col-sm-8">
              <label for="enddate"><h4 style="color:whitesmoke;z-index:3;">Check-Out Date</h4></label>
              <input type="text" class="form-control" name="endDate" autocomplete="off" id="enddate" placeholder="e.g. To date">
                <span id="c"></span>
            </div>
          </div>
          <div class="form-check form-check-inline">
            
            <label class="form-check-label display-5" for="inlineCheckbox1"><h5 style="color:whitesmoke;z-index:3;" class="ml-3">Adults</h5></label>
              
            <select name="adults" class="ml-3" style="color:black;">
              <option class="ml-3" value=1>1</option>  
              <option value=2 selected>2</option>
              <option value=3>3</option>
              <option value=4>4</option>
              <option value=5>5</option>  
            </select>
           
          </div>
          <div class="form-check form-check-inline">
            <label class="form-check-label ml-3" for="kids" style="color: white;"><h5>Kids:</h5></label>
              <select name="kids" class="ml-3" style="color:black;">
                <option  value=1>1</option>  
                <option  value=0 selected>0</option>  
                <option value=2 >2</option>
                <option value=3>3</option>
                <option value=4>4</option>
                <option value=5>5</option>
                </select>
              
          </div>
          <br>
          <br>
          <div class="row">
           
          <button class="btn btn-primary ml-4 text-navy" type="submit" onclick="return validate();">Search for Hotels</button>
          <br><br>
          <div id="msg" class="text-center mx-auto text-danger" ></div>
          
          </div>
        
        
      </div>
</form>
      </div>
    
    </div>
      
      </div>
    </div>
    
    
  <?php
include("footer.html");
?>
    
</body>
</html>