<?php
ob_start();
session_destroy();
unset($_SESSION['id_usuario']);

$contenido = ob_get_clean();
include 'layout.php' ?>