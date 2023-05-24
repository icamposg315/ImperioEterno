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
        <input type="text" name="nombre" placeholder="Nombre">
        <input type="text" name="apellidos" placeholder="Apellidos">
        <input type="text" name="email" placeholder="Correo electrónico">
        <input type="hidden" name="fecha" placeholder="Fecha">
        <input type="text" name="texto" placeholder="Comentario">
        <button type="submit">Enviar</button>
    </form>
</body>

</html>