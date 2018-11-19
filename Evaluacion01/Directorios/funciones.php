<?php
/*
Función que recorre y devuelve el contenido de un directorio 
Realiza una función devuelveDir que recorre un directorio devolviendo
los nombre de los ficheros que contiene, sólo nombre de los ficheros. Devolvemos un array.
 */

function devuelveDir($ruta) {
    $directorio=opendir($ruta);
    $arrayDirect=array();
    $cont=0;
    while($archivo = readdir($directorio)){
        if(is_file($ruta."\\".$archivo)){
          $arrayDirect[$cont]=$archivo;
          $cont++;
        }
    }
       return $arrayDirect;
}
/*
$func1=devuelveDir("hola");
for($i=0;$i<count($func1);$i++){
    echo $func1[$i]."<br>";
}*/



/*Función recorre directorio y subdirectorios. 
Realiza una función devuelveDirSubdir que recorre 
un directorio y sus subdirectorios devuelve el nombre
de los ficheros que contienen cada uno de ellos. Devolvemos 
el nombre con la ruta completa. Devolvemos array.*/

function devuelveDirSubdir($ruta) {
    $directorio=opendir($ruta);
    $arrayDirect=array();
    $cont=0;
    while($archivo = readdir($directorio)){
        if(is_file($ruta."\\".$archivo)){
            $arrayDirect[$cont]=$archivo;
            $cont++;
        }
        
        if(is_dir($ruta."\\".$archivo)){
            /*if(strpos($archivo, ".")== false){
                $directorio=opendir($ruta."\\".$archivo);
                echo $ruta."\\".$archivo;
                $arrayDirect=array();
                $cont=0;
                while($archivo = readdir($directorio)){
                    if(is_file($ruta."\\".$archivo)){
                        $arrayDirect[$cont]=$archivo;
                        $cont++;
                    }
                }
            }
*/
            
           
           
        

               
            
            
        }
    }
    return $arrayDirect;
    
}


 $func2=devuelveDirSubdir("hola");
 for($i=0;$i<count($func2);$i++){
 echo $func2[$i]."<br>";
 }



?>