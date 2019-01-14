<?php ob_start() ?>

<table>
<tr>
<th>id_mensaje|</th>
<th>emisor|</th>
<th>receptor|</th>
<th>asunto|</th>
<th>mensaje|</th>


</tr>
<?php foreach ($params['mensajes'] as $mensaje) :?>
<tr>
<td><a href="index.php?ctl=verM&id=<?php echo $mensaje['Id_mensaje']?>">
<?php echo $mensaje['Id_mensaje'] ?></a></td>
<td><?php echo $mensaje['emisor'] ?></td>
<td><?php echo $mensaje['receptor'] ?></td>
<td><?php echo $mensaje['asunto']?></td>
<td><?php echo $mensaje['mensaje']?></td>
</tr>
<?php endforeach; ?>

</table>


<?php $contenido = ob_get_clean() ?>

<?php include 'layout.php' ?>
