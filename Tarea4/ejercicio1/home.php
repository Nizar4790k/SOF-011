<?php

session_start();

$_SESSION["name"]=$_POST["name"];
$_SESSION["sex"]=$_POST["sex"];

if($_SESSION["sex"]=="Masculino"){
    header("Location: masculino.html");
}else{
    header("Location: femenino.html");
}




?>