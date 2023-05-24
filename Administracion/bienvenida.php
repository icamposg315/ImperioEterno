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
    <link rel="stylesheet" href="bienvenida.css">
    <link rel="icon" type="image/x-icon" href="../LenguajesDeMarcas/cabeza.ico">
    <title>Administración</title>
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
                <a class="dropdown-item" href="../sesion/logout.php"><i class="fas fa-sign-out-alt"></i>Cerrar Sesión</a>
            </div>
        </nav>
    </header>

    <div class="caja">
        <img id="imagen2" src="../LenguajesDeMarcas/cabeza.ico">
        <h1>Bienvenido al menú administrador:</h1>
    </div>
    <main>
        <div>
            <a href="../Administracion/Clientes/tablaClientes.php">Clientes</a>
            <a href="../Administracion/Comentarios/tablaComentario.php">Comentarios</a>
        </div>
        <div>
            <a href="../Administracion/Personajes/tablaPersonajes.php">Personajes</a>
            <a href="../Administracion/Gotas/tablaGotas.php">Gotas</a>
        </div>

    </main>
</body>

</html>