<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flight Booking</title>
    
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
  color:orange;
  size: 34px;
  margin:4px 22px;
}
.text-orange{
    color:white;
    font-weight: bolder;
}
  </style>

</head>
<body>
 <script>
 
      function validate()
      {
        var dest=document.getElementById("destinationok").value;
        var loc=document.getElementById("current_locationok").value;
        var msg=document.getElementById("locdiv");
        var msgdate=document.getElementById("datediv");
         var msgdiv=document.getElementById("desdiv");
       
         var sdate=document.getElementById("startdate").value;
   
     
            if(sdate!='' && dest!='' && loc!='')
            {
                msg.innerHTML="<img src='images/check-circle-solid.svg' style='height:30px'>";
                 msgdate.innerHTML="<img src='images/check-circle-solid.svg' style='height:30px'>";
                 msgdiv.innerHTML="<img src='images/check-circle-solid.svg' style='height:30px'>";
                return true;
            }
          
             else if(loc=="" )
            {
            msg.innerHTML="Location cannot be empty!";
            return false;
            }
              else if(dest=="" )
            {
            msgdiv.innerHTML="Destination  cannot be empty!";
            return false;
            }
            else if(sdate==""){
             msgdate.innerHTML="Please Enter Flight date"; 
              return false;
            }
           
        
       
      }
    
     $(document).ready(function () {
            $('#startdate').datepicker({
                dateFormat: "yy-mm-dd",
                changeMonth: true,
                changeYear: true,
                minDate: '0D'
            });
        });
      
       
   </script>
<?php
include("nav.php");
?>
  <div class="card bg-light">
    <img class="img-fluid" src="images/flight_bg.jpg" class="card-img" alt="" style="height:840px;opacity: 0.8;">
    <div class="card-img-overlay">
     
      <h1 class="card-title  " style="color:whitesmoke;z-index: 2;"><br>Book Flight tickets</h1>
      <br>
      <!-- <p class="card-text"><h2  style="color:whitesmoke;z-index: 2;">SEE AND DO MORE</h2></p> -->
      <p class="card-text"><h2 style="color:whitesmoke;z-index: 2;">Get desired Flights from here at reasonable price</h2></p>
      <br>
      <div class="row">
        <div class="col-md-8 col-sm-8">
            <form class="form-group col-md-10 col-md-12" action="flightapi.php" method="post">
          <div class="form-group row">
          <div class="form-group col-md-3 col-sm-6">
            <label for="inputEmail4"><h4 style="color:whitesmoke;z-index:3;">Location</h4></label>
            <input type="text" class="form-control" name="current_location" id="current_locationok" placeholder="e.g. Mumbai"> <div id="locdiv" style="color:red;"><small ></small></div>
          </div>
          <div class="form-group col-md-3 col-sm-6">
            <label for="inputEmail4"><h4 style="color:whitesmoke;z-index:3;">Destination</h4></label>
            <input type="text"   class="form-control" name="destination" id="destinationok" placeholder="e.g. London">
            <div id="desdiv" style="color:red;"><small style="color:red;"></small></div>
          </div>
          
         </div>
          <div class="form-group" >
          <div class="form-group row">
            <div class="form-group col-md-3 col-sm-6">
              <label for="inputEmail4"><h4 style="color:whitesmoke;z-index:3;">Date</h4></label>
              <input type="text" autocomplete="off" class="form-control" name="startDate" id="startdate" placeholder="e.g.flight date">
               <div id="datediv" style="color:red;"><small style="color:red;"></small></div>
            </div>
            <!-- <div class="form-group col-md-3 col-sm-6">
              <label for="inputEmail4"><h4 style="color:whitesmoke;z-index:3;">End Date</h4></label>
              <input type="date" class="form-control" id="inputEmail4" placeholder="e.g. To date">
            </div> -->
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
            <label class="form-check-label" for="kids" style="color: white;" class="ml-3"><h5>Kids:</h5></label>
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
           
          <button class="btn btn-warning ml-4 text-orange" type="submit" onclick="return validate();">Search for Flights</button>
          <div id="msg" class="text-center mx-auto text-danger" ></div>
          
          </div>
       
        </form>
        
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