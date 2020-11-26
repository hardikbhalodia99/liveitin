<?php  ///loading already written blogs
  require("connection.php");
  session_start();

  $useremail = $_SESSION['useremail'];
  if(isset($_REQUEST['submit']))
  {
    $title=$_REQUEST['exampleModalLongTitle'];
    $place=$_REQUEST['exampleModalPlace'];
    $date=date('Y-m-d', strtotime($_REQUEST['exampleModalDate']));
    $text=$_REQUEST['blogbody'];
    
     // Get image name
     $image = $_FILES['blogpicture']['name'];
     // image file directory
     $target = "uploadedImages/" . basename($image);

     $sql = "INSERT INTO blogs(email,placename,headline,details,date,upimg) VALUES('$useremail','$place','$title','$text','$date','$image')" or die("query info insertion failed");
     mysqli_query($db, $sql) or die("blog info insertion failed");

     if(move_uploaded_file($_FILES['blogpicture']['tmp_name'], $target))
     {
        $sql =' DELETE FROM unaddedblogs WHERE email="'.$useremail.'" AND place="'.$place.'"';
        mysqli_query($db, $sql) or die("deletion  failed");
       header("location:favourites.php");
     }

  }

  ?>