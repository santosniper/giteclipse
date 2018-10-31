<?php
/*
1. Realiza una función que acepte una fecha como cadena con el formato dd-mm-aaaa
compruebe si la fecha es correcta y nos devuelva la fecha en formato UNIX.
 */
 function func01($fecha) {
    $day=1<=>31;
    $month=1<=>12;
    $year=1<=>9999;
     $fecha=checkdate($day, $month, $year);
     if($fecha==true){
        echo "Correcta";
     }echo "El formato correcto es dd-mm-aaaa";
 }
 
 func01(10/11/18);
 