<?php
/*
Ejercicio 2.- ejercicio2.php Crea un programa que sea capaz de almacenar los datos en
variables y mostrarlas en pantalla tal y como aparecen en la imagen siguiente. El programa
debe tener algún comentario explicativo
 */

$nombre="Juan";
$ape1="Palomo";
$ape2="García";
$apellidos=$ape1." ".$ape2;
$edad=23;
$domc="C/ America 33";
$cp=34017;
$tlf=596209934;
$prof="Programador";

echo 
    "Nombre: "." ".$nombre."<br>",
    "Apellidos: "." ".$apellidos."<br>",
    "Edad: "." ".$edad."<br>",
    "Domicilio: "." ".$domc."<br>",
    "Codigo Postal: "." ".$cp."<br>",
    "Telefono; "." ".$tlf."<br>",
    "Profesión: "." ".$prof
;
?>