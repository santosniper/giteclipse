<?php
/*
3. Realiza una función que reciba la fecha en formato UNIX y 
devuelva la fecha en formato dd-mm-aaaa y aaaa-mm-dd según un segundo
 argumento que le pasemos a la función.
 */


function func01($fecha,$formato) {
    $f1="d-m-Y";
    $f2="Y-m-d";
    if($formato==1){
        $formato=$f1;
        echo date($formato,$fecha);
       
    }else if($formato==2){
        $formato=$f2;
        echo date($formato,$fecha);
       
        
    }else{
        echo "Formato incorrecto";
    }
    
   
    
  
    
    
}

func01("595033200",3);