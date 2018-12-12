<?php
/*
Ejercicio2.- Realiza un script que cargue los datos de la tabla empleados utilizando Singleton.
 */
include ('ConexionDB.php');

$errores="";
try {
    $db = modelo::GetInstance();
    $resultado = $db->query("SELECT id, nombre FROM empleados");
    while ($registro = $resultado->fetch())
    {
        echo "ID ".$registro['id'].": ";
        echo $registro['nombre']."<br />";
    } 
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
?>