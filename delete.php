<?php
session_start();
require("connection.php");

$email=$_SESSION['useremail'];
$place=$_POST['place'];

echo "$email";
// if(isset($email))
// {
    $db->query("DELETE FROM favourite WHERE place='$place' AND email='$email'");
    
// }
// else
// {
//     echo "Login First TO remove or Add Places";
// }
$db->close();

?>