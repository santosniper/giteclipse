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
 
   
    $arrayDirect = array();
    if(is_dir($ruta)){
        if( $directorio = opendir($ruta)){
    
    while(($archivo = readdir($directorio))!=false){
        if(is_file($ruta."/".$archivo)){
            $arrayDirect[]=$ruta."/".$archivo;
        }
        if(is_dir($ruta."/".$archivo) && $archivo!="." && $archivo!=".."){
            $arrayDirect[$archivo]=devuelveDirSubdir2(($ruta."/".$archivo));
        }
    }
        }
        closedir($directorio);
       
    }else
        $arrayDirect[]="<br>No es una ruta valida";
        return $arrayDirect;
    
    
}
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

$array=devuelveDirSubdir2("hola");
mostrarArrayMultidimensional($array);


