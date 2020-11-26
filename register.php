<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

   
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="owl.carousel.min.css">
    <link rel="stylesheet" href="owl.theme.default.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/HomeCSS.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">


    <title>Registeration Form</title>

    <script>
        function checkname() {
            var name = document.getElementById('name');
            if (name.value == "" || name.value == null) {
                name.style.borderColor = "red";
                document.getElementById('namelabel').style.color = "red";

            } else {
                name.style.borderColor = "green";
                document.getElementById('namelabel').style.color = "green";
                return 1;
            }
        }

        function checkprofilepic() {

            var pic = document.getElementById('profilepicture');
            if (pic.files.length == 0) {
                pic.style.borderColor = "red";
                document.getElementById('profilepicturelabel').style.color = "red";

            } else {
                pic.style.borderColor = "green";
                document.getElementById('profilepicturelabel').style.color = "green";
                return 1;
            }
        }

        function checknumber() {
            var number = document.getElementById('mobile');
            var val = number.value;
            var len = val.length;

            if (number.value == "" || number.value == null || len != 10) {
                number.style.borderColor = "red";
                document.getElementById('mobilelabel').style.color = "red";

            } else {
                number.style.borderColor = "green";
                document.getElementById('mobilelabel').style.color = "";
                return 1;
            }
        }

        function checkemail() {
            var email = document.getElementById('email');
            var val = email.value;
            var pattern = /^[a-zA-Z0-9._-]+@[a-zA-Z]+\.[a-zA-Z]{2,6}$/;
            var reg = new RegExp(pattern);
            if (email.value == "" || email.value == null) {
                email.style.borderColor = "red";
                document.getElementById('emaillabel').style.color = "red";

            } else if (!reg.test(val)) {
                email.style.borderColor = "red";
                document.getElementById('emaillabel').style.color = "red";
            } else {
                email.style.borderColor = "green";
                document.getElementById('emaillabel').style.color = "";
                return 1;
            }

        }
        var password = "";
        var confirmpassword = "";

        function checkpassword() {
            var pwd = document.getElementById('password');
            password = pwd.value;
            var len = password.length;
            if (pwd.value == "" || pwd.value == null || len < 8 || len > 20) {
                pwd.style.borderColor = "red";
                document.getElementById('passwordlabel').style.color = "red";

            } else {
                checkconfirmpassword();
                pwd.style.borderColor = "green";
                document.getElementById('passwordlabel').style.color = "green";
                return 1;
            }
        }

        function checkconfirmpassword() {
            var confpwd = document.getElementById('confirmpassword');
            confirmpassword = confpwd.value;
            var pwd = document.getElementById('password');
            if (confpwd.value == "" || confpwd.value == null || confpwd.value != password) {
                confpwd.style.borderColor = "red";
                document.getElementById('confirmpasswordlabel').style.color = "red";
                pwd.style.borderColor = "red";
                document.getElementById('passwordlabel').style.color = "red";

            } else {
                confpwd.style.borderColor = "green";
                document.getElementById('confirmpasswordlabel').style.color = "green";
                return 1;
            }
        }

        function checkAll() {
            var name = checkname();
            var number = checknumber();
            var email = checkemail();
            var pwd = checkpassword();
            var cpwd = checkconfirmpassword();
            var pic = checkprofilepic();

            if (name == 1 && number == 1 && email == 1 && pwd == 1 && cpwd == 1 && pic == 1) {
                document.getElementById("finalsubmit").innerHTML = "";
                document.getElementById("submit").disabled=false;

            } else {
                document.getElementById("finalsubmit").innerHTML = "Please fill all the attributes correctly!!!";
                document.getElementById("finalsubmit").style.color = "red";
                document.getElementById("submit").disabled=true;


            }
        }
    </script>
</head>
 <?php
  
    if (isset($_REQUEST['submit'])) {
        require("connection.php");
        // Create database connection
      //    $db = new mysqli("localhost", "id15026047_patel_jayen", "msukifeeS@99", "id15026047_freehost") or die("help me");
       // $db = mysqli_connect("localhost", "root", "", "epiz_26655356_liveitin") or die("help me");

        // Initialize message variable
        $msg = "";

        // Get image name
        $image = $_FILES['image']['name'];
        // image file directory
        $target = "profileImages/" . basename($image);


        // Get email
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $phone = $_REQUEST['mobile'];
        $name = $_REQUEST['name'];

        $sql = "INSERT INTO account_info(email,name,password,mobile,image) VALUES('$email','$name','$password',$phone,'$image')" or die("query info insertion failed");
        mysqli_query($db, $sql) or die("account info insertion failed");

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "Image uploaded successfully";
            
            $_SESSION['useremail']=$email;
 



    ?>
            <script>
                window.location = "index.php";
            </script>

    <?php

            echo $msg;
        } else {
            $msg = "Failed to upload image";
            echo $msg;
        }
    }




    ?>


