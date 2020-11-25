<?php
$link=new mysqli("localhost","id15026047_patel_jayen","msukifeeS@99","id15026047_freehost");
session_start();

$id=$_POST['id'];
$email=$_SESSION['useremail'];

if(isset($email))
{
if($id=="Mumbai_Goa_favBtn")
{
$place=$_POST['place'];  
$imgSrc=$_POST['imgSrc'];
$loc=$_POST['loc'];

$link->query("insert into favourite values('$place','$email','$imgSrc','$loc')");
setCookie("added",$place);
echo Added;
}
else if($id=="Goa_favBtn")
{
$place=$_POST['place'];  
$imgSrc=$_POST['imgSrc'];
$loc=$_POST['loc'];


$link->query("insert into favourite values('$place','$email','$imgSrc','$loc')");
echo Added;
}
else if($id=="Kochi_favBtn")
{
$place=$_POST['place'];  
$imgSrc=$_POST['imgSrc'];
$loc=$_POST['loc'];

$link->query("insert into favourite values('$place','$email','$imgSrc','$loc')");
echo Added;
}
else if($id=="Wular_favBtn")
{
$place=$_POST['place'];  
$imgSrc=$_POST['imgSrc'];
$loc=$_POST['loc'];

$link->query("insert into favourite values('$place','$email','$imgSrc','$loc')");
echo Added;
}
else if($id=="Nainital_favBtn")
{
$place=$_POST['place'];  
$imgSrc=$_POST['imgSrc'];
$loc=$_POST['loc'];

$link->query("insert into favourite values('$place','$email','$imgSrc','$loc')");
echo Added;
}
else if($id=="Saputara_favBtn")
{
$place=$_POST['place'];  
$imgSrc=$_POST['imgSrc'];
$loc=$_POST['loc'];

$link->query("insert into favourite values('$place','$email','$imgSrc','$loc')");
echo Added;
}
else if($id=="Pichola_favBtn")
{
$place=$_POST['place'];  
$imgSrc=$_POST['imgSrc'];
$loc=$_POST['loc'];


$link->query("insert into favourite values('$place','$email','$imgSrc','$loc')");
echo Added;
}
if($id=="Golden_favBtn")
{
$place=$_POST['place'];  
$imgSrc=$_POST['imgSrc'];
$loc=$_POST['loc'];

$link->query("insert into favourite values('$place','$email','$imgSrc','$loc')");
echo Added;
}
else if($id=="Konark_favBtn")
{
$place=$_POST['place'];  
$imgSrc=$_POST['imgSrc'];
$loc=$_POST['loc'];


$link->query("insert into favourite values('$place','$email','$imgSrc','$loc')");
echo Added;
}
else if($id=="Somnath_favBtn")
{
$place=$_POST['place'];  
$imgSrc=$_POST['imgSrc'];
$loc=$_POST['loc'];

$link->query("insert into favourite values('$place','$email','$imgSrc','$loc')");
echo Added;
}
if($id=="WaterKingdom_favBtn")
{
$place=$_POST['place'];  
$imgSrc=$_POST['imgSrc'];
$loc=$_POST['loc'];

$link->query("insert into favourite values('$place','$email','$imgSrc','$loc')");
echo Added;
}
else if($id=="EsselWorld_favBtn")
{
$place=$_POST['place'];  
$imgSrc=$_POST['imgSrc'];
$loc=$_POST['loc'];


$link->query("insert into favourite values('$place','$email','$imgSrc','$loc')");
echo Added;
}
else if($id=="Gir_favBtn")
{
$place=$_POST['place'];  
$imgSrc=$_POST['imgSrc'];
$loc=$_POST['loc'];


$link->query("insert into favourite values('$place','$email','$imgSrc','$loc')");
echo Added;
}
else if($id=="Kaziranga_favBtn")
{
$place=$_POST['place'];  
$imgSrc=$_POST['imgSrc'];
$loc=$_POST['loc'];


$link->query("insert into favourite values('$place','$email','$imgSrc','$loc')");
echo Added;
}
else if($id=="Miami_Florida_favBtn")
{
$place=$_POST['place'];  
$imgSrc=$_POST['imgSrc'];
$loc=$_POST['loc'];


$link->query("insert into favourite values('$place','$email','$imgSrc','$loc')");
echo Added;
}
else if($id=="Goa_India_favBtn")
{
$place=$_POST['place'];  
$imgSrc=$_POST['imgSrc'];
$loc=$_POST['loc'];


$link->query("insert into favourite values('$place','$email','$imgSrc','$loc')");
echo Added;
}
else if($id=="Hawai_America_favBtn")
{
$place=$_POST['place'];  
$imgSrc=$_POST['imgSrc'];
$loc=$_POST['loc'];


$link->query("insert into favourite values('$place','$email','$imgSrc','$loc')");
echo Added;
}
else if($id=="Bondi_Australia_favBtn")
{
$place=$_POST['place'];  
$imgSrc=$_POST['imgSrc'];
$loc=$_POST['loc'];


$link->query("insert into favourite values('$place','$email','$imgSrc','$loc')");
echo Added;
}
else if($id=="Paris_favBtn")
{
$place=$_POST['place'];  
$imgSrc=$_POST['imgSrc'];
$loc=$_POST['loc'];


$link->query("insert into favourite values('$place','$email','$imgSrc','$loc')");
echo Added;
}
else if($id=="Dubai_favBtn")
{
$place=$_POST['place'];  
$imgSrc=$_POST['imgSrc'];
$loc=$_POST['loc'];


$link->query("insert into favourite values('$place','$email','$imgSrc','$loc')");
echo Added;
}
else if($id=="Dubai_SkyDiving_favBtn")
{
$place=$_POST['place'];  
$imgSrc=$_POST['imgSrc'];
$loc=$_POST['loc'];


$link->query("insert into favourite values('$place','$email','$imgSrc','$loc')");
echo Added;
}

else if($id=="Maldivs_ScubaDiving_favBtn")
{
$place=$_POST['place'];  
$imgSrc=$_POST['imgSrc'];
$loc=$_POST['loc'];


$link->query("insert into favourite values('$place','$email','$imgSrc','$loc')");
echo Added;
}
else if($id=="Rishikesh_RiveRafting_favBtn")
{
$place=$_POST['place'];  
$imgSrc=$_POST['imgSrc'];
$loc=$_POST['loc'];


$link->query("insert into favourite values('$place','$email','$imgSrc','$loc')");
echo Added;
}

else if($id=="Atlantis_favBtn")
{
$place=$_POST['place'];  
$imgSrc=$_POST['imgSrc'];
$loc=$_POST['loc'];

$link->query("insert into favourite values('$place','$email','$imgSrc','$loc')");
echo Added;
}
}
else{
    echo" YOU HAVE TO LOGIN FIRST!";
}

$link->close();
?>
