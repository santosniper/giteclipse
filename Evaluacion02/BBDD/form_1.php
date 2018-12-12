<?php
include ('bGeneral.php');
include ('ConexionDB.php');

$name=recoge('nombre');
$puesto=recoge('puesto');
$fnac=recoge('fnac');
$salario=recoge('salario');
$localidad=recoge('localidad');
echo "<b>Registrado:</b><br>";





$errores="";/*
try {*/
    
    $db = modelo::GetInstance();
    $parametros = array(":nom" => $name, ":puesto" => $puesto, ":fnac" => $fnac, ":sal" => $salario, ":loc" => $localidad,);
    
    
    $pdoSt = $db->prepare('INSERT INTO empleados (nombre, puesto, fecha_nacimiento, salario, localidad) VALUES (:nom, :puesto, :fnac, :sal, :loc)');
    $pdoSt->execute($parametros);
    
    $preparado2 = $db->prepare("SELECT nombre, puesto, fecha_nacimiento, salario, localidad FROM empleados where nombre like :nom");
    $preparado2->bindParam(":nom", $name);
    $preparado2->execute();
    $resultado=$preparado2->fetch();
    print_r($resultado);
    
    
  
    /*
} catch (PDOException $e) {
    
    // Usar error_log para guardar errores para el administrador
    // Para realizar esta acción sería conveniente crear una clase para manejar el archivo log
    error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logdb.txt");
    
    $errores = "Ha sucedido un error en la consulta";
} catch (Error $e) {
    
    error_log($e->getMessage().microtime().PHP_EOL,3,"logerr.txt");
    $errores="Excepción error capturada <br>";
    
}
echo $errores;
?>*/