<?php
session_start();
if(!isset($_SESSION['useremail']))
{
    header("location:error.html");
}
require("connection.php");
$email=$_SESSION['useremail'];

$airline_name=$_POST['airline-name'];
$price=$_POST['price'];
$imgSrc=$_POST['imgSrc'];
$date=$_POST['date'];
$origin=$_POST['origin'];
$destination=$_POST['destination'];

$db->query("insert into flightdb values('$airline_name','$price','$origin','$destination','$date','$email','$imgSrc')");



?>