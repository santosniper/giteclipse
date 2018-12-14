<?php
include ('bGeneral.php');
include ('ConexionDB.php');

$name=recoge('nombre');
$mail=recoge('mail');
$pwd=recoge('pwd');
    
echo "<b>Registrado:</b><br>";





$errores="";
    
    $db = modelo::GetInstance();
    $parametros = array(":nom" => $name, ":mail" => $mail,":pwd" => $pwd,);
    
    
    $pdoSt = $db->prepare('INSERT INTO registros (nombre, correo, contraseña) VALUES (:nom, :mail, :pwd)');
    $pdoSt->execute($parametros);
    
    $preparado2 = $db->prepare("SELECT nombre, correo, contraseña FROM registros where nombre like :nom");
    $preparado2->bindParam(":nom", $name);
    $preparado2->execute();
    $resultado=$preparado2->fetch();
    print_r($resultado);
    
    
