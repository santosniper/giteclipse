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
$str="Hola me llamo Marcos";
$long=mb_strlen($str);
$cont=0;
for ($i = 0; (($i < $long) && ($cont<2)); $i++) {
    if((mb_substr($str, $i, 1))==" " || $i==$long-1){
        $cont++;
    }
    echo mb_substr($str, $i, 1);
}
echo "<br>";
if($cont<2){
    echo "No hay dos palabras";
}
*/
$str="Eres un desgracido de mierda jajajaj capullo";
$arraystr=explode(" ", $str);
for ($i = 0; ($i < count($arraystr)) && ($i<2) ; $i++) {
        echo $arraystr[$i] . " ";
}
?>
</p> 
</body> 
</html> 