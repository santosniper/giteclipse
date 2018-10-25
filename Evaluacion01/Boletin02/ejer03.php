<?php
/*
3. Escriba un programa que muestre la imagen de un animal al azar. Para ello tendrás que
guardar en una carpeta las imágenes de varios animales.
 */

$animales = array(
    'toro.jpg', 'rinoceronte.jpg', 'perro.jpg');

$num = rand(0,2);

echo '<img src="img/' . $animales[$num] . '">';
?>