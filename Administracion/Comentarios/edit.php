<?php 

$id = $_GET['id'];

// 2. Importar la clase Database.php
require_once('../../Database.php');

// 3. Invocar la funcion findById de la clase Database.php
$tabla = "comentario";
$comentario = Database::findById($id, $tabla);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentarios</title>
    <link rel="stylesheet" href="../LenguajesDeMarcas/estilos/estiloAcciones.css">
</head>
<body>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $comentario['id']?>">
        <input type="text" name="nombre" value="<?php echo $comentario['nombre'] ?>" placeholder="Actualiza el nombre">
        <input type="text" name="apellidos" value="<?php echo $comentario['apellidos'] ?>" placeholder="Actualiza los apellidos">
        <input type="text" name="email" value="<?php echo $comentario['email'] ?>" placeholder="Actualiza el correo electrónico">
        <input type="hidden" name="fecha" value="<?php echo $comentario['fecha'] ?>" placeholder="Actualiza la fecha">
        <input type="text" name="comentario" value="<?php echo $comentario['comentario'] ?>" placeholder="Actualiza el comentario">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>