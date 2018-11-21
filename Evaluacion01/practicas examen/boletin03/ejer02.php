
<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ejemplo 2</title>
</head>
<body>
<p>
<?php
$materias=array(
    'Servidor' => [
        'Ana' => 5,
        'Juan' => 7,
        'Marcos' => 8,
        'Pepe' => 5,
        'Angel' => 2
    ],
    'Cliente' => [
        'Ana' => 3,
        'Juan' => 4,
        'Marcos' => 6,
        'Pepe' => 9,
        'Angel' => 10
    ],
    'Diseño' => [
        'Ana' => 3,
        'Juan' => 2,
        'Marcos' => 9,
        'Pepe' => 10,
        'Angel' => 1
    ]
);
foreach ($materias as $tipos=>$lenguaje){
    echo "<table border='1'>";
    echo "<tr><td>" . $tipos . "</td></tr>";
    echo "<tr><td>Alumnos</td>";
    echo "<td>Notas</td></tr>";
    echo "<tr>";
    foreach ($lenguaje as $contenido=>$datos){
        echo "<td>" . $contenido . "</td>";
        echo "<td>" . $datos . "</td>";
        echo "</tr>";
    }
    echo "</table><br>";
}
$media=0;
echo "<table border='1'>";
echo "<tr><td>Asignatura</td>";
echo "<td>Notas Medias</td></tr>";
foreach ($materias as $tipos=>$lenguaje){
    echo "<tr><td>" . $tipos . "</td>";
    foreach ($lenguaje as $contenido=>$datos){
        $media=$media+$datos;
    }
    echo "<td>$media</td></tr>";
}
echo "</table><br>";
$media1=0;
$media2=0;
$media3=0;
$media4=0;
$media5=0;
$count1=1;
foreach ($materias as $tipos=>$lenguaje){
    foreach ($lenguaje as $contenido=>$datos){
        if($count1==1){
            $media1=$media1+$datos;
            $count1++;
        }
        elseif($count1==2){
            $media2=$media2+$datos;
            $count1++;
        }
        elseif($count1==3){
            $media3=$media3+$datos;
            $count1++;
        }
        elseif($count1==4){
            $media4=$media4+$datos;
            $count1++;
        }
        elseif($count1==5){
            $media5=$media5+$datos;
            $count1++;
            $count1=1;
        }
    }
}
echo "<table border='1'>";
echo "<tr><td>Alumnos</td>";
echo "<td>Notas Medias</td></tr>";
foreach ($materias as $tipos=>$lenguaje){
    foreach ($lenguaje as $contenido=>$datos){
        if($count1==1){
            echo "<tr><td>" . $contenido . "</td><td>" . $media1 . "</td></tr>";
            $count1++;
        }
        elseif($count1==2){
            echo "<tr><td>" . $contenido . "</td><td>" . $media2 . "</td>";
            $count1++;
        }
        elseif($count1==3){
            echo "<tr><td>" . $contenido . "</td><td>" . $media3 . "</td>";
            $count1++;
        }
        elseif($count1==4){
            echo "<tr><td>" . $contenido . "</td><td>" . $media4 . "</td>";
            $count1++;
        }
        elseif($count1==5){
            echo "<tr><td>" . $contenido . "</td><td>" . $media5 . "</td>";
            $count1++;
        }
    }
}
echo "</table><br>";
?>
</p> 
</body> 
</html> 