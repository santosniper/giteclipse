<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Ejemplo 2</title> 
</head> 
<body> 
    <p> 
<?php
/*
$abecedario=array("a","e","i","o","u");
$str="El abecedario completo es algo largo y detallarlo exhaustivamente es costoso";
$long1=count($abecedario);
$long2=mb_strlen($str);
$cont=0;
for ($i = 0; $i < $long1; $i++) {
    for ($x = 0; $x < $long2; $x++) {
        if(($abecedario[$i])==((mb_substr($str, $x, 1)))){
            $cont++;
        }
    }
    echo "La letra " . $abecedario[$i] . " aparece " . $cont . " veces<br>";
    $cont=0;
}
*/
$abecedario=array("a","e","i","o","u");
$str="El abecedario completo es algo largo y detallarlo exhaustivamente es costoso";
$long1=count($abecedario);
for ($i = 0; $i < $long1; $i++) {
    echo "La letra " . $abecedario[$i] . " aparece " . substr_count($str, $abecedario[$i]) . " veces<br>";
}
?>
</p> 
</body> 
</html> 