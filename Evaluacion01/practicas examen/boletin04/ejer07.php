<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Ejemplo 2</title> 
</head> 
<body> 
    <p> 
<?php
$str="ApRendEr proGraMarciÃ“n";
$long=mb_strlen($str)/2;
if($long%2==0){
    for ($i = 0; $i < $long; $i++) {
        echo "*";
    }
}
else{
    for ($i = 0; $i <= $long; $i++) {
        echo "*";
    }
}
echo mb_strtolower($str);
if($long%2==0){
    for ($i = 0; $i < $long; $i++) {
        echo "*";
    }
}
else{
    for ($i = 0; $i <= $long; $i++) {
        echo "*";
    }
}
?>
</p> 
</body> 
</html> 