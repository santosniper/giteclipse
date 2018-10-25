<?php
/*
Ejercicio 4._ switch.php
Programa que según el valor de una variable muestra un mensaje en la pantalla u otro.
Por ejemplo si es una variable que almacena una cadena, los posibles valores serán
arriba, abajo, medio, otros; el mensaje sería “Estoy arriba”, en el caso de que el valor
de la variable fuera arriba y así sucesivamente.
 */

$nRand=rand(0,3);
switch ($nRand){
    case 0:
        echo "Soy el numero ".$nRand;
        break;
        
    case 1:
        echo "Soy el numero ".$nRand;
        break;
        
    case 2:
        echo "Soy el numero ".$nRand;
        break;
        
    case 3:
        echo "Soy el numero ".$nRand;
        break;
        
}
?>