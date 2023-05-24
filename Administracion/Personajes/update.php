<?php

$datos = [$_POST['id'], $_POST['nombre'], $_POST['texto']];

require_once('../../Database.php');

Database::updatePERSONAJES($datos);

header('Location: tablaPersonajes.php');

?>