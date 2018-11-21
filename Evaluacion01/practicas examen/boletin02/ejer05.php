<?php
/*
5. Crea una estructura de datos conveniente para almacenar dos listas de lenguajes,
“lenguajes servidor” y “lenguajes cliente”.
 */

$lenguajes=array(
    'Lenguajes Servidor'=>[
        array(
            'Perl',
            'PHP'
        )
    ],
    'Lenguajes Cliente'=>[
        array(
            'JavaScript',
            'HTML'
        )
    ]
);
foreach ($lenguajes as $tipos=>$lenguaje){
    echo $tipos . ":<br>";
    foreach ($lenguaje as $contenido=>$datos){
        //echo "Programa numero " . ($contenido+1) . "<br>";
        foreach ($datos as $dato=>$contenido){
            echo $dato+1 . ": " . $contenido . "<br>";
        }
    }
}
?>