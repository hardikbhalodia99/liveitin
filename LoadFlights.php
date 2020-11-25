<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booked Hotels</title>
    
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
  

  
</head>

<body>

    <?php
  session_start();
    $emailid = $_SESSION['useremail'];
    
$no=0;
    if (isset($emailid)  ) {

        //$id = $_GET['id'];
      
          $db = new mysqli("localhost", "id15026047_patel_jayen", "msukifeeS@99", "id15026047_freehost") or die("Fav Blog Tour database connection failed...");
            
            $sql = "SELECT * FROM flightdb where email='$emailid'";
            $result = $db->query($sql);
            if ($result->num_rows > 0) {

                echo '<div class="row" id="seehere" style="margin-left: 10px; margin-right: 10px; margin-top: 10px;">';
                while ($row = $result->fetch_assoc()) {
                    echo " <div class='card border border-light col-md-4 col-sm-6 col-lg-3' id='flight$no' >
            <!-- <img src=".$row['imgSrc']." class='card-img-top' > -->
            <img src='images/indigo.png' class='card-img-top' >
            <div class='card-body text-info'>
              <h5 class='card-title '>Airline:" . $row['airlinename'] . "</h5>
              <h5 class='card-title'>Price:" . $row['price'] . "</h5>
              <h5 class='card-title'>Origin:" . $row['origin'] . "</h5>
              <h5 class='card-title'>Destination:" . $row['destination'] . "</h5>
              <h5 class='card-title'>Date & time:" . $row['date'] . "</h5>
              
              
            </div>
            
          </div>";
          $no+=1;
                }
                echo '</div>';
            }
            else {
                echo"<br><br><div class='text-center '><p class='display-4'>You Have not Bokked Any Flight Tickets Yet!</p><br><br>
                <a href='flightapi.php' name='bt_Register' class='btn btn-warning'>Book Tickets Now!</a>
                </div><br><br><br><br>";
                }

        
    }
    else{
                     
        echo "<div class='text-center '><p class='display-4'>You Have to Login First!</p><br><br>
        <a href='index.php' name='bt_Register' class='btn btn-outline-warning'> Login Now!</a>
        </div><br><br>";
        }
    ?>



</body>

</html>