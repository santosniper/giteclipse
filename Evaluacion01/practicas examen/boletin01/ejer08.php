<?php
/*
 Ejercicio 8 tabla_coloreada.php
Crea una tabla, de 10 filas y 10 columnas de manera que contenga los números del 1
al 100 y que tenga las filas coloreadas de con colores alternados.
 */
$cont=0;


echo "<table border=5px>";
    for($tr=0;$tr<10;$tr++){
            echo "<tr>";
            for($td=0;$td<10;$td++){
                $cont++;
                echo "<td>";
                echo $cont;
                echo "</td>";
            }


             echo "</tr>";
    
        }




echo "</table>";
?>