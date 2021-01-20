<?php
session_start();
require("connection.php");
$id=$_POST['id'];
$email=$_SESSION['useremail'];

if(isset($email))
{
if($id=="Mumbai_Goa_favBtn")
{
$place=$_POST['place'];  
$imgSrc=$_POST['imgSrc'];
$loc=$_POST['loc'];

$db->query("insert into favourite values('$place','$email','$imgSrc','$loc')");
setCookie("added",$place);
 
}
else if($id=="Goa_favBtn")
{
$place=$_POST['place'];  
$imgSrc=$_POST['imgSrc'];
$loc=$_POST['loc'];


$db->query("insert into favourite values('$place','$email','$imgSrc','$loc')");
 
}
else if($id=="Kochi_favBtn")
{
$place=$_POST['place'];  
$imgSrc=$_POST['imgSrc'];
$loc=$_POST['loc'];

$db->query("insert into favourite values('$place','$email','$imgSrc','$loc')");
 
}
else if($id=="Wular_favBtn")
{
$place=$_POST['place'];  
$imgSrc=$_POST['imgSrc'];
$loc=$_POST['loc'];

$db->query("insert into favourite values('$place','$email','$imgSrc','$loc')");
 
}
else if($id=="Nainital_favBtn")
{
$place=$_POST['place'];  
$imgSrc=$_POST['imgSrc'];
$loc=$_POST['loc'];

$db->query("insert into favourite values('$place','$email','$imgSrc','$loc')");
 
}
else if($id=="Saputara_favBtn")
{
$place=$_POST['place'];  
$imgSrc=$_POST['imgSrc'];
$loc=$_POST['loc'];

$db->query("insert into favourite values('$place','$email','$imgSrc','$loc')");
 
}
else if($id=="Pichola_favBtn")
{
$place=$_POST['place'];  
$imgSrc=$_POST['imgSrc'];
$loc=$_POST['loc'];


$db->query("insert into favourite values('$place','$email','$imgSrc','$loc')");
 
}
if($id=="Golden_favBtn")
{
$place=$_POST['place'];  
$imgSrc=$_POST['imgSrc'];
$loc=$_POST['loc'];

$db->query("insert into favourite values('$place','$email','$imgSrc','$loc')");
 
}
else if($id=="Konark_favBtn")
{
$place=$_POST['place'];  
$imgSrc=$_POST['imgSrc'];
$loc=$_POST['loc'];


$db->query("insert into favourite values('$place','$email','$imgSrc','$loc')");
 
}
else if($id=="Somnath_favBtn")
{
$place=$_POST['place'];  
$imgSrc=$_POST['imgSrc'];
$loc=$_POST['loc'];

$db->query("insert into favourite values('$place','$email','$imgSrc','$loc')");
 
}
if($id=="WaterKingdom_favBtn")
{
$place=$_POST['place'];  
$imgSrc=$_POST['imgSrc'];
$loc=$_POST['loc'];

$db->query("insert into favourite values('$place','$email','$imgSrc','$loc')");
 
}
else if($id=="EsselWorld_favBtn")
{
$place=$_POST['place'];  
$imgSrc=$_POST['imgSrc'];
$loc=$_POST['loc'];


$db->query("insert into favourite values('$place','$email','$imgSrc','$loc')");
 
}
else if($id=="Gir_favBtn")
{
$place=$_POST['place'];  
$imgSrc=$_POST['imgSrc'];
$loc=$_POST['loc'];


$db->query("insert into favourite values('$place','$email','$imgSrc','$loc')");
 
}
else if($id=="Kaziranga_favBtn")
{
$place=$_POST['place'];  
$imgSrc=$_POST['imgSrc'];
$loc=$_POST['loc'];


$db->query("insert into favourite values('$place','$email','$imgSrc','$loc')");
 
}
else if($id=="Miami_Florida_favBtn")
{
$place=$_POST['place'];  
$imgSrc=$_POST['imgSrc'];
$loc=$_POST['loc'];


$db->query("insert into favourite values('$place','$email','$imgSrc','$loc')");
 
}
else if($id=="Goa_India_favBtn")
{
$place=$_POST['place'];  
$imgSrc=$_POST['imgSrc'];
$loc=$_POST['loc'];


$db->query("insert into favourite values('$place','$email','$imgSrc','$loc')");
 
}
else if($id=="Hawai_America_favBtn")
{
$place=$_POST['place'];  
$imgSrc=$_POST['imgSrc'];
$loc=$_POST['loc'];


$db->query("insert into favourite values('$place','$email','$imgSrc','$loc')");
 
}
else if($id=="Bondi_Australia_favBtn")
{
$place=$_POST['place'];  
$imgSrc=$_POST['imgSrc'];
$loc=$_POST['loc'];


$db->query("insert into favourite values('$place','$email','$imgSrc','$loc')");
 
}
else if($id=="Paris_favBtn")
{
$place=$_POST['place'];  
$imgSrc=$_POST['imgSrc'];
$loc=$_POST['loc'];


$db->query("insert into favourite values('$place','$email','$imgSrc','$loc')");
 
}
else if($id=="Dubai_favBtn")
{
$place=$_POST['place'];  
$imgSrc=$_POST['imgSrc'];
$loc=$_POST['loc'];


$db->query("insert into favourite values('$place','$email','$imgSrc','$loc')");
 
}
else if($id=="Dubai_SkyDiving_favBtn")
{
$place=$_POST['place'];  
$imgSrc=$_POST['imgSrc'];
$loc=$_POST['loc'];


$db->query("insert into favourite values('$place','$email','$imgSrc','$loc')");
 
}

else if($id=="Maldivs_ScubaDiving_favBtn")
{
$place=$_POST['place'];  
$imgSrc=$_POST['imgSrc'];
$loc=$_POST['loc'];


$db->query("insert into favourite values('$place','$email','$imgSrc','$loc')");
 
}
else if($id=="Rishikesh_RiveRafting_favBtn")
{
$place=$_POST['place'];  
$imgSrc=$_POST['imgSrc'];
$loc=$_POST['loc'];


$db->query("insert into favourite values('$place','$email','$imgSrc','$loc')");
 
}

else if($id=="Atlantis_favBtn")
{
$place=$_POST['place'];  
$imgSrc=$_POST['imgSrc'];
$loc=$_POST['loc'];

$db->query("insert into favourite values('$place','$email','$imgSrc','$loc')");
 
}
}
else{
    echo" YOU HAVE TO LOGIN FIRST!";
}

$db->close();
?>
