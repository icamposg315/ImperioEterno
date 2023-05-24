<?php

$datos =  [$_POST['titulo'], $_POST['texto']];
require_once('../../Database.php');

Database::saveGOTAS($datos);

header('Location: ../bienvenida.php');
