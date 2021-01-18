<?php
$link=new mysqli("localhost","id15026047_patel_jayen","msukifeeS@99","id15026047_freehost");
session_start();


$email=$_SESSION['useremail'];
$place=$_POST['place'];

echo "$email";
// if(isset($email))
// {
    $link->query("DELETE FROM favourite WHERE place='$place' AND email='$email'");
    
// }
// else
// {
//     echo "Login First TO remove or Add Places";
// }
$link->close();

?>