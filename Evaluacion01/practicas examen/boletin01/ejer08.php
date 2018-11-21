<?php
/*
 Ejercicio 8 tabla_coloreada.php
Crea una tabla, de 10 filas y 10 columnas de manera que contenga los números del 1
al 100 y que tenga las filas coloreadas de con colores alternados.
 */

$numero=1;
echo '<table border="2">';
for ($i = 1; $i <= 10; $i++) {
    echo '<tr>';
    for ($x = 1; $x <= 10; $x++) {
        if($i%2==0){
            echo '<td bgcolor="#ccccff">';
        }else{
            echo '<td bgcolor="#ffffff">';
        }
        echo $numero;
        $numero++;
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';

?>