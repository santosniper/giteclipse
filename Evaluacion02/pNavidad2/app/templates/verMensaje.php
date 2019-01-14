<?php ob_start() ?>

<h1><?php echo $params['asunto'] ?></h1>
<table border="1">

<tr>
<td>Nombre</td>
<td><?php echo $params['emisor'] ?></td>

</tr>
<tr>
<td>Correo</td>
<td><?php echo $params['mensaje']?></td>

</tr>


</table>


<?php $contenido = ob_get_clean() ?>

<?php include 'layout.php' ?>

