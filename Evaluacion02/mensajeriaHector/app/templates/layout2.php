<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Mensajería</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="<?php echo 'css/'.Config::$mvc_vis_css ?>" />

</head>
<body>
<div id="cabecera">
<h1>Mensajería</h1>
</div>

<div id="menu">
<hr/>

<a href="index2.php?ctl=listar">Mostrar usuarios</a> |
<a href="index2.php?ctl=buscarPorUsuario2">Bandeja de entrada</a>|
<a href="index2.php?ctl=buscarPorUsuario">Enviados</a>|
<a href="index2.php?ctl=enviar">enviar mensaje</a>|
<a href="index2.php?ctl=salir">Cerrar sesión</a>|


<hr/>
</div>

<div id="contenido">
<?php echo $contenido ?>
</div>

<div id="pie">
<hr/>
<div align="center">- pie de página -</div>
</div>
</body>
</html>
