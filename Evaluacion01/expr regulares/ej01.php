<?php
/*
Ejercicio 1
Crea una función que compruebe si la cadena recibida corresponde
 con un código postal válido en España (sólo comprobar que son 5 números).
  La función devolverá verdadero o falso.

 */

function cp_Esp(string $numero){
    return preg_match("/^[0-9]{5}$/", $numero);
   
}



if(cp_Esp("111211")==true){
    echo "Es un Código Postal Español";
}else{
    echo "No es un Código postal Español";
}