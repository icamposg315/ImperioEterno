<?php 

$id = $_GET['id'];

// 2. Importar la clase Database.php
require_once('../../Database.php');

// 3. Invocar la funcion findById de la clase Database.php
$tabla = "comentario";
$comentario = Database::findById($id, $tabla);

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
    <title>Comentarios</title>
    <link rel="stylesheet" href="../administracion.css">
</head>
<body>
<header>
        <nav class="navbar">
            <div class="navbar-brand">
                <a href="#" class="username" id="nameUser"><?php echo 'Bienvenido, '.$_SESSION['user']['nombre']?><i class="fas fa-caret-down"></i></a>
            </div>
            <div class="user-profile">
                <img src="" alt="" id="imageUser">
                <a class="dropdown-item" href=""><i class="fas fa-user"></i>Ver Perfil</a>
                <a class="dropdown-item" href=""><i class="fas fa-cog"></i>Ajustes</a>
                <a class="dropdown-item" href="../../sesion/logout.php"><i class="fas fa-sign-out-alt"></i>Cerrar Sesión</a>
            </div>
        </nav>
    </header>
<h1>Editar</h1>
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