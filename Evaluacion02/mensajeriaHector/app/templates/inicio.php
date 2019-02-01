<?php ob_start() ?>
<h3> Fecha: <?php echo $params['fecha'] ?> </h3>
<?php echo $params['mensaje'] ?>

<?php $contenido = ob_get_clean() ?>

<?php include 'layout2.php' ?>
