<?php


$name=$_POST['name'];  
$link=new mysqli("localhost","id15026047_patel_jayen","msukifeeS@99","id15026047_freehost");
$link->query("insert into tempdb values('$name')");
echo "RECORD SUCCESFULLY INSERTED";
?>