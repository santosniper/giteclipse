<?php
include 'funcion4.php';
/*
 Función que recorre directorio y subdirectorios.
 Realiza una función devuelveDirSubdir que recorre
 un directorio y sus subdirectorios devolviendo los
 nombre de los ficheros que contienen cada uno de
 ellos, discriminando donde está contenido cada uno
 de ellos. DEVUELVE UN ARRAY MULTIDIMENSIONAL.
 */

function devuelveDirSubdir2($ruta) {
    $directorio = opendir($ruta);
    $arrayDirect = array();
    
    while(($archivo = readdir($directorio))!=false){
        if(is_file($ruta."/".$archivo)){
            $arrayDirect[]=$ruta."/".$archivo;
        }
        if(is_dir($ruta."/".$archivo)&&$archivo!="."&&$archivo!=".."){
            $arrayDirect[$archivo]=devuelveDirSubdir2(($ruta."/".$archivo));
        }
    }
    closedir($directorio);
    return $arrayDirect;
}

devuelveDirSubdir2("hola");
//mostrarArrayMultidimensional($array);


