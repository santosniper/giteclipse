<?php

/*
 Función que recorre directorio y subdirectorios.
 Realiza una función devuelveDirSubdir que recorre
 un directorio y sus subdirectorios devolviendo los
 nombre de los ficheros que contienen cada uno de
 ellos, discriminando donde está contenido cada uno
 de ellos. DEVUELVE UN ARRAY MULTIDIMENSIONAL.
 */

function devuelveDirSubdir2($ruta) {
    $array=array();
    if (is_dir($ruta)) {
        if ($dh = opendir($ruta)) {
            while (($file = readdir($dh)) != false) {
                if(is_file($ruta . "/" . $file)){
                    $array[]=$ruta . "/" . $file;
                }
                if (is_dir($ruta . "/" . $file) && $file!="." && $file!=".."){
                    $array[$file]=devuelveDirSubdir2($ruta . "/" . $file);
                }
            }
        }
        closedir($dh);
    }else
        $array[]="<br>No es ruta valida";
        return $array;
}
function mostrarArrayMultidimensional($matriz){
    foreach($matriz as $key=>$value){
        if (is_array($value)){
            echo 'key:'. $key;
            echo '<br>';
            mostrarArrayMultidimensional($value);
        }else{
            echo $key.': '.$value ;
            echo '<br>';
        }
    }
}
$array=devuelveDirSubdir2("hola");
mostrarArrayMultidimensional($array);