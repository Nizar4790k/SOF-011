<?php


$entries="";

switch($_POST["interval"]){

    case "1":
        $entries="between 1 and 1000";
    break;

    case "2":
        $entries="between 1001 and 3000";
    break;

    case "3":
        $entries="more than 3000";
    break;
}

echo($_POST["name"] ." entries are " .$entries ."<br>");


if($_POST["interval"]=="3"){
    echo "You must pay for taxes for profiting more than 3000";
}





?>