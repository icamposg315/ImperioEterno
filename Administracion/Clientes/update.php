<?php
    // 1. Recoger todos los elementos del formulario
    $datos = [$_POST['id'], $_POST['nombre'], $_POST['apellidos'], $_POST['email'], $_POST['libro_id']];
    // 2. Importar la clase Database.php
    require_once('../../Database.php');

    // 3. Invocar la funcion update de Database llevandole los datos
    Database::updateCLIENTE($datos);

    // 4. Retornar al index.php
    header('Location: tablaClientes.php');
