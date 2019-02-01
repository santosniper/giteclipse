<?php ob_start() ?>

<table>
<tr>
<th>Nick </th>
<th>nombre</th>
<th>correo </th>
<th>Código de ususario </th>

</tr>
<?php foreach ($params['usuarios'] as $usuario) :?>
<tr>
<td><a href="index.php?ctl=ver&id=<?php echo $usuario['Id_usuario']?>">
<?php echo $usuario['nick'] ?></a></td>
<td><?php echo $usuario['nombre']?></td>
<td><?php echo $usuario['correo']?></td>
<td><?php echo $usuario['Id_usuario']?></td>
</tr>
<?php endforeach; ?>

</table>


<?php $contenido = ob_get_clean() ?>

<?php include 'layout2.php' ?>
