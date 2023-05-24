<?php

$id = $_GET['id'];

require_once('../../Database.php');

$tabla = "personajes";
$personajes = Database::findById($id, $tabla);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personajes</title>
    <link rel="stylesheet" href="../LenguajesDeMarcas/estilos/estiloAcciones.css">
</head>
<body>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $personajes['id'] ?>">
        <input type="text" name="nombre" value="<?php echo $personajes['nombre'] ?>" placeholder="Actualiza el nombre del personaje">
        <input type="text" name="texto" value="<?php echo $personajes['texto'] ?>" placeholder="Actualiza la descripción">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>