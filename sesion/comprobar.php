<?php
$user = $_POST["email"];
$password = $_POST["contrasena"];
require_once('../Database.php');
$resultado = Database::login($user, $password);

if ($resultado == null) {
    header('location: ../LenguajesDeMarcas/login.php');
} else {
    if ($resultado['email'] == 'Daniel@hotmail.com' || $resultado['email'] == 'Ismael@hotmail.com') {
        session_start();
        $_SESSION['user'] = $resultado;
        header('location: ../Administracion/bienvenida.php');
   } else {
        header('location: ../LenguajesDeMarcas/login.php');
    }
}
