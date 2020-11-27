<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
crossorigin="anonymous">
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="owl.carousel.min.css">
<link rel="stylesheet" href="owl.theme.default.min.css">
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">

<link rel="stylesheet" href="css/beaches.css">
<link rel="stylesheet" href="css/HomeCSS.css">
</head>

<body>
  <?php  ///loading already written blogs
  require("connection.php");
  session_start();

  $useremail = $_SESSION['useremail'];

  
  $sql = "SELECT * FROM blogs where email='$useremail'";
  $result = $db->query($sql);
  $flag = 0;

  if ($result->num_rows > 0) {
    echo '<div class="row"  style="margin-left: 10px; margin-right: 10px; margin-top: 50px;">';

    while ($row = $result->fetch_assoc()) 
    {
      echo " <div class='card border border-light col-md-6 col-sm-6 col-lg-6' style=' margin-bottom: 20px;' >";

      $email = $row['email'];

      $info = "SELECT * FROM account_info where email='$useremail'";
      $res = $db->query($info);
      $seerow = $res->fetch_assoc();

      $name = $seerow['name'];
      $date = $row['date'];
      $img = $seerow['image'];
      $upimg = $row['upimg'];
      $headline = $row['headline'];
      $details = $row['details'];
      echo '
              
              <div class="card-header text-muted">
                <img class="rounded-circle float-left dropdown-toggle" style="height: 45px; width:50px; margin-right: 30px;" src="profileImages/' . $img . '"> 
                <span>By ' . $name . '</span><br>
                <span style="font-size: 13px; float: right;">Visited@' . $date . '</span>
              </div>
              <img src="uploadedImages//' . $upimg . '" class="card-img-top" alt="...">
              <div class="card-body bg-light">
                <h3 class="card-title">' . $headline . '</h3>
                <p>
                <h5>' . $details . '</h5>
                </p>
          
              </div>
              </div>
          ';//echo ends here
    }
    echo "</div>";
    $flag = 1;
  }

  // blogs to be written 
  $sql = "SELECT * FROM unaddedblogs where email='$useremail'";
  $result = $db->query($sql);

  if ($result->num_rows > 0) {
    echo '
      <!-- Button trigger modal -->
      <div style="margin-left:50%; margin-bottom:30px; margin-top:30px;">
<button type="button" class="btn  btn-primary" data-toggle="modal" data-target="#exampleModalCenter" data-backdrop="static" data-keyboard="false">
  Add Blogs
</button>
    </div>

<!-- Modal -->
<div  class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
  <form action="uploadblog.php" method="POST" enctype="multipart/form-data" >
    <div class="modal-content">
      <div class="modal-header">
        <input type="text" class="modal-title" id="exampleModalLongTitle" name="exampleModalLongTitle" placeHolder="Title">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-header">
      <input type="text" class="modal-title"  name="exampleModalPlace" placeHolder="Place">
      <input type="date" class="modal-title "  name="exampleModalDate" placeHolder="Date">
    </div>
    <div class="modal-header">
    <input  type="file" accept="image/png, image/jpeg, image/jpg" name="blogpicture" id="blogpicture" placeholder="Select your Profile Picture...">
    </div>

      <textarea name="blogbody" id="blogbody" class="modal-body"   cols="30" rows="10" placeHolder="Blog Body.....">
      Blog body...
      </textarea>
      
        
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit"  name="submit" class="btn btn-primary" value="Save changes">
      </div>
    </div>
  </form>
  </div>
</div>

';
    $falg = 1;
  }
  if ($flag == 0) {
    echo "<br><br>
        <div class='text-center'>
        <p class='display-4'> No Blogs Yet!</p><br><br><br><br><br>
        </div>";
  }




  ?>

 




</body>

</html>