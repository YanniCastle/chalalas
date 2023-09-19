<!--Solo localhost-->
<?php

$Chost = "localhost";
$Cuser = "u909812438_root";
$Cpass = "QWERTYu5544";
$Cdb = "u909812438_chalalas";

$con = new mysqli($Chost, $Cuser, $Cpass, $Cdb);

if($con->connect_errno){
  die("Ha ocurrido un error");
}
?>