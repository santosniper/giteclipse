<?php
/*Función recorre directorio y subdirectorios.
 Realiza una función devuelveDirSubdir que recorre
 un directorio y sus subdirectorios devuelve el nombre
 de los ficheros que contienen cada uno de ellos. Devolvemos
 el nombre con la ruta completa. Devolvemos array.*/

function devuelveDirSubdir($ruta){
    $directorio = opendir($ruta);
    $arrayDirect = array();
   
    while ($archivo = readdir($directorio))
    {
        if ($archivo != "." && $archivo != ".." && is_dir($ruta."\\".$archivo)){
            $arrayDirect = array_merge(devuelveDirSubdir($ruta."\\".$archivo),$arrayDirect);
        }elseif($archivo != "." && $archivo != ".."){
            $arrayDirect[] = $ruta."\\".$archivo;
        }
    }
    closedir($directorio);
    return $arrayDirect;
}


$func2=devuelveDirSubdir("hola");
 for($i=0;$i<count($func2);$i++){
 echo $func2[$i]."<br>";
 }
 




?>