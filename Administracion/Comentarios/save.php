<?php

$datos =  [$_POST['nombre'], $_POST['apellidos'], $_POST['email'], $_POST['fecha'], $_POST['texto']];
require_once('../../Database.php');

Database::saveCOMENTARIO($datos);

header('Location: ../bienvenida.php');
?>