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
  session_start();
    $emailid = $_SESSION['useremail'];
   
$no=0;
    if (isset($emailid)  ) {

            $sql = "SELECT * FROM favourite where email='$emailid'";
            $result = $db->query($sql);
            if ($result->num_rows > 0) {

                echo '<div class="row" id="seehere" style="margin-left: 10px; margin-right: 10px; margin-top: 10px;">';
                while ($row = $result->fetch_assoc()) {
                    echo " <div class='card border border-light col-md-4 col-sm-6 col-lg-3' id='rowRemove$no' >
            <img src=".$row['imgSrc']." class='card-img-top' >
            <div class='card-body'>
              <h5 class='card-title'>" . $row['place'] . "</h5>
              
              <button style='margin-top:10px'  value='" .$row['place']. "' id='remove$no' type='submit' name='rmbtn'  onclick='deleteRec($no)'
              class='btn btn-outline-danger'>Remove Place</button>
              
            </div>
            <div class='card-footer'>
              <small class='text-muted'>Last updated 3 mins ago</small>
            </div>
          </div>";
          $no+=1;
                }
                echo '</div>';
            }
            else {
                echo"<br><br><div class='text-center '><p class='display-4'>You Have not Added Any Favourites Yet!</p><br><br>
                <a href='index.php' name='bt_Register' class='btn btn-warning'>Add Favourites Now!</a>
                </div><br><br><br><br>";
                }

        
    }
    else{
                     
        echo "<div class='text-center '><p class='display-4'>You Have to Login First!</p><br><br>
        <a href='register.php' name='bt_Register' class='btn btn-outline-warning'> Register Now!</a>
        </div><br><br>";
        }
    ?>
  <script>
            function deleteRec(id)
            {
                
                var place=document.getElementById('remove' + id).value; 
                console.log(place);   
                var rowId='rowRemove' + id;
               
                $.ajax({
                url:'delete.php',
                type:'post',
                data:'place='+place,
                
                
                success:function(data)
                {
                    
                    console.log(data);
                  $("#option1").click();
                    
                }
                });
                
              
                           
            }
            
              </script>


</body>

</html>