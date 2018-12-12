<?php
/*
 Ejercicio1.- Realiza un script que cargue todos los datos de la tabla empleados y los muestre en
pantalla incluyendo una línea separadora entre cada uno de ellos.
 */
$usuario="root";
$contraseña="";

$opciones = array( PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_PERSISTENT => true );


$mbd = new PDO('mysql:host=localhost;dbname=curso_php', $usuario, $contraseña, $opciones);

$resultado = $mbd->query("SELECT id, nombre FROM empleados");
while ($registro = $resultado->fetch())
{
    echo "ID ".$registro['id'].": ";
    echo $registro['nombre']."<br />";
} 




?>