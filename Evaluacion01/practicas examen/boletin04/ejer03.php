<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Ejemplo 2</title> 
</head> 
<body> 
    <p> 
<?php
$str="Hola me llamo Marcos";
$letra="a";
$cont=substr_count($str, $letra);
echo "'" . $str . "'" . " => " . "muestra: " . $cont;
?>
</p> 
</body> 
</html> 