<?php ob_start() ?>

<?php if(isset($params['mensaje'])) :?>
<b><span style="color: red;"><?php echo $params['mensaje'] ?></span></b>
<?php endif; ?>
<br/>
<form name="enviarMensaje" action="index.php?ctl=enviar" method="POST">
<table>
<tr>
<th>Para</th>
<th>Asunto</th>
<th>Correo</th>
<th>Cuerpo</th>
</tr>
<tr>
<td><input type="text" name="para" value="<?php echo $params['para'] ?>" /></td>
<td><input type="text" name="asunto" value="<?php echo $params['asunto'] ?>" /></td>
<td><input type="text" name="de" value="<?php echo $params['de'] ?>" /></td>
<td><input type="text" name="cuerpo" value="<?php echo $params['cuerpo'] ?>" /></td>
</tr>

</table>
<input type="submit" value="enviar" name="enviar" />
</form>
* 

<?php $contenido = ob_get_clean() ?>

<?php include 'layout.php' ?>
