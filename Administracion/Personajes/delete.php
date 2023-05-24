<?php

echo 'Hemos recogido el valor del id : '. $_GET['id'];

$id = $_GET['id'];

require_once('../../Database.php');

Database::deletePERSONAJES($id);

header('Location:tablaPersonajes.php');

?>