<body background="images/ballons.webp">

    <div id="test"></div>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data" class="container">

        <div class="container" style="margin-top: 30px; margin-bottom: 30px; background-color: rgba(252, 252, 252, 1); opacity: 0.95; border-radius: 10px;">
            <br>
            <h2 class="text-center mb-4">Registeration Form</h2>
            <h5 id="finalsubmit"></h5>
            <div class="form-group ">
                <label for="name" id="namelabel">Name<span style="font-size: 23px; color:  red;">*</span></label>
                <input type="text" class="form-control" onblur="checkname(), checkAll()" id="name" name="name" placeholder="Enter your name">
            </div>

            <div class="form-group">
                <label for="profilepicture" id="profilepicturelabel">Profile Picture<span style="font-size: 23px; color:  red;">*</span></label>
               <!-- <input style="margin-left: 8em;" onblur="checkprofilepic(), checkAll()" onchange="applyimg(event) , checkprofilepic() , convertToDataURL(event)" type="file" accept="image/png, image/jpeg, image/jpg" name="image" id="profilepicture" placeholder="Select your Profile Picture...">!-->
                <br>
               
                <script>
                    //  this script displays the image that is selected
                    var applyimg = function(event) {
                        var img = document.getElementById('displayimg');
                        img.src = URL.createObjectURL(event.target.files[0]);
                    };
                </script>
                 
                <div>
                   
                    <img class="rounded-circle img-fluid" id="displayimg" style="height:70px;width:70px" src="https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg"> </a><br><br>
                  
                    <input onblur="checkprofilepic(), checkAll()" onchange="applyimg(event) , checkprofilepic() , convertToDataURL(event)" type="file" accept="image/png, image/jpeg, image/jpg" name="image" id="profilepicture" placeholder="Select your Profile Picture...">
                </div>
            </div>

            <div class="form-group">
                <label for="mobile" id="mobilelabel">Contact Number<span style="font-size: 23px; color:  red;">*</span></label>
                <input type="tel" id="mobile" onblur="checknumber(), checkAll()" name="mobile" class="form-control" placeholder="Enter mobile number" aria-describedby="mobileHelp">
                <small id="mobileHelp" class="form-text text-muted">Your Contact number must be exactly 10 digit long.</small>

            </div>

            <div class="form-group ">
                <label for="email" id="emaillabel">Email Address<span style="font-size: 23px; color:  red;">*</span></label>
                <input type="email" class="form-control " name="email" onblur="checkemail(), checkAll()" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <div class="form-group">
                <label for="password" id="passwordlabel">Password<span style="font-size: 23px; color:  red;">*</span></label>
                <input type="password" id="password" onblur="checkpassword()" class="form-control" name="password" aria-describedby="passwordHelp" placeholder="Enter Password">
                <small id="passwordHelp" class="form-text text-muted"> Your password must be 8-20 characters long, contain letters, numbers and special characters and must not contain spaces.</small>
            </div>

            <div class="form-group">
                <label for="confirmpassword" id="confirmpasswordlabel">Confirm Password<span style="font-size: 23px; color:  red;">*</span></label>
                <input type="password" id="confirmpassword" name="confirmpassword" onblur="checkconfirmpassword(), checkAll()" class="form-control" placeholder="Confirm your Password" aria-describedby="confirmpasswordHelp">
                <small id="confirmpasswordHelp" class="form-text text-muted"> Your Confirm password must match with Password.</small>
            </div>
            <br>
            <div class="form-group text-center">
                <button type="submit" id="submit" name="submit" disabled="true" class="btn btn-primary text-center">Submit </button>
                <a href=""><button id="reset" name="reset" class="btn btn-secondary ml-3 text-center">Cancel</button></a>




            </div>
            <br><br>
        </div>



    </form>
</body>

</html>