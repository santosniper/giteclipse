<?php
/*
1. Realiza una función que acepte una fecha como cadena con el formato dd-mm-aaaa
compruebe si la fecha es correcta y nos devuelva la fecha en formato UNIX.
 */


function func01($fecha) {
    $mes=$fecha[3].$fecha[4];
    $dia=$fecha[0].$fecha[1];
    $año=$fecha[6].$fecha[7].$fecha[8].$fecha[9];
    $compr=checkdate($mes, $dia, $año);
    if($compr==false){
        echo "fecha incorrecta<br>".$fecha;
    }else{
        echo date("d-m-Y",mktime(0,0,0,$mes,$dia,$año));
        echo  "Fecha en UNIX:<br>".mktime(0,0,0,$mes,$dia,$año);
        
       
    }
   

}

func01("09-13-1988");

 
 