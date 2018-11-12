<?php
/*
Función que recorre y devuelve el contenido de un directorio 
Realiza una función devuelveDir que recorre un directorio devolviendo
los nombre de los ficheros que contiene, sólo nombre de los ficheros. Devolvemos un array.
 */

function fDir01($ruta) {
    $directorio=opendir($ruta);
    while($archivo = readdir($directorio)){
        if(is_file($archivo)){
            echo "$archivo es un fichero.<br>";
        }
        
    }
}