
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favourites</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    

    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" src="css/HomeCSS.css">
    <style>
        .bi-trash-fill:hover{
        fill:white;
    }
    </style>
</head>
<body>
            <?php
include("navbar.php");
?>
            <?php
           
            $emailId=$_SESSION['useremail']; 
            $db = new mysqli("localhost", "id15026047_patel_jayen", "msukifeeS@99", "id15026047_freehost") or die("help me");
            $sql= "SELECT * FROM favourite where email='$emailId'";
            $result=$db->query($sql);
            // $halfUrl="http://liveitin.infinityfreeapp.com/";
              $no=0;
            if(isset($emailId))
            {

                    echo" <br><br><br><br><br><br><br><br><br><br><br><br>
                    <h2 class='text-center display-4'><svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-heart-fill' fill='red' xmlns='http://www.w3.org/2000/svg'>
                        <path fill-rule='evenodd' d='M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z'/>
                        </svg>Favourites</h2>";
                        
                if ($result->num_rows > 0) 
                {
                    echo '<div class="row container-fluid">';
                while($row = $result->fetch_assoc())
                {
                    
                     echo " <div class= 'col-md-3 col-sm-6' id='rowRemove$no'>
                     <div class='card border border-light'>
                        <img src=".$row['imgSrc']." class='card-img-top img-fluid'  >
                       <div class='card-body text-center'> 
                          <h5 class='card-title'>".$row['place']."</h5>
                            <button style='margin-top:60px'  value='" .$row['place']. "' id='remove$no'  onclick='deleteRec($no)'
                        class='btn btn-outline-danger'>Remove Place</button>
                          </div>
                      
                       
                        </div>
                      </div>";
                    $no+=1;
               
                
            
             }
            echo '</div>';
             }
             else {
                echo"<br><br><br><br><br><br><br><br><br><br><div class='text-center '><p class='display-4'>You Have not Added Any Favourites Yet!</p><br><br>
                <a href='index.php' name='bt_Register' class='btn btn-outline-warning'>Add Favourites Now!</a>
                </div>";
                }
                }
                else{
                     
                echo "<div class='text-center '><p class='display-4'>You Have to Login First!</p><br><br>
                <a href='register.php' name='bt_Register' class='btn btn-outline-warning'> Register Now!</a>
                </div><br><br>";
                }
                
                //   $delSql= "SELECT place FROM favourite where email='$emailId'";
                // $delResult=$db->query($delSql);
                
              
             
                //if(isset($_REQUEST['remove_Btn']))
                //{
                 //   $val=$_REQUEST['remove_Btn'];
                //    $db->query("DELETE FROM favourite WHERE place='$val'");
                 //   echo"$val";
                //}
              
         
            echo $no;
            ?>
             </table>
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
                    
                }
                });
                
              
                           
            }
            
              </script>
        
       
        <?php
        include("footer.html")
        ?>
</body>
</html>