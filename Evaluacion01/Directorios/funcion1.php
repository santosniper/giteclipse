<?php
/*
Función que recorre y devuelve el contenido de un directorio 
Realiza una función devuelveDir que recorre un directorio devolviendo
los nombre de los ficheros que contiene, sólo nombre de los ficheros. Devolvemos un array.
 */

function devuelveDir($ruta) {
    $directorio=opendir($ruta);
    $arrayDirect=array();

    while($archivo = readdir($directorio)){
        if($archivo != "." && $archivo != ".." && is_file($ruta."\\".$archivo)){
          $arrayDirect[]=$archivo;
         
        }
    }
       closedir ($directorio);
       return $arrayDirect;
}

$func1=devuelveDir("hola");
for($i=0;$i<count($func1);$i++){
    echo $func1[$i]."<br>";
}



