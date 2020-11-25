<?php

$link=new mysqli("localhost","id15026047_patel_jayen","msukifeeS@99","id15026047_freehost");
session_start();
$email=$_SESSION['useremail'];

$rating=$_POST['rating'];
$hotelname=$_POST['hotelname'];
$address=$_POST['address'];
$imgSrc=$_POST['imgSrc'];
$price=$_POST['price'];
$checkIn=$_POST['checkIn'];
$checkOut=$_POST['checkOut'];


$link->query("insert into hoteldb values('$hotelname','$price','$address','$imgSrc','$email','$checkIn','$checkOut','$rating')");

echo $email;
echo $imgSrc;
echo suceess;
?>