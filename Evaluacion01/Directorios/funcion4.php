<?php
include 'funcion3.php';
/*
Ejercicio Función recorrido Array Multidimensional.
Realiza una función que muestre el contenido de un 
array multidimensional.
 */

function mostrarArrayMultidimensional($matriz){
    foreach($matriz as $key => $value){
        if(is_array($value)){
            echo 'key:'.$key;
            echo "<br>";
            mostrarArrayMultidimensional($value);
        }else{
            echo $key.':'.$value;
            echo "<br>";
        }
    }
}

