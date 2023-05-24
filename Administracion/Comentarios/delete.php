<?php

echo 'Hemos recogido el valor del id : '. $_GET['id'];

$id = $_GET['id'];

require_once('../../Database.php');

Database::deleteCOMENTARIO($id);

header('Location:tablaComentario.php');

?>