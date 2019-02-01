<?php
ob_start();
session_destroy();
unset($_SESSION['id_usuario']);

$contenido = ob_get_clean();
header("Location: index.php?ctl=login");
include 'layout.php' ?>