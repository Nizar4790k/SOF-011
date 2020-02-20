<?php

$name=$_POST['txtName'];
$dateOfBirth=date_create($_POST['dateInput']);


$yearOfBirth=date_format($dateOfBirth,"Y");
$dayOfBirth=date_format($dateOfBirth,"d");
$monthOfBirth=date_format($dateOfBirth,"m");

$currentYear=date("Y");
$currentDay=date("d");
$currentMonth=date("m");


$age=($currentYear-$yearOfBirth)
+(($currentMonth-$monthOfBirth)/12) 
+(($currentDay-$dayOfBirth)/365);




echo($name ."<br/>");


if($age>=18){
    echo("You are adult");
}else{
    echo("You are younger");
}







?>