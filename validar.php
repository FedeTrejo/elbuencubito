<?php
session_start();
$_SESSION['nombre'] = $nombre;
$loggged = TRUE;
header("Location:index.php");
?>