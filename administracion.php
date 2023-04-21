<?php
require_once('Database.php');

$database = new database();
$resultado = $database->getAllPersonajes();
$resultado2 = $database->getAllGotas();
$resultado3 = $database->getAllComentarios();
$resultado4 = $database->getAllClientes();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="administracion.css">
    <link rel="icon" type="image/x-icon" href="cabeza.ico">
    <title>Administrador</title>
</head>

<body>
    <h1>Personajes principales</h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Opción

                </th>

            </tr>
        </thead>

        <tboby>
            <tr>
                <?php
                foreach ($resultado as $row) {
                    echo "<tr><td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['nombre'] . "</td>";
                    echo "<td>" . $row['texto'] . "</td>";
                    echo "<td>" .   "<button>Eliminar</button>
                    <button>Editar</button>
                    <button>Mostrar</button>" . "</td></tr>";
                }

                ?>

            </tr>
        </tboby>

    </table>

    <h1>Gotas de escritura</h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Opción

                </th>

            </tr>
        </thead>

        <tbody>
            <tr>
                <?php
                foreach ($resultado2 as $row) {
                    echo "<tr><td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['titulo'] . "</td>";
                    echo "<td>" . $row['texto'] . "</td>";
                    echo "<td>" .   "<button>Eliminar</button>
                    <button>Editar</button>
                    <button>Mostrar</button>" . "</td></tr>";
                }

                ?>

            </tr>
        </tbody>

    </table>

    <h1>Comentarios</h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Email</th>
                <th>Fecha</th>
                <th>Comentario</th>
                <th>Opción</th>


            </tr>
        </thead>

        <tbody>
            <tr>
                <?php
                foreach ($resultado3 as $row) {
                    echo "<tr><td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['nombre'] . "</td>";
                    echo "<td>" . $row['apellidos'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['fecha'] . "</td>";
                    echo "<td>" . $row['comentario'] . "</td>";
                    echo "<td>" .   "<button>Eliminar</button>
                    <button>Editar</button>
                    <button>Mostrar</button>" . "</td></tr>";
                }

                ?>

            </tr>
        </tbody>
    </table>
    <h1>Clientes</h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Email</th>
                <th>Libro_id</th>
                <th>Opción</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <?php
                foreach ($resultado4 as $row) {
                    echo "<tr><td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['nombre'] . "</td>";
                    echo "<td>" . $row['apellidos'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['libro_id'] . "</td>";
                    echo "<td>" .   "<button>Eliminar</button>
                    <button>Editar</button>
                    <button>Mostrar</button>" . "</td></tr>";
                }

                ?>

            </tr>
        </tbody>
    </table>
</body>

</html>