<?php

$datos =  [$_POST['nombre'], $_POST['texto']];
require_once('../../Database.php');

Database::savePERSONAJES($datos);

header('Location: ../bienvenida.php');
?>