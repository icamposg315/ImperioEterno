<?php

$datos =  [$_POST['nombre'], $_POST['apellidos'], $_POST['email'], $_POST['id_libro']];
require_once('../../Database.php');

Database::saveCLIENTE($datos);

header('Location: ../../LenguajesDeMarcas/index.php');
