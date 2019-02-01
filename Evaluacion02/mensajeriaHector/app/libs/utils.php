<?php
//Aqui pondremos las funciones de validación de los campos

function validarDatos($nick, $nombre, $correo, $contrasena)
{
    return (is_string($nick) &
        is_string($nombre) &
        is_string($correo) &
        is_string($contrasena));
}

function correo($mail){
    $matches = null;
    return (true == preg_match('/^[A-z0-9\\._-]+@[A-z0-9][A-z0-9-]*(\\.[A-z0-9_-]+)*\\.([A-z]{2,6})$/', $mail, $matches));
}

function pwd($contrasena){
    if(preg_match("/^[0-9A-Za-z]{8,12}$/", $contrasena))
        
        return true;
        else
            return false;
   }
   
   function iduser($SESION){
       if(preg_match("^\d+$/", $SESION))
           
           return true;
           else
               return false;
               
               
               
               
   }

function validarDatosM($nombre, $correo, $contrasena)
{
    return (
        is_string($nombre) &
        is_string($correo) &
        is_string($contrasena));
}


function validarInicio($nick, $contrasena)
{
    return (is_string($nick) &
        is_string($contrasena));
}


function recoge($var)
{
    if (isset($_REQUEST[$var]))
        $tmp=strip_tags(sinEspacios($_REQUEST[$var]));
        else
            $tmp= "";
            
            return $tmp;
}

function sinEspacios($frase) {
    $texto = trim(preg_replace('/ +/', ' ', $frase));
    return $texto;
}
?>