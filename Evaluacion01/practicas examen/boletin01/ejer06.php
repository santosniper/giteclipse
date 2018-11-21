<?php
/*
Ejercicio 6. tabla_multiplicar_2
Crea una tabla con 11 filas y 9 columnas, de manera que muestre 
las tablas de del 1 al 9. La primera fila corresponde al encabezado.
 */
echo "<table border=3px>";
for($cont=1;$cont=9;$cont++){
    
    echo "<tr>";
    for($i=0;$i<=9;$i++){
        echo "<td>".$cont."x".$i."=".$cont*$i."</td>";
        
    }
    echo "</tr>";
    
}
echo "</table>";
?>