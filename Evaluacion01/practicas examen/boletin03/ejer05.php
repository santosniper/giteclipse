<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Ejemplo 2</title> 
</head> 
<body> 
    <p> 
<?php
$pila = array("cinco"=>5, "uno"=>1, "cuatro"=>4, "dos"=>2, "tres"=>3);
echo "asort<br>Ordena un array y mantiene la asociaciÃ³n de Ã­ndices<br>";
asort($pila);
foreach ($pila as $key => $val){
    echo "$key = $val<br>";
}
echo "<br>";
$pila1 = array("cinco"=>5, "uno"=>1, "cuatro"=>4, "dos"=>2, "tres"=>3);
echo "arsort<br>Ordena un array en orden inverso y mantiene la asociaciÃ³n de Ã­ndices<br>";
arsort($pila1);
foreach ($pila1 as $key => $val){
    echo "$key = $val<br>";
}
echo "<br>";
$pila2 = array("cinco"=>5, "uno"=>1, "cuatro"=>4, "dos"=>2, "tres"=>3);
echo "ksort<br>Ordena un array por clave<br>";
ksort($pila2);
foreach ($pila2 as $key => $val){
    echo "$key = $val<br>";
}
echo "<br>";
$pila3 = array("cinco"=>5, "uno"=>1, "cuatro"=>4, "dos"=>2, "tres"=>3);
echo "sort<br>Esta funciÃ³n ordena un array. Los elementos estarÃ¡n ordenados de menor a mayor cuando la funciÃ³n haya terminado<br>";
sort($pila3);
foreach ($pila3 as $key => $val){
    echo "$key = $val<br>";
}
echo "<br>";
$pila4 = array("cinco"=>5, "uno"=>1, "cuatro"=>4, "dos"=>2, "tres"=>3);
echo "rsort<br>Esta funciÃ³n ordena un array en orden inverso (mayor a menor)<br>";
rsort($pila4);
foreach ($pila4 as $key => $val){
    echo "$key = $val<br>";
}
echo "<br>";
?>
</p> 
</body> 
</html> 