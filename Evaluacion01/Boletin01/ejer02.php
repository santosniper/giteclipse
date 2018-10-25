<?php
/*
 Ejercicio 2.- ejercicio2.php Crea un programa que sea capaz de almacenar
 los datos en variables y mostrarlas en pantalla tal y como aparecen en la imagen siguiente. 
 El programa debe tener algún comentario explicativo.
 */

$nom="Hector";  $ape1="Santos";$ape2="Sanroque"; $edad=21; $apey2=$ape1." ".$ape2;
$domc="C/ Las cortes 40b"; $cp=46470; $tlf=665352249; $prof="Estudiante";

echo

"<p>Nombre: "."<b>$nom</b>", 
"<p>Apellidos: "."<b>$apey2</b>",
"<p>Edad: "."<b>$edad</b>",
"<p>Domicilio: "."<b>$domc</b>",
"<p>Código  Postal: "."<b>$cp</b>",
"<p>Teléfono: "."<b>$tlf</b>",
"<p>Profesión: "."<b>$prof</b>";
?>
