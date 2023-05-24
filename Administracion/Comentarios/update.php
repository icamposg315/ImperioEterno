<?php

$datos = [$_POST['id'], $_POST['nombre'], $_POST['apellidos'], $_POST['email'], $_POST['fecha'], $_POST['comentario']];

require_once('../../Database.php');

Database::updateCOMENTARIO($datos);

header('Location: tablaComentario.php');
