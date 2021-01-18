<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
  <link rel="stylesheet" href="css/HomeCSS.css">
  <link rel="stylesheet" href="owl.theme.default.min.css">
 
  <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
   
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
 


  <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@700&display=swap" rel="stylesheet">
   

</head>


<?php
session_start();
require('connection.php');


 if (isset($_SESSION['useremail'])) {
     $useremail = $_SESSION['useremail'];
   
    //making query
    $result=$db->query("SELECT * from account_info where email='$useremail'") or die("image name fetching failed");
   
    $row = mysqli_fetch_assoc($result);
    $imagename = "profileImages/" . $row['image'];
    
   echo '
    
    <script type="text/javascript">
     $(document).ready(function(){
        $("#sign_in_li").css("display","none");
        $("#logout_li").css("display","block");
        
     });
    </script>
    ';
    
    
  } else {
    $imagename = "https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg";
    echo '
    
    <script type="text/javascript">
     $(document).ready(function(){
        $("#sign_in_li").css("display","block");
        
        $("#logout_li").css("display","none");
        
     });
    </script>
    ';
   
  }


  if(isset($_REQUEST['logout']))
  {
    unset($_SESSION['useremail']);
    $imagename = 'https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg';
    
    echo '
    
    <script type="text/javascript">
     $(document).ready(function(){
        $("#sign_in_li").css("display","block");
        $("#logout_li").css("display","none");
        window.location="index.php";
     });
    </script>
    ';

  }

  if(isset($_REQUEST['login']))
  {
    $emailid=$_REQUEST['username'];
    $pwd=$_REQUEST['password'];
       

    $sql = "SELECT * from account_info where email='$emailid' AND password='$pwd'" or die("login query failed");
    $result = mysqli_query($db, $sql) or die("login failed");
    $row = mysqli_fetch_assoc($result);
    $imagename = "profileImages/" . $row['image'];
    
    $_SESSION['useremail']=$emailid;
    echo '
    
    <script type="text/javascript">
     $(document).ready(function(){
        $("#sign_in_li").css("display","none");
        $("#logout_li").css("display","block");
        
     });
    </script>
    ';
   
    }

?>


<body>
    <style>
        .form-control:focus {
            border-color: rgba(7, 10, 59, 0.39) darkturquoise fuchsia dimgray;
        }
        nav li a{
            color:white;
        }
        .hello.scrolled{
            background:rgba(0,0,0,1);
        }
    </style>
    <script>
        $(document).ready(function () {
            $('#sign_in_btn').click(function () {
                $('#modal').modal('show');
            });

        });
    </script>

    <div class="modal" id="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header ">
                    <h5 class="modal-title"  >SIGN IN</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body " >
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                        <div class="form-group">
                            <label for="exampleInputUser1">Username</label>
                            <input type="text" class="form-control" name="username" id="exampleInputUser1" aria-describedby="userHelp"
                                placeholder="Enter Username">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                                placeholder="Password">
                        </div>
                        <div class="text-center">
                            <button type="submit" name="login" class="btn btn-outline-primary">Login</button>
                           <a href="register.php" class="btn btn-outline-primary">Register</a>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


        <nav class="navbar navbar-expand-lg fixed-top  navbar-dark container-fluid hello" id="navigationbar">
        <a class=" navbar-brand" href="index.php"><img src="images/logo5.png" class="img-fluid" style="height:40px;border-radius:4px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon mr-auto "></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto text-center">
                 
                <li class="nav-item active">
                    <a class="nav-link navbar-brand " style="color: orange; font-weight:bolder;" href="tripplannerpage.php">
                        
                        <img src="suitcase (1).svg"
                            style="height: 18px;">&nbsp;Trip
                        Planner<span class="sr-only">(current)</span></a>
                </li>
               

                <li class="nav-item active" id="sign_in_li">
                    <input type="submit" class="nav-link navbar-brand btn btn-primary text-white" id="sign_in_btn" value="SIGN IN"  >
                    
                </li>
                <li class="nav-item active" id="logout_li" style="display: none;" >
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <input type="submit" name="logout" class="nav-link navbar-brand btn btn-primary text-white" id="logout_btn" value="LOGOUT"  >
                    </form>
                </li>
                <li class="nav-item active">
                    <a class="nav-link navbar-brand text-white " href="favourites.php"><img src="<?=$imagename; ?>" class="rounded-circle"
                           style="height:44px;width:44px;border-radius:50%;top:2px;"></a>
                </li>
            </ul>
        </div>
    </nav>
    
    <script>

$(window).scroll(function(){
    $('nav').toggleClass('scrolled',$(this).scrollTop()>690);
});
 
    </script>

</body>

</html>