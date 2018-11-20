<?php
/*
Función que recorre directorio y subdirectorios. 
Realiza una función devuelveDirSubdir que recorre 
un directorio y sus subdirectorios devolviendo los 
nombre de los ficheros que contienen cada uno de 
ellos, discriminando donde está contenido cada uno 
de ellos. Devuelve array multidimensional.
 */

function devuelveDirSubdir2($ruta){
    $directorio = opendir($ruta);
    $arrayDirect = array();
    //Mostramos las informaciones
    while ($archivo = readdir($directorio))
    {
        if ($archivo != "." && $archivo != ".." && is_dir($ruta."\\".$archivo)){
            $arrayDirect[] = devuelveDirSubdir2($ruta."\\".$archivo);
        }elseif($archivo != "." && $archivo != ".."){
            $arrayDirect[] = $ruta."\\".$archivo;
        }
    }
    closedir($directorio);
    return $arrayDirect;
}

$func3=devuelveDirSubdir2("hola");
for($i=0;$i<count($func3);$i++){
    echo $func3[$i]."<br>";
}