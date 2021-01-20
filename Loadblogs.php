<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      require("connection.php");
        $place = $_GET['place'];
    
          //$db = new mysqli("localhost", "id15026047_patel_jayen", "msukifeeS@99", "id15026047_freehost") or die(" Blog  database connection failed...");
        // $db = mysqli_connect("localhost", "root", "", "epiz_26655356_liveitin") or die("help me");

        
         $sql = "SELECT * FROM blogs where placename='$place'";
         $result = $db->query($sql);
         if ($result->num_rows > 0) {
          echo ' <div class="container-fluid row ml-auto" >';
          while ($row = $result->fetch_assoc()) {
            echo " <div class='card-deck  col-md-12 col-sm-12 col-lg-4' style=' margin-bottom: 20px;' >";
              $email=$row['email'];
              $info = "SELECT * FROM account_info where email='$email'";
              $res = $db->query($info);
              $seerow=$res->fetch_assoc();
              $name=$seerow['name'];
              $date=$row['date'];
              $img=$seerow['image'];
              $upimg=$row['upimg'];
              $headline=$row['headline'];
              $details=$row['details'];// <div class="card border-light bg-light">
              echo '
      <div class="card border-light bg-light">
              <div class="card-header text-muted">
                <img class="rounded-circle float-left dropdown-toggle" style="height: 45px; width:50px; margin-right: 30px;" src="profileImages/' . $img . '"> 
                <span>By ' . $name . '</span><br>
                <span style="font-size: 13px; float: right;">Visited@' . $date . '</span>
              </div>
              <img src="uploadedImages//' . $upimg . '" class="card-img-top" style="height: 350px; width:100%;" alt="...">
              <div class="card-body bg-light">
                <h3 class="card-title">' . $headline . '</h3>
                <p>
                <h5>' . $details . '</h5>
                </p>
          
              </div>
      </div>
    </div>
          ';//echo ends here
              
              


          }
          
          echo "</div>";
         }
         else {
          echo"
          <div class='text-center'>
          <p style='font-size:4vh;> No More Blogs !!</p>
          </div>";
          }
/* 
echo '    <div class="container-fluid row" style="margin:auto;">
<div class="card-deck ">
    
  <div class="card border-light bg-light">
    <div class="card-header text-muted">
      <img class="rounded-circle float-left dropdown-toggle" style="height: 45px; margin-right: 30px;" src="https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg"> 
      <span>By Varun Dhavan</span><br>
      <span style="font-size: 13px; float: right;">Visited@April2019</span>
    </div>
    <img src="images//miami-exp-1.jpg" class="card-img-top" alt="...">
    <div class="card-body bg-light">
      <h3 class="card-title">AWESOME EXPERIENCE</h3>
      <p>
      <h5>This was a very awesome experience. I loved every it of it. I was so nervous going in but everyone was so
        calm and laid back. The instructors definitely made you feel comfortable and safe to go up. Once you get up
        there you love it, even if you are afraid of heights like me. Will definitely be doing this every time I
        come to Miami now.</h5>
      </p>

    </div>


  </div>
  <div class="card border-light bg-light">
    <div class="card-header text-muted ">
      <img class="rounded-circle float-left dropdown-toggle" style="height: 45px; margin-right: 30px;" src="https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg"> 

      <span>By Jayen Patel</span><br>
      <span style="font-size: 13px; float: right;">Visited@December2017</span>
    </div>
    <img src="images//miami-exp-3.jpg" class="card-img-top" alt="...">
    <div class="card-body bg-light">
      <h3 class="card-title"> Parasailing</h3>
      <p>
      <h5>
        My niece turned 13, and I wanted her to have an amazing birthday adventure.
        I told Jared and Adam, and they made her feel like a rock star!
        They saved her for last, so that they could take some pictures of her alone.
        She felt like she was famous! She then asked to be dipped in the water more than once, and they dipped and
        dragged us 4 wonderful times! It was magnificent! They kept their eyes on us the whole time, and gave hand
        signals throughout. I was so pleased with their professionalism, and their genuinely wanting to make our
        experience a perfect 10. It truly was, and we cannot wait to go back!</h5>
      </p>
    </div>

    
  </div>

 
</div>

<div class="card-deck ">
  <div class="card border-light bg-light">
    <div class="card-header text-muted ">
                <img class="rounded-circle float-left dropdown-toggle" style="height: 45px; margin-right: 30px;" src="https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg"> 

      <span>By Hardik Bhalodia</span><br>
      <span style="font-size: 13px;">Visited@January2020</span>
    </div>
    <img src="images//miami-exp2.jpg" class="card-img-top" alt="...">
    <div class="card-body bg-light">
      <h3 class="card-title"> Water was Warm</h3>
      <p>
      <h5> My stay was during weekdays and the weekend and wasnt that crowed, we rented some chairs an umbrella.
        Our experience was Great!</h5>
      </p>
    </div>
  </div>



  <div class="card border-light bg-light">
    <div class="card-header text-muted ">
      <img class="rounded-circle float-left dropdown-toggle" style="height: 45px; margin-right: 30px;" src="https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg"> 
      <span >By Sam Jordan</span><br>
      <span style="font-size: 13px; float: right;">Visited@March2018</span>

    </div>
    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1c/09/70/88/photo5jpg.jpg?w=300&h=200&s=1" class="card-img-top" alt="...">
    <div class="card-body bg-light">
      <h3 class="card-title">Yummy!!! Clean and Beautiful Beaches for Surfing...</h3>
      <p>
      <h5>Clean and beautiful. I highly recommend staying at one of the hotels right on the beach with chair, umbrella and food service (stayed @ The Confidante)</h5>
      </p>
    </div>
  </div>
</div>

</div>
';

 */


?>


</body>
</html>