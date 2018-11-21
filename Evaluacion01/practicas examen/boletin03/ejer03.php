<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Ejemplo 2</title> 
</head> 
<body> 
    <p> 
<?php
$nombrenumeros= array("uno.jpg","dos.jpg","tres.jpg","cuatro.jpg","cinco.jpg","seis.jpg");
$animal=$nombrenumeros[rand(0,5)];
$numeros= array(
        "uno.jpg"=>[
            "Nombre"=>"Ardilla",
            "Grupo"=>"Mamifero",
            "Especie"=>"Arboricola"
        ],
        "dos.jpg"=>[
            "Nombre"=>"Foca",
            "Grupo"=>"Mamifero",
            "Especie"=>"Focidos"
        ],
        "tres.jpg"=>[
            "Nombre"=>"Tigre",
            "Grupo"=>"Mamifero",
            "Especie"=>"Felidae"
        ],
        "cuatro.jpg"=>[
            "Nombre"=>"Leon",
            "Grupo"=>"Mamifero",
            "Especie"=>"Felidae"
        ],
        "cinco.jpg"=>[
            "Nombre"=>"Panda",
            "Grupo"=>"Mamifero",
            "Especie"=>"Ursidae"
        ],"seis.jpg"=>[
            "Nombre"=>"Rana",
            "Grupo"=>"Mamifero",
            "Especie"=>"Ranidae"
        ]);
echo "<img src=Animales/" . $animal . "></img><br>";
echo "Nombre:" . $numeros[$animal]["Nombre"] . "<br>";
echo "Grupo:" . $numeros[$animal]["Grupo"] . "<br>";
echo "Especie:" . $numeros[$animal]["Especie"] . "<br>";
?>
</p> 
</body> 
</html> 