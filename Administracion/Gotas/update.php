<?php

$datos = [$_POST['id'], $_POST['titulo'], $_POST['texto']];

require_once('../../Database.php');

Database::updateGOTAS($datos);

header('Location: tablaGotas.php');

?>