<?php

$id = $_GET['id'];

require_once('../../Database.php');

$tabla = "gotas_de_escritura";
$gotas = Database::findById($id, $tabla);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gotas de Escrituras</title>
    <link rel="stylesheet" href="../LenguajesDeMarcas/estilos/estiloAcciones.css">
</head>
<body>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $gotas['id'] ?>">
        <input type="text" name="titulo" value="<?php echo $gotas['titulo'] ?>" placeholder="Actualiza el titulo de la gota">
        <input type="text" name="texto" value="<?php echo $gotas['texto'] ?>" placeholder="Actualiza el texto de la gota">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>