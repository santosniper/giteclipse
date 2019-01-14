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
<a href="index.php?ctl=inicio">Inicio</a> |
<a href="index.php?ctl=listar">Usuarios</a> |
<a href="index.php?ctl=listarM">Mensajes</a>|
<a href="index.php?ctl=login">Login</a>|
<a href="index.php?ctl=insertar">insertar usuario</a>|
<a href="index.php?ctl=enviar">enviar mensaje</a>|
<a href="index.php?ctl=buscarPorUsuario">buscar mensaje por emisor</a>|
<a href="index.php?ctl=buscarPorUsuario2">buscar mensaje por receptor</a>|
<a href="index.php?ctl=exit">exit</a>|


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
