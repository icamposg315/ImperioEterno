<?php 

$id = $_GET['id'];

// 2. Importar la clase Database.php
require_once('../../Database.php');

// 3. Invocar la funcion findById de la clase Database.php
$tabla = "cliente";
$cliente = Database::findById($id, $tabla);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link rel="stylesheet" href="../LenguajesDeMarcas/estilos/estiloAcciones.css">
</head>
<body>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $cliente['id']?>">
        <input type="text" name="nombre" value="<?php echo $cliente['nombre'] ?>" placeholder="Actualiza el nombre">
        <input type="text" name="apellidos" value="<?php echo $cliente['apellidos'] ?>" placeholder="Actualiza los apellidos">
        <input type="text" name="email" value="<?php echo $cliente['email'] ?>" placeholder="Actualiza el correo electrónico">
        <input type="text" name="libro_id" value="<?php echo $cliente['libro_id'] ?>" placeholder="Actualiza el identificador del libro">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>