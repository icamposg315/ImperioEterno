<?php
session_start();

if (isset($_SESSION['user'])) {
    header('Location: ../Administracion/administracion.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="cabeza.ico">
    <link rel="stylesheet" href="estilos/estiloLogin.css">
    <title>Login</title>
</head>

<body>
    <form action="../sesion/comprobar.php" class="login" method="POST">
        <h2 id="bienvenido">Grata civis</h2>
        <label class="validacion1">
            <input class="control" onblur="validarEmail()" type="email" placeholder="Email" name="email" id="email">
            <span class="mensaje"></span>
        </label>

        <label class="validacion1">
            <input class="control" onblur="validarContrasena()" placeholder="Contraseña" type="password" name="contrasena" id="contraseña">
            <span class="mensaje"></span>
        </label>
        <label class="validacion2">
            <button type="submit" id="log">
                LOG
            </button>
        </label>
    </form>

</body>
<script src="Validaciones/validacionLogin.js"></script>

</html>