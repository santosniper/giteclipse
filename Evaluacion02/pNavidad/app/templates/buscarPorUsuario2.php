<?php ob_start() ?>

<form name="formBusqueda" action="index.php?ctl=buscarPorUsuario2" method="POST">

<table>
<tr>
<td> Receptor:</td>
<td><input type="text" name="usuario" value="<?php echo $params['usuario']?>">(puedes utilizar '%' como comodín)</td>

<td><input type="submit" value="buscar"></td>
</tr>
</table>

</table>

</form>

<?php if (count($params['resultado'])>0): ?>
<table>
<tr>
<th>Id_mensaje</th>
<th>Emisor</th>
<th>Receptor</th>
<th>Mensaje</th>
</tr>
<?php foreach ($params['resultado'] as $usuario) : ?>
<tr>
<td><a href="index.php?ctl=verM&id=<?php echo $usuario['id'] ?>">
<?php echo $usuario['Id_mensaje'] ?></a></td>
<td><?php echo $usuario['emisor'] ?></td>
<td><?php echo $usuario['receptor'] ?></td>
<td><?php echo $usuario['mensaje'] ?></td>
</tr>
<?php endforeach; ?>

</table>
<?php endif; ?>

<?php $contenido = ob_get_clean() ?>

<?php include 'layout.php' ?>
