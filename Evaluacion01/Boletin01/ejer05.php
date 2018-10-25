<?php
/*
Ejercicio 5. tabla_multiplicar
Crea listado con las tablas de multiplicar del 1 al 9. Al iniciar cada tabla aparecerá un encabezado.
 */

for($cont=1;$cont<=9;$cont++){  

echo "<dl><h1><b>Tabla del ".$cont."</b></h1>";
for($i=0;$i<=10;$i++){
    echo "<li>".$cont."x".$i."=".$cont*$i."</li>";
    
}
echo "</dl>";
}
?>