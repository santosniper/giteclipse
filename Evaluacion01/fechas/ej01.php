<?php
/*
1. Realiza una función que acepte una fecha como cadena con el formato dd-mm-aaaa
compruebe si la fecha es correcta y nos devuelva la fecha en formato UNIX.
 */

/*
 function func01($date, $format = 'd-m-Y')
{
    $d = DateTime::createFromFormat($format, $date);
   
    return $d && $d->format($format) === $date;
}
if(func01('21-11-2018')==true){
    echo "correcto";
}else{
    echo "Formato (dd-mm-YYYY)";
}
 */



 function func01($fecha) {
     $fecha2=$fecha;
     $fecha_con_formato = date('d-m-Y',$fecha2);
     return $fecha_con_formato;
     
 }
 
 if(func01('21-11-2018')==true){
     echo "correcto";
 }else{
     echo "Formato (dd-mm-YYYY)";
 }

 
 