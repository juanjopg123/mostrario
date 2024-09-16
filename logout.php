<?php
session_start();

// Destruir todas las variables de sesión
$_SESSION = array();

// Destruir la sesión
session_destroy();

// Redirigir al usuario al formulario de inicio de sesión
header("Location: login-panel.php");
exit;
?>
