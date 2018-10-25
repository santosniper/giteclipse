<?php
/*
Ejercicio 7 tabla_multiplicar_3
Crea una tabla con 10 filas y 2 columnas que mostrará la tabla de multiplicar 
del número que contenga una variable $numero (recuerda que no tenemos entrada de datos
 y simularemos la entrada de datos con esta variable).
En la primera columna mostraremos, por ejemplo 2x3 y en 
la celda correspondiente de la segunda columna el resultado.
 */
$cont=rand(1,9);
echo "<table border=3px>";

    
    
    for($i=0;$i<=10;$i++){
        echo "<tr>";
        echo "<td>".$cont."x".$i."</td>",
        "<td>".$cont*$i."</td>";
        
        echo "</tr>";
    }
    
    

echo "</table>";
?>