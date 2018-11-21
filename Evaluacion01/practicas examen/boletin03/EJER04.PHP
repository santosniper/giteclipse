<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Ejemplo 2</title> 
</head> 
<body> 
    <p> 
<?php
$numeros= array(
        "España"=>[
            "Equipo1"=>[
                "Portero"=>"Frank",
                "Defensa"=>"Pepe",
                "Medio"=>"Luis",
                "Delantero"=>"Raul"
            ],
            "Equipo2"=>[
                "Portero"=>"Tiger",
                "Defensa"=>"Mourin",
                "Medio"=>"Katz",
                "Delantero"=>"Alberto"
            ]
        ],
        "Mexico"=>[
            "Equipo1"=>[
                "Portero"=>"Suarez",
                "Defensa"=>"Koltz",
                "Medio"=>"Fernandez",
                "Delantero"=>"Ramirez"
            ]
        ],
        "Argentina"=>[
            "Equipo1"=>[
                "Portero"=>"Higuita",
                "Defensa"=>"Mel",
                "Medio"=>"Rubens",
                "Delantero"=>"Messi"
            ],
            "Equipo2"=>[
                "Portero"=>"Kostenmeiner",
                "Defensa"=>"Lenkins",
                "Medio"=>"Marash",
                "Delantero"=>"Juanes"
            ]
       ]);
echo "for each<br>";
foreach ($numeros as $tipos=>$lenguaje){
    echo $tipos . "<br>";
    foreach ($lenguaje as $dato=>$contenido){
        echo $dato . "<br>";
        foreach ($contenido as $posicion=>$nombre){
            echo $posicion . ":" . $nombre . "<br>";
        }
    }
    echo "<br>";
}
$numeros1= array(
    array(
        array(
            "Frank","Pepe","Luis","Raul"
        ),
        array(
            "Tiger","Mourin","Katz","Alberto"
        )
    ),
    array(
       array(
            "Suarez","Koltz","Fernandez","Ramirez"
        )
    ),
    array(
        array(
            "Higuita","Mel","Rubens","Messi"
        ),
        array(
            "Kostenmeiner","Lenkins","Marash","Juanes"
        )
    ));
echo "for";
for ($i = 0; $i < count($numeros1); $i++) {
    for ($x = 0; $x < count($numeros1[$i]); $x++) {
        for ($j = 0; $j < count($numeros1[$i][$x]); $j++) {
            echo $numeros1[$i][$x][$j] . "<br>";
        }
    }
}
?>
</p> 
</body> 
</html> 