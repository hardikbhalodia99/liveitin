<!DOCTYPE html>
<html lang="en">

<head>
    
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

<link rel="stylesheet" href="owl.carousel.min.css">
<link rel="stylesheet" href="owl.theme.default.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/HomeCSS.css">
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">

<?php
require('connection.php');

session_start();
 if (isset($_SESSION['useremail'])) {
    $useremail = $_SESSION['useremail'];
   
    //making query
    $sql = "SELECT * from account_info where email='$useremail'" or die("image name fetching failed");
    $result = mysqli_query($db, $sql) or die("query failed");
    $row = mysqli_fetch_assoc($result);
    $imagename = "profileImages/" . $row['image'];
    $profilename = $row['name'];
   
    echo "
    
    <script type='text/javascript'>
     $(document).ready(function(){

      $('#logindropdown').css('display','none');
       $('#logoutdropdown').css('display','');
     });
    </script>
    
    
    ";
  } else {

    $imagename = 'https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg';
    $profilename = "comming from register";

    echo "
    <script type='text/javascript'>
     $(document).ready(function(){
      $('#logoutdropdown').css('display','none');
     $('#logindropdown').css('display','');
     });
    </script>
    ";
  }


  if(isset($_REQUEST['logout']))
  {
    unset($_SESSION['useremail']);
    $imagename = 'https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg';
    $profilename = "";
     

    echo "
    <script type='text/javascript'>
     $(document).ready(function(){
      $('#logoutdropdown').css('display','none');
      $('#logindropdown').css('display','');
      window.location='index.php';
     });
    </script>
    ";

  }

  if(isset($_REQUEST['login']))
  {
    $emailid=$_REQUEST['username'];
    $pwd=$_REQUEST['password'];
          $db = new mysqli("localhost", "id15026047_patel_jayen", "msukifeeS@99", "id15026047_freehost") or die("help me");

   // $db = mysqli_connect("localhost", "root", "", "epiz_26655356_liveitin") or die(" login help me");

    $sql = "SELECT * from account_info where email='$emailid' AND password='$pwd'" or die("login query failed");
    $result = mysqli_query($db, $sql) or die("login failed");
    $row = mysqli_fetch_assoc($result);
    $imagename = "profileImages/" . $row['image'];
    $profilename = $row['name'];
    $_SESSION['useremail']=$emailid;
      echo "
    <script type='text/javascript'>
     $(document).ready(function(){

      $('#logindropdown').css('display','none');
      $('#logoutdropdown').css('display','');
     });
    </script>
    ";
   
    }

?>

 

  </head>
   <script>
    window.onscroll = function changeNavBg() {
      var e = document.getElementById('navigationBar');

      top = window.innerHeight;

      if (scrollY > 650) {
        e.style.backgroundColor = "black";
        e.style.opacity = "1";
      } else {
        e.style.backgroundColor = "transparent";
        e.style.opacity = "1";
      }

    }
  </script>

<body>
<nav class="navbar navbar-expand-lg navbar-light fixed-top container-fluid " id="navigationBar" style="z-index: 4;background-color: rgba(0, 0, 0, 0); color: white;">
    
    <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="images/logo5.png" style="height:40px;border-radius: 2px;"></a>
    
        
    
