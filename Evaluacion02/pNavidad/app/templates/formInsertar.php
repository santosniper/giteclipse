<?php ob_start() ?>

<?php if(isset($params['mensaje'])) :?>
<b><span style="color: red;"><?php echo $params['mensaje'] ?></span></b>
<?php endif; ?>
<br/>
<form name="formInsertar" action="index.php?ctl=insertar" method="POST">
<table>
<tr>
<th>Nick</th>
<th>Nombre</th>
<th>Correo</th>
<th>contraseña</th>
</tr>
<tr>
<td><input type="text" name="nick" value="<?php echo $params['nick'] ?>" /></td>
<td><input type="text" name="nombre" value="<?php echo $params['nombre'] ?>" /></td>
<td><input type="text" name="correo" value="<?php echo $params['correo'] ?>" /></td>
<td><input type="text" name="contraseña" value="<?php echo $params['contraseña'] ?>" /></td>
</tr>

</table>
<input type="submit" value="insertar" name="insertar" />
</form>
* 

<?php $contenido = ob_get_clean() ?>

<?php include 'layout.php' ?>
