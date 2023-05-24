<?php
require_once('../../Database.php');

$database = new database();
$resultado2 = $database->getAllGotas();

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
    <title>Gotas</title>
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
    <h1>Gotas de escritura</h1>
    <a href="create.php">Crear</a>
    <table>
        <thead>
            <?php
            echo '<tr>';
            echo '<th>Id</th>';
            echo '<th>Nombre</th>';
            echo '<th>Descripción</th>';
            echo '<th>Opción</th>';
            echo '</tr>';
            ?>
        </thead>

        <tbody>
            <tr>
                <?php
                foreach ($resultado2 as $row) {
                    echo '<tr><td>' . $row["id"] . '</td>';
                    echo '<td>' . $row["titulo"] . '</td>';
                    echo '<td>' . $row["texto"] . '</td>';
                    echo '<td><a href="edit.php?id='.$row["id"].'">Editar</a><a href="delete.php?id='.$row["id"].'">Eliminar</a></td>';
                }

                ?>

            </tr>
        </tbody>

    </table>
</body>

</html>