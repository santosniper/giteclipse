<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Ejemplo 2</title> 
</head> 
<body> 
    <p> 
<?php
$colores=array(
    'Colores fuertes'=>[
        'Rojo'=>'FF0000',
        'Verde'=>'00FF00',
        'Azul'=>'0000FF'
    ],
    'Colores suaves'=>[
        'Rosa'=>'FE9ABC',
        'Amarillo'=>'FDF189',
        'Malva'=>'BC8F8F'
    ]
);
echo "<table style='border-collapse: collapse; text-align: center;'>";
foreach ($colores as $tipos=>$lenguaje){
    echo "<tr><td style='border: none; padding-right: 25px; padding-left: 25px; padding-bottom: 10px;'>" . $tipos . ":</td>";
        foreach ($lenguaje as $dato=>$contenido){
            echo "<td style='border: black 1px solid; padding-right: 25px; padding-left: 25px; padding-bottom: 10px; background-color:#" . $contenido . ";'>" . $dato . ":" . $contenido . "</td>";
        }
    echo "</tr>";
}
echo "</table>";
foreach ($colores as $tipos=>$lenguaje){
        if (in_array("FF88CC", $lenguaje)) {
            echo "<br>Existe FF88CC<br>";
        }
        if (in_array("FF0000", $lenguaje)) {
            echo "<br>Existe FF0000<br>";
        }
}
echo "<br>in_array<br>Busca la aguja (needle) en el pajar (haystack) usando una comparaciÃ³n flexible a menos que estÃ© establecido strict.";
?>
</p> 
</body> 
</html> 