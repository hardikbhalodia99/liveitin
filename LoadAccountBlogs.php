<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  ///loading already written blogs
require("connection.php");
session_start();
        $useremail = $_SESSION['useremail'];
    
         $sql = "SELECT * FROM blogs where email='$useremail'";
         $result = $db->query($sql);


         if ($result->num_rows > 0)
          {

             echo '<div class="row col-md-6 col-sm-6 col-lg-6" style="margin-left: 10px; margin-right: 10px; margin-top: 10px;">';
              while ($row = $result->fetch_assoc()) {
              echo " <div class='card border border-light'>";
              $email=$row['email'];
             
              $info = "SELECT * FROM account_info where email='$useremail'";
              $res = $db->query($info);
              $seerow=$res->fetch_assoc();

              $name=$seerow['name'];
              $date=$row['date'];
              $img=$seerow['image'];
              $upimg=$row['upimg'];
              $headline=$row['headline'];
              $details=$row['details'];
              echo '
              
              <div class="card-header text-muted">
                <img class="rounded-circle float-left dropdown-toggle" style="height: 45px; width:50px; margin-right: 30px;" src="profileImages/'.$img.'"> 
                <span>By '.$name.'</span><br>
                <span style="font-size: 13px; float: right;">Visited@'.$date.'</span>
              </div>
              <img src="uploadedImages//'.$upimg.'" class="card-img-top" alt="...">
              <div class="card-body bg-light">
                <h3 class="card-title">'.$headline.'</h3>
                <p>
                <h5>'.$details.'</h5>
                </p>
          
              </div>
              </div>
              ';
              

          }
          echo "</div>";
         }
         else {
          echo"<br><br>
          <div class='text-center'>
          <p class='display-4'> No Blogs Yet!</p><br><br><br><br><br>
          </div>";
          }


?>



<?php  // blogs to be written



?>


</body>
</html>