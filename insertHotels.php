<?php
require("connection.php");
session_start();
$email=$_SESSION['useremail'];

$rating=$_POST['rating'];
$hotelname=$_POST['hotelname'];
$address=$_POST['address'];
$imgSrc=$_POST['imgSrc'];
$price=$_POST['price'];
$checkIn=$_POST['checkIn'];
$checkOut=$_POST['checkOut'];
$destination=$_POST['destination'];

$db->query("insert into hoteldb values('$hotelname','$destination','$price','$address','$imgSrc','$email','$checkIn','$checkOut','$rating')");
$db->query("insert into unaddedblogs values('$email','$destination')");

echo $email;
echo $imgSrc;
echo "suceess";
?>