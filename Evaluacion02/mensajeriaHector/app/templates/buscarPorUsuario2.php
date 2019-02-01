<?php ob_start() ?>

<form name="formBusqueda" action="index2.php?ctl=buscarPorUsuario2" method="POST">

<table>
<tr>
<td><input type="hidden" name="usuario" value="<?php echo $_SESSION['id_usuario']?>"></td>

<td><input type="submit" value="Mostrar"></td>
</tr>
</table>

</table>

</form>

<?php if (count($params['resultado'])>0): ?>
<table>
<tr>
<th>De</th>
<th>Asunto</th>
<th>Mensaje</th>
</tr>
<?php foreach ($params['resultado'] as $usuario) : ?>
<tr>
<td><a href="index2.php?ctl=verM&id=<?php echo $usuario['id'] ?>">
<td><?php echo $usuario['Id_emisor'] ?></td>
<td><?php echo $usuario['asunto'] ?></td>
<td><?php echo $usuario['mensaje'] ?></td>
</tr>
<?php endforeach; ?>

</table>
<?php endif; ?>

<?php $contenido = ob_get_clean() ?>

<?php include 'layout2.php' ?>