<button class="navbar-toggler"  style="background-color: white;" type="button" data-toggle="collapse"
data-target="#navbarTogglerDemo0" aria-controls="navbarTogglerDemo0" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <div class="collapse navbar-collapse " id="navbarTogglerDemo0">

      <ul class="navbar-nav text-center ml-auto">

        <li class="nav-item dropdown ">

          <a class="nav-link dropdown-toggle text-center" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">WHERE TO GO</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </li>

        <li class="nav-item dropdown">

          <a class="nav-link dropdown-toggle text-center" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">WHAT TO DO</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </li>
        <li class="nav-item dropdown">

          <a class="nav-link dropdown-toggle text-center" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">EXPERIENCES</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </li>
        <li class="nav-item dropdown">

          <a class="nav-link dropdown-toggle text-center" data-toggle="dropdown" href="" role="button" aria-haspopup="true" aria-expanded="false">STORIES</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-center" data-toggle="dropdown" href="tripPlan2.html" role="button" aria-haspopup="true" aria-expanded="false">
            <svg width="1em" height="1em" viewBox="0 0 16 16" style="margin: 5px;" class="bi bi-bag-fill" fill="orange" xmlns="http://www.w3.org/2000/svg">
              <path d="M1 4h14v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4zm7-2.5A2.5 2.5 0 0 0 5.5 4h-1a3.5 3.5 0 1 1 7 0h-1A2.5 2.5 0 0 0 8 1.5z" />
            </svg>Trip Planner</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="hotelBook.html">BOOK A HOTEL</a>
            <a class="dropdown-item" href="flightBook.html">BOOK A FLIGHT</a>
            
          </div>
        </li>




        <li class="nav-item">
          <a class="nav-link vl text-center" href="page.html">HOME</a>
        </li>


        <li class="nav-item">
          <a class="nav-link vl text-center" href="favourites.php">
          <span style="margin-top:23px ;">
          <svg width="1.7em" height="1em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="red" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
              </svg>
              </span>FAVOURITES</a>
        </li>
            </ul>
 
     <!--</div>-->
     <!--</div>-->
  

 <!--   <div class="navbar-brand  dropdown" type="none" >-->
 <!--       <a class="nav-link text-center" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">-->
 <!--         <span id="profilename"><?= $profilename;?></span>-->
 <!--         <img src="<?= $imagename; ?>" class="rounded-circle float-right dropdown-toggle text-center" id="profilepic" style="height: 50px; width: 50px;"> </a>-->

 <!--       <div class="dropdown-menu dropdown-menu-sm-left " id="logindropdown" >-->
 <!--       <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">-->
 <!--         <h6 class="text-center">Email</h6>-->
 <!--         <input type="text" name="username" id="uname" placeholder="Your Email" class="dropdown-item text-center">-->
 <!--         <div class="dropdown-divider"></div>-->
 <!--         <h6 class="text-center">Password</h6>-->
 <!--         <input type="password" name="password" id="upass" placeholder="YourPassword" class="dropdown-item text-center">-->
 <!--         <div class="dropdown-divider"></div>-->
          
 <!--         <input name="login" id="btLogin" value="Login" type="submit" class="btn btn-outline-dark text-center" style="margin-left: 40px;" >-->
 <!--         </form>-->
 <!--         <div class="dropdown-divider"></div>-->

 <!--         <a href="register.php"><input type="submit" class="btn btn-outline-dark text-center" style="margin-left: 40px;" name="signUp" id="btSignUp" value="SignUp"></a>-->

 <!--<div class="dropdown-menu dropdown-menu-lg-right " id="logoutdropdown" >-->
 <!--         <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">-->
 <!--         <input name="logout" value="Logout" id="logout" type="submit" class="btn btn-outline-dark text-center" style="margin-left: 40px;">-->
 <!--         </form>-->
 <!--       </div>-->
 </div>
 <li class="nav-item  dropdown" type="none" >
        <a class="nav-link  text-center" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <span id="profilename"><?= $profilename;?></span>
          <img src="<?= $imagename; ?>" class="rounded-circle float-right dropdown-toggle text-center" id="profilepic" style="height: 50px; width: 50px;"> </a>

         
      
        <div class="dropdown-menu dropdown-menu-lg-right" >
         
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <h6 class="text-center">Email</h6>
          <input type="text" name="username" id="uname" placeholder="Your Email" class="dropdown-item text-center">
          <div class="dropdown-divider"></div>
          <h6 class="text-center">Password</h6>
          <input type="password" name="password" id="upass" placeholder="YourPassword" class="dropdown-item text-center">
          <div class="dropdown-divider"></div>
          
          <input name="login" id="btLogin" value="Login" type="submit" class="btn btn-outline-dark text-center" style="margin-left: 40px;" >
          </form>
           <div class="dropdown-divider"></div>

          <a href="register.php"><input type="submit" class="btn btn-outline-dark text-center" style="margin-left: 40px;" name="signUp" id="btSignUp" value="SignUp"></a>
        <div class="dropdown-divider"></div>
        
        
        
        
        </div>
      </li>
      
         
    </div>
     
     


  </nav>
</body>
  </html>