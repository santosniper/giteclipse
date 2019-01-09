<?php ob_start() ?>

<h1><?php echo $params['nick'] ?></h1>
<table border="1">

<tr>
<td>Nombre</td>
<td><?php echo $params['nombre'] ?></td>

</tr>
<tr>
<td>Correo</td>
<td><?php echo $params['correo']?></td>

</tr>


</table>


<?php $contenido = ob_get_clean() ?>

<?php include 'layout.php' ?>
