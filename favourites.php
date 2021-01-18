
<?php
if(!isset($_SESSION['useremail']))
{
 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account</title>
  

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="owl.carousel.min.css">
  <link rel="stylesheet" href="owl.theme.default.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
  integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@700&display=swap" rel="stylesheet">

  
  <link rel="stylesheet" href="css/HomeCSS.css">

  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
  integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
  integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
  crossorigin="anonymous"></script>

<style>
    .nav-link{
        color:orange;
    }
 

    .bi-trash-fill:hover{
    fill:white;
}
 
  body {
    font-family: 'Raleway', sans-serif;
  }

</style>
<script>
window.onscroll = function changeNavBg() {
      var e = document.getElementById('navigationBar');

      top = window.innerHeight;

      if (scrollY > 670) {
        e.style.backgroundColor = "black";
        e.style.opacity = "1";
      } else {
        e.style.backgroundColor = "transparent";
        e.style.opacity = "1";
      }

    }

</script>
</head>
<body>

<?php
 include('nav.php');
require("connection.php");
 
  
 if (isset($_SESSION['useremail'])) {
   $useremail = $_SESSION['useremail'];

   // Create database connection
   

   //making query
   $sql = "SELECT * from account_info where email='$useremail'" or die("image name fetching failed");
   $result = mysqli_query($db, $sql) or die("query failed");
   $row = mysqli_fetch_assoc($result);
   $imagename = "profileImages/" . $row['image'];
   $profilename = $row['name'];
  $mobile=$row['mobile'];
   
 }






?>

    <div class="card border-light " style="background-color:#ebfaf9;color: #14534f; padding-top: 60px;">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-10 mx-auto">
                <img class="text-center" src="<?= $imagename; ?>" style="border-radius: 50%;width:240px;height:240px;">
            </div>
                
             <div class="col-lg-6 col-md-10 col-sm-12 mx-auto">
                <p id="username"><b  style="font-size:4vw;"><?= $profilename; ?></b></p>
                  <span class="">
                    <svg width="1.4em" height="1.4em" viewBox="0 0 16 16" class="bi bi-telephone-fill" fill="#14534f" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M2.267.98a1.636 1.636 0 0 1 2.448.152l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z"/>
                      </svg>&nbsp;&nbsp;&nbsp;<?= $mobile; ?></span>
                  <br><br>
                  <span  class="text-muted"><svg width="1.4em" height="1.4em" viewBox="0 0 16 16" class="bi bi-envelope-fill" fill="#14534f" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                  </svg>&nbsp;&nbsp;&nbsp;<?= $useremail; ?></span>
                  <br>

                 
                

            </div> 
          
              <div class="col-lg-3 col-md-10 col-sm-10 mx-auto" >
                <h2 style="color:  #14534f;">Follow Us</h2>
                
              <br>
              <a class="btn btn-info active"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-fill" fill="white" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
              </svg>&nbsp;&nbsp;Edit Profile</a>
              </div>
               
               
                
        </div>
        </div>
        <div class="btn-group btn-group-toggle btn-group-primary mx-auto sticky" data-toggle="buttons">
          <label class="btn  btn-info ">
            <input type="radio" name="options" onclick="loadfile('1')" id="option1" autocomplete="on" checked> Favourite Places
          </label>
          <label class="btn btn-info">
            <input type="radio" name="options" onclick="loadfile('2')" id="option2" autocomplete=""> Booked Hotels
          </label>
           <label class="btn btn-info">
            <input type="radio" name="options" onclick="loadfile('4')" id="option4" autocomplete=""> Booked Flights
          </label>
          <label class="btn btn-info">
            <input type="radio" name="options" onclick="loadfile('3')" id="option3" autocomplete="off"> Blogs
          </label>
        </div>
      </div><br><br>
     

      <script>
      window.onload = function(){
      document.getElementById("option1").click();
      }
        $("label").click(function(){
          $("label").removeClass("active");
          $(this).addClass("active");
           $("label").addClass("btn-info");
          
        });

        function loadfile(id)
          {
            if(id==1)
            {
            $("#itembox").load("LoadFavourites.php");
            }
            else if(id==2)
            {
            $("#itembox").load("LoadHotels.php");
            }
            else if(id==4)
            {
            $("#itembox").load("LoadFlights.php");
            }
            else if(id==3)
            {
              $("#itembox").load("LoadAccountBlogs.php");

            }
          }
  

    </script>


        <div id="itembox"  style="font-size:3vw;"  >
Your contents will load here
      </div><br><br>
      
  <?php include('footer.html');?>
</body>
</html>

<?php

        }
else{
  header("location: error.html");
}
        ?>