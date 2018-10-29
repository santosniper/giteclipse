<?php


function cp_Esp(string $numero){
    return preg_match("/^[0-9]{5}$/", $numero);
   
}


function tlf_Esp(string $tlf){
 

    return preg_match("/^\+34[0-9]{9}$/", sinGuiones(sinEspacios($tlf)));
}

function calles(String $calle){
    return preg_match("/^calle|avenida|paseo/i", $calle);
}
function user(String $us){
    return  preg_match("/^[a-z|A-Z][\w_]{7,23}[a-zA-Z0-9]$/", $us) ;
   
    
}
function email($mail) {
    return preg_match("/^[a-zA-Z]\w.+@[a-zA-Z]+\.[a-zA-Z]{2,4}$/", $mail);
}




