<?php ob_start() ?>

<?php if(isset($params['mensaje'])) :?>
<b><span style="color: red;"><?php echo $params['mensaje'] ?></span></b>
<?php endif; ?>
<br/>
<form name="enviarMensaje" action="index2.php?ctl=enviar" method="POST">
<table>
<tr>
<th>Para</th>
<td><input type="text" name="para" value="<?php echo $params['para'] ?>" /></td>
</tr>

<tr>
<th>Asunto</th>
<td><input type="text" name="asunto" value="<?php echo $params['asunto'] ?>" /></td>
</tr>

<tr>
<th>Cuerpo</th>
</tr>
<tr>
<td colspan="2"><textarea name="cuerpo" rows="15" cols="33" value="<?php echo $params['cuerpo'] ?>" ></textarea></td>
</tr>

</table>
<input type="submit" value="enviar" name="enviar" />
</form>
* 

<?php $contenido = ob_get_clean() ?>

<?php include 'layout2.php' ?>
