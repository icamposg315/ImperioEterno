<?php

echo 'Hemos recogido el valor del id : '. $_GET['id'];

$id = $_GET['id'];

require_once('../../Database.php');

Database::deleteGOTAS($id);

header('Location:tablaGotas.php');


?>