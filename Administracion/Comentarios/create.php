<?php
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
    <link rel="stylesheet" href="../administracion.css">
    <link rel="icon" type="image/x-icon" href="../../LenguajesDeMarcas/cabeza.ico">
    <title>Crear</title>
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="navbar-brand">
                <a href="#" class="username" id="nameUser"><?php echo 'Bienvenido, ' . $_SESSION['user']['nombre'] ?><i class="fas fa-caret-down"></i></a>
            </div>
            <div class="user-profile">
                <img src="" alt="" id="imageUser">
                <a class="dropdown-item" href="tablaComentario.php"><i class="fas fa-user"></i>Volver</a>
                <a class="dropdown-item" href=""><i class="fas fa-cog"></i>Ajustes</a>
                <a class="dropdown-item" href="../../sesion/logout.php"><i class="fas fa-sign-out-alt"></i>Cerrar Sesión</a>
            </div>
        </nav>
    </header>
    <h1 class="operacion">Crear</h1>
    <form class="formulario" action="save.php" method="POST">
        <input type="text" name="nombre" placeholder="Nombre">
        <input type="text" name="apellidos" placeholder="Apellidos">
        <input type="text" name="email" placeholder="Correo electrónico">
        <input type="hidden" name="fecha" placeholder="Fecha">
        <input type="text" name="texto" placeholder="Comentario">
        <button type="submit">Enviar</button>
    </form>
</body>

</html>