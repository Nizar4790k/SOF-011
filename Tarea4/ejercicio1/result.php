<?php

    session_start();


    echo("<h1>Resultados</h1>" ."<br>");

    echo("Nombre: " .$_SESSION["name"] ."<br>");
    echo("Sexo: " .$_SESSION["sex"] ."<br>");
    echo("Color: " .$_POST["color"] ."<br>");
    echo("Marca: " .$_POST["brand"] ."<br>");
    echo("Cabello: " .$_POST["hair"] ."<br>");


    /*

    echo ("Nombre:"  .$_SESSION["name"] ."<br>"
          ."Sexo: "  .$_SESSION["sex"]  ."<br>"
          ."Color: " .$_POST["color"]  ."<br>"
          ."Marca: " .$_POST["brand"]  ."<br>"
          ."Pelo: "  .$_POST["hair"]    ."<br">);

          */
          
        


?>