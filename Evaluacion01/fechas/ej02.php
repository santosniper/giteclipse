<?php
/*
2. Realiza una función que acepte una fecha como cadena con el formato
 aaaa-mm-dd compruebe si la fecha es correcta y nos devuelva la fecha en formato UNIX.
 */

function func02($fecha) {
    $mes=$fecha[5].$fecha[6];
    $dia=$fecha[8].$fecha[9];
    $año=$fecha[0].$fecha[1].$fecha[2].$fecha[3];
    $compr=checkdate($mes, $dia, $año);
    if($compr==false){
        echo "fecha incorrecta<br>".$fecha;
    }else{
        
        echo  "Fecha en UNIX:<br>".mktime(0,0,0,$mes,$dia,$año);
        
        
    }
    
    
}

func02("1988-11-09");