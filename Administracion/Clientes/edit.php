<?php

$id = $_GET['id'];

// 2. Importar la clase Database.php
require_once('../../Database.php');

// 3. Invocar la funcion findById de la clase Database.php
$tabla = "cliente";
$cliente = Database::findById($id, $tabla);

session_start();

if (!isset($_SESSION['user'])) {
    header('Location: ../LenguajesDeMarcas/login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../../LenguajesDeMarcas/cabeza.ico">
    <link rel="stylesheet" href="../administracion.css">
    <title>Clientes</title>
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="navbar-brand">
                <a href="#" class="username" id="nameUser"><?php echo 'Bienvenido, ' . $_SESSION['user']['nombre'] ?><i class="fas fa-caret-down"></i></a>
            </div>
            <div class="user-profile">
                <img src="" alt="" id="imageUser">
                <a class="dropdown-item" href="tablaClientes.php"><i class="fas fa-user"></i>Volver</a>
                <a class="dropdown-item" href=""><i class="fas fa-cog"></i>Ajustes</a>
                <a class="dropdown-item" href="../../sesion/logout.php"><i class="fas fa-sign-out-alt"></i>Cerrar Sesión</a>
            </div>
        </nav>
    </header>
    <h1>Editar</h1>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $cliente['id'] ?>">
        <input type="text" name="nombre" value="<?php echo $cliente['nombre'] ?>" placeholder="Actualiza el nombre">
        <input type="text" name="apellidos" value="<?php echo $cliente['apellidos'] ?>" placeholder="Actualiza los apellidos">
        <input type="text" name="email" value="<?php echo $cliente['email'] ?>" placeholder="Actualiza el correo electrónico">
        <input type="text" name="libro_id" value="<?php echo $cliente['libro_id'] ?>" placeholder="Actualiza el identificador del libro">
        <button type="submit">Enviar</button>
    </form>
</body>

</html>