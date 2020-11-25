<?php
$link=new mysqli("localhost","id15026047_patel_jayen","msukifeeS@99","id15026047_freehost");
session_start();
$email=$_SESSION['useremail'];

$airline_name=$_POST['airline-name'];
$price=$_POST['price'];
$date=$_POST['date'];
$origin=$_POST['origin'];
$destination=$_POST['destination'];

$link->query("insert into flightdb values('$airline_name','$price','$origin','$destination','$date','$email','$imgSrc')");

echo $email;
echo Added;
?>