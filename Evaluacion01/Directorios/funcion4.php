<?php
/*
Ejercicio Función recorrido Array Multidimensional.
Realiza una función que muestre el contenido de un 
array multidimensional.
 */

function arrayMultidimensional($array) {
    foreach ($array as $item => $value){
        echo $item.":".$value."";
}
}


$values =[array ("fecha" => "10/08/2011", "estadocivil" => "soltero", "nombre" => "francisco"),array ("fecha" => "10/08/2011", "estadocivil" => "soltero", "nombre" => "francisco")]; 

arrayMultidimensional($values);