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
  $flag = 0;

  if ($result->num_rows > 0) {
   // echo '<div class="row"  style="margin-left: 10px; margin-right: 10px; margin-top: 50px;">';
  echo ' <div class="container-fluid row ml-auto" >';
    while ($row = $result->fetch_assoc()) 
    {
      echo " <div class='card-deck  col-md-12 col-sm-12 col-lg-6' style=' margin-bottom: 20px;' >";

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
      <div class="card border-light bg-light">
              <div class="card-header text-muted">
                <img class="rounded-circle float-left dropdown-toggle ml-0 mr-3" style="height: 60px; width:60px; " src="profileImages/' . $img . '"> 
                <span style="font-size:25px;">By ' . $name . '</span>
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
<form action="uploadblog.php" method="POST" enctype="multipart/form-data" >
<div  class="modal fade" tabindex="-1"  role="dialog" aria-labelledby="exampleModalCenterTitle" id="exampleModalCenter"  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
        <input type="text" class="ml-2 mr-2 mt-4" style="font-size:15px;"  id="exampleModalLongTitle" name="exampleModalLongTitle" placeHolder="Title">
     
      <div >
      <input class="ml-2 mr-1"  type="text" style="font-size:15px;" name="exampleModalPlace" placeHolder="Place">
      <input class="ml-1 mr-2" type="date" style="font-size:15px;"  name="exampleModalDate" placeHolder="Date">
    </div>
    <div >
    <input class="ml-2" type="file" style="font-size:15px;" accept="image/png, image/jpeg, image/jpg" name="blogpicture" id="blogpicture" placeholder="Select your Profile Picture...">
    </div>

    <div  >
    <textarea  class="ml-2 " name="blogbody" id="blogbody"  style="font-size:14px; width:370px; height:80px;"  placeHolder="Blog Body.....">
    Write your blog here...
    </textarea>
    
    </div>
     
        
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit"  name="submit" class="btn btn-primary" value="Save changes">
      </div>
    </div>
 </div>
  </div>
</div>
</form>
';
    $falg = 1;
  }
  if ($flag == 0) {
    echo "
        <div class='text-center'>
        <p style='font-size:4vh;'> You haven't visited any places Yet!</p>
        </div>";
  }




  ?>

 




</body>

</html>