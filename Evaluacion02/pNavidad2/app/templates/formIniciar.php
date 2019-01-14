<?php ob_start() ?>

<?php if(isset($params['mensaje'])) :?>
<b><span style="color: red;"><?php echo $params['mensaje'] ?></span></b>
<?php endif; ?>
<br/>
<form name="formIniciar" action="index.php?ctl=login" method="POST">
<table>
<tr>
<th>Nick</th>
<th>contraseña</th>
</tr>
<tr>
<td><input type="text" name="nick" value="<?php echo $params['nick'] ?>" /></td>
<td><input type="text" name="contrasena" value="<?php echo $params['contrasena'] ?>" /></td>
</tr>

</table>
<input type="submit" value="iniciar" name="iniciar" />
</form>

<?php $contenido = ob_get_clean() ?>

<?php include 'layout.php' ?>
