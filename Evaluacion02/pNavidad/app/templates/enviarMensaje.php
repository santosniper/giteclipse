<?php ob_start() ?>

<?php if(isset($params['mensaje'])) :?>
<b><span style="color: red;"><?php echo $params['mensaje'] ?></span></b>
<?php endif; ?>
<br/>
<form name="enviarMensaje" action="index.php?ctl=enviar" method="POST">
<table>
<tr>
<th>Para</th>
<td><input type="text" name="para" value="<?php echo $params['para'] ?>" /></td>
</tr>

<tr>
<th>Asunto</th>
<td><input type="text" name="asunto" value="<?php echo $params['asunto'] ?>" /></td>
<th>De</th>
<td><input type="text" name="de" value="<?php echo $params['de'] ?>" /></td>
</tr>



<td colspan="4"><textarea name="cuerpo" rows="33" cols="33" value="<?php echo $params['cuerpo'] ?>" ></textarea></td>
</tr>

</table>
<input type="submit" value="enviar" name="enviar" />
</form>
* 

<?php $contenido = ob_get_clean() ?>

<?php include 'layout.php' ?>
