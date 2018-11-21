<?php
/*
1. Crea un array con índice numérico $dias con los días de la semana y muestra todas sus
parejas índices/valores mediante un bucle foreach y for.
 */

$dias = array('LUNES','MARTES','MIÉRCOLES','JUEVES','VIERNES','SÁBADO','DOMINGO');



for($i=0;$i<count($dias);$i++){
    echo $dias[$i]."<br>";
}

foreach($dias as $sem){
    echo $sem."<br>";
}