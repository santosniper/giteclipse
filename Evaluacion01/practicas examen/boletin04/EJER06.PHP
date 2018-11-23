<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Ejemplo 2</title> 
</head> 
<body> 
    <p> 
<?php
$str="El abecedario completo es algo largo y detallarlo exhaustivamente es costoso";
$arraystr=explode(" ", $str);
for ($i = 0; $i < count($arraystr); $i++) {
    echo $arraystr[$i] . "<br>";
}
?>
</p> 
</body> 
</html> 