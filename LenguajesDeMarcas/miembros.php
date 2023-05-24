<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hazte Miembro</title>
    <link rel="stylesheet" href="estilos/estilosMiembro.css">
    <link rel="icon" type="image/x-icon" href="cabeza.ico">
    <script src="https://kit.fontawesome.com/e1ac92fa66.js" crossorigin="anonymous"></script>
</head>

<body>
    <h1>Hazte miembro de la comunidad del imperio.</h1>
    <div class="comunidad">
        <ul>
            <li>Tendrás contacto directo con el autor.</li>
            <li>Podrás participar en debates promovidos por los distinto miempros o por ti mismo.</li>
            <li>Tendras acceso a invitaciones de eventos.</li>
        </ul>

        <section class="miembro">

            <form method="POST" action="../Administracion/Clientes/save.php">
                <label>
                    <input onblur="validarNombre()" name="nombre" class="control" placeholder="Nombre" type="text" id="nombre">
                    <span class="mensaje"></span>
                </label>
                <label>
                    <input onblur="validarUsuario() " name="apellidos" class="control" placeholder="Apellidos" type="text" id="user">
                    <span class="mensaje"></span>
                </label>
                <label>
                    <input onblur="validarEmail()" name="email" class="control" placeholder="Email" type="email" id="email">
                    <span class="mensaje"></span>
                </label>
                <label>
                    <input onblur="validarContrasena()" class="control" placeholder="Contraseña" type="password" name="Contraseña" id="contraseña">
                    <span class="mensajeError"></span>
                </label>
                </label>
                <label>
                    <input onblur="validarCheckBox()" class="control" type="checkbox" name="" id="check">Acepto términos
                    y
                    condiciones
                </label>
                <label class="cajaboton">
                    <button class="boton" id="enviar" type="submit">Enviar</button>
                </label>
            </form>
        </section>
    </div>
</body>
<script src="Validaciones/validacionMiembro.js"></script>

</html>