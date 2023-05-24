<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../LenguajesDeMarcas/estilos/estiloAcciones.css">
    <title>Crear</title>
</head>

<body>
    <h6 class="operacion">CREAR</h6>

    <form class="formulario" action="save.php" method="POST">
        <input type="text" name="titulo" placeholder="Inserte el nombre de la gota">
        <input type="text" name="texto" placeholder="Inserte la descripción">
        <button type="submit">Enviar</button>
    </form>
</body>

</html>