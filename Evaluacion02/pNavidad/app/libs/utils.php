<?php
//Aqui pondremos las funciones de validación de los campos

function validarDatos($nick, $nombre, $correo, $contraseña)
{
    return (is_string($nick) &
        is_string($nombre) &
        is_string($correo) &
        is_string($contraseña));
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