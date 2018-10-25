<?php
/*
Ejercicio 3.- ejercicio3.php Define dos constantes que contienen datos 
sobre el planeta Tierra: su radio y su distancia al Sol (en kilómetros),
 otra más con el valor de Pi.
 Opera con estas constantes para obtener la distancia de una vuelta al
  mundo siguiendo el ecuador y muéstrala por pantalla (circunferencia =2 * PI * radio).
   Calcula también a cuantas vueltas al mundo equivale la distancia entre la Tierra
    y el Sol, y muéstralo por pantalla.
 */

define("rTierra",6371000);
define("sol_Tierra",149600000);
define("pi",3.1416);

$circunTierra=2*pi*rTierra;
$equivalente=sol_Tierra/$circunTierra;

echo "La distancia de la vuelta al mundo es de ".$circunTierra." millones de Km.<br>",
"La distancia de la Tierra al Sol, equivale a ".$equivalente." vueltas a la tierra.";
?>