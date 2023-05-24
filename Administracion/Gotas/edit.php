<?php

$id = $_GET['id'];

require_once('../../Database.php');

$tabla = "gotas_de_escritura";
$gotas = Database::findById($id, $tabla);
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
    <title>Gotas de Escrituras</title>
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="navbar-brand">
                <a href="#" class="username" id="nameUser"><?php echo 'Bienvenido, ' . $_SESSION['user']['nombre'] ?><i class="fas fa-caret-down"></i></a>
            </div>
            <div class="user-profile">
                <img src="" alt="" id="imageUser">
                <a class="dropdown-item" href="tablaGotas.php"><i class="fas fa-user"></i>Volver</a>
                <a class="dropdown-item" href=""><i class="fas fa-cog"></i>Ajustes</a>
                <a class="dropdown-item" href="../../sesion/logout.php"><i class="fas fa-sign-out-alt"></i>Cerrar Sesión</a>
            </div>
        </nav>
    </header>
    <h1>Editar</h1>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $gotas['id'] ?>">
        <input type="text" name="titulo" value="<?php echo $gotas['titulo'] ?>" placeholder="Actualiza el titulo de la gota">
        <input type="text" name="texto" value="<?php echo $gotas['texto'] ?>" placeholder="Actualiza el texto de la gota">
        <button type="submit">Enviar</button>
    </form>
</body>

</html>