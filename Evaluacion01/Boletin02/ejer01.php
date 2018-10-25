<?php
/*
1. Crea un array con índice numérico $dias con los días de la semana y muestra todas sus
parejas índices/valores mediante un bucle foreach y for.
 */

$dias=array("Lunes","Martes","Miércoles","Jueves","Viernes","Sábado","Domingo");

echo "<h1>Bucle for()</h1><br>";
for($i=0;$i<count($dias);$i++){
    echo $dias[$i]."<br>";
}

echo "<h1>Bucle foreach()</h1><br>";
foreach($dias as $sem){
    echo $sem."<br>";
}
?>