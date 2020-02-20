<?php

$sports=0;


if($_POST["basketball"]=="basket"){
    $sports++;
} 

if($_POST["football"]=="football"){
    $sports++;
}

if($_POST["volleyball"]=="volley"){
    $sports++;
} 

if($_POST["tennis"]=="tennis"){
    $sports++;
}

echo($_POST["name"] ." practices " .$sports ." sports");








?>