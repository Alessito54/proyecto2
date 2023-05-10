<!DOCTYPE html>
<html lang="es">
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Ariel Alessandro Osorio Pedraza">
    <meta name="date" content="25/04/2023">
    <meta name="keywords" content="radio, php, web">
    <title></title>
 </head>
 <body>
    <h1>token_get_all</h1>

<?php

$cantidad_pc1 = $_POST['Computadora1'];
    $preciopc1=21999.00;

    $carrito=($cantidad_pc1*$preciopc1);
if ( $carrito>0) {
    echo $carrito ;
} else {
    echo "su carrito esta vacio";
}


   


?>
 </body>
</html>