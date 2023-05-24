<?php

require_once("../Database.php");

$database = new Database();
$resultado = $database->getGotas(1);
$resultado2 = $database->getGotas(2);
$resultado3 = $database->getGotas(3);
$resultado4 = $database->getGotas(4);
$resultado5 = $database->getSintesis();
$personaje = $database->getPersonajes(1);
$personaje2 = $database->getPersonajes(2);
$personaje3 = $database->getPersonajes(3);
$personaje4 = $database->getPersonajes(4);


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>Un imperio eterno. Un viaje a las sombras</title>
    <!--Tipo de texto que se utilizará-->
    <meta charset="UTF-8">
    <!--Meta para que se adapte la pantalla a cualquier dispositivo-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Adapta el tamaño de la web a los diferentes dispositivos-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Palabras claves-->
    <meta name="keywords" content="regalo, libro, recomendación, comprar libro, Roma, aventura, fantasía, ficción,
    lectura, juego de tronos, el señor de los anillos, los pilares de la tierra, gladiadores, legiones, circos romanos">
    <!--Introducción del libro-->
    <meta name="description" content=" Un imperio eterno es una novela de ficción y aventura escrita por el autor español Daniel C.E., en la que se describen las aventuras de un joven periodista de Carabanchel,
 Oscar, tras descubrir que el imperio romano ha llegado hasta nuestros días. En la aventura le acompañan Lucius, Gnaea, Vidia">

    <link rel="icon" type="image/x-icon" href="cabeza.ico">
    <link rel="stylesheet" href="estilos/estilo.css">
    <script src="https://kit.fontawesome.com/e1ac92fa66.js" crossorigin="anonymous"></script>
</head>

<body class="cuerpo">

    <section class="menuprincipal">
        <!--Contenedor hijo1, para organizar la tienda, con enlace a la web. He copiado el enlace de tu web, buscandolo con el inspeccionar, si tienes otro, podemos acoplarlo-->
        <div id="tienda">
            <a href="https://www.bubok.es/libros/267125/Un-imperio-eterno-Un-viaje-a-las-sombras" target="_blank" class="carrito"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
        <!--Contenido hijo 2, lista desordenada para crear un nav-->
        <div class="contenido2">
            <nav id="menu">
                <ul class="lista1">
                    <button>
                        <li>
                            <!--Pendiente de poner un enlace a HOME, a la espera de si podemos dejar el NAV fijo para generarlo-->
                            <a class="flex1" href="#portada">HOME</a>
                        </li>
                    </button>
                    <button>
                        <li>
                            <!--Enlaces directos de cada apartado hacia su sección dentro de la web-->
                            <a class="flex2" href="#autor">AUTOR</a>
                        </li>
                    </button>
                    <button>
                        <li>
                            <a class="flex3" href="#sintesis">SINTESIS</a>
                        </li>
                    </button>
                    <button>
                        <li>
                            <a class="flex4" href="#gotasdeescritura">GOTAS DE ESCRITURA</a>
                        </li>
                    </button>
                    <button>
                        <li>
                            <a class="flex5" href="#personaje">PERSONAJES</a>
                        </li>
                    </button>
                    <button>
                        <li>
                            <a class="flex6" href="#contacto">CONTACTO</a>
                        </li>
                    </button>
                    <button id="logear">
                        <li>
                            <a class="flex7" id="log" href="login.php" target="_blank">
                                <p>LOGIN</p>
                            </a>
                        </li>
                    </button>

                </ul>
            </nav>
        </div>
    </section>

    <main>
        <!--Reflejamos el título y las imagenes identificativas del libro-->
        <section id="portada">
            <div class="zona1">
                <div id="titulo1">
                    <!--titulo uno, en un contenedor hijo para que se pueda maquetar-->
                    <h1>UN IMPERIO ETERNO</h1>
                </div>
                <div id="titulo2">
                    <!--titulo dos, en un contenedor hijo para que se pueda maquetar-->
                    <h2>UN VIAJE A LAS SOMBRAS</h2>
                </div>
                <div class="contenedorhijoimagen2">
                    <img id="imagen2" src="Portada/cabeza.png">
                </div>
            </div>
        </section>

        <section class="zona2" id="autor">
            <!--Seccion dos sobre la presentación del autor, que incluye un pequeño resume, un enlace directo del NAV-->
            <div id="imagenautor">
                <img src="Autor/daniel-correa-escribano.png">
            </div>

            <div>
                <div id="textoautor">
                    <h3>AUTOR</h3>
                    <h4>
                        <!--Resume y presentación del autor-->

                        <strong>Daniel Correa es un soñador de historias. Si echaras un vistazo a su
                            Currículum personal,
                            te
                            darías
                            cuenta
                            que estudió para ser delineante, aunque en realidad trabaja en un despacho de
                            gestoría,
                            ha
                            sido la vida quien le ha llevado por este camino. Comenzó a escribir ya hace unos
                            años,
                            en
                            realidad no sabe cuantos. Lo hizo a modo de terapia, le ayudaba a relajarse, a
                            expresarse y
                            a sacar de su mente todas las ideas que tenía. De este modo nació ¨Un imperio
                            eterno¨,
                            como
                            un mundo al que se evadía para sentirse tranquilo. Aprendió a escribir al mismo
                            tiempo
                            que
                            leía a sus autores preferidos. Al principio escribiendo relatos cortos, para que
                            poco a
                            poco
                            ir aumentado el número de líneas y de páginas. Sin duda, Daniel espera que el lector
                            disfrute con cada uno de los pensamientos, que ha conseguido plasmar en el papel,
                            después de
                            todo ese es el deseo de cualquier escritor."
                        </strong>
                    </h4>

                </div>

            </div>

        </section>

        <hr>
        </hr>
        <button class="inicio"><a href="#menu">HOME</a></button>

        <section class="zona3" id="sintesis">
            <!--Parte tres de la web, introducción al libro-->
            <div id="textosintesis">
                <!--Introduccion al libro-->
                <h3>SINTESIS</h3>
                <?php
                foreach ($resultado5 as $row) {
                    echo '<p>' . $row['sintesis'] . '</p>';
                }
                ?>

            </div>
        </section>

        <hr>
        </hr>
        <button class="inicio"><a href="#menu">HOME</a></button>

        <section class="zona4" id="gotasdeescritura">
            <!--Parte cuatro de la web, introducción a capitulos denominadas gotas de escrituras-->

            <!--Descripcion-->
            <div id="explicacion">
                <h3>GOTAS DE ESCRITURA</h3>

                <!--Explicación del contenido-->

                <h3>"Las gotas son pequeños relatos ilustrados relacionados con la trilogía de "Un imperio
                    eterno"."</h3>
            </div>
            <!--Capítulo 1-->
            <div class="chapter1">
                <div id="gota1">
                    <?php
                    foreach ($resultado as $row) {
                        echo '<p>' . $row['texto'] . '</p>';
                    }
                    ?>
                </div>
                <div id="imagenparagota1">
                    <img id="gotaimagen1" class="marco" src="Imagenes Gotas/Purpura.jpeg">
                </div>
            </div>


            <!--Capítulo 2-->
            <div class="chapter2">

                <div>
                    <img id="gotaimagen2" class="marco" src="Imagenes Gotas/Fuego.jpeg">
                </div>

                <div id="gota2">
                    <?php
                    foreach ($resultado2 as $row) {
                        echo '<p>' . $row['texto'] . '</p>';
                    }
                    ?>
                </div>

            </div>


            <!--Capítulo 3-->
            <div class="chapter3">
                <div id="gota3">
                    <?php
                    foreach ($resultado3 as $row) {
                        echo '<p>' . $row['texto'] . '</p>';
                    }
                    ?>
                </div>

                <div>
                    <img id="gotaimagen3" class="marco" src="Imagenes Gotas/Blanco.jpg">
                </div>
            </div>
            <!--Capítulo 4-->
            <div class="chapter4">

                <div>
                    <img id="gotaimagen4" class="marco" src="Imagenes Gotas/Torre.jpeg">
                </div>

                <div id="gota4">
                    <?php
                    foreach ($resultado4 as $row) {
                        echo '<p>' . $row['texto'] . '</p>';
                    }
                    ?>
                </div>
            </div>


        </section>

        <hr>
        </hr>
        <button class="inicio"><a href="#menu">HOME</a></button>

        <section class="zona5" id="personaje">

            <h3 id="txtpersonajes">PERSONAJES</h3>


            <div class="oscar">
                <div id="textooscar">
                    <?php
                    foreach ($personaje as $row) {
                        echo '<p>' . $row['texto'] . '</p>';
                    }
                    ?>
                </div>
                <div>
                    <img id="personajeimagen1" class="marco" src="Imagenes Personajes/Oscar.png">
                </div>
            </div>
            <div class="lucius">
                <div>
                    <img id="personajeimagen2" class="marco" src="Imagenes Personajes/Lucius.png">
                </div>
                <div id="textolucius">
                    <!--Segundo personaje, presentación-->
                    <?php
                    foreach ($personaje2 as $row) {
                        echo '<p>' . $row['texto'] . '</p>';
                    }
                    ?>

                </div>
            </div>

            </div>
            <div class="vivia">

                <div id="textovivia">
                    <?php
                    foreach ($personaje3 as $row) {
                        echo '<p>' . $row['texto'] . '</p>';
                    }
                    ?>
                </div>
                <div>
                    <img id="personajeimagen3" class="marco" src="Imagenes Personajes/Vivia.png">
                </div>

            </div>
            <div class="gnaea">
                <div>
                    <img id="personajeimagen4" class="marco" src="Imagenes Personajes/Gnaea.png">
                </div>
                <div id="textognaea">
                    <!--Cuarto personaje, presentación-->
                    <?php
                    foreach ($personaje4 as $row) {
                        echo '<p>' . $row['texto'] . '</p>';
                    }
                    ?>
                </div>
        </section>
        <hr>
        </hr>


        <section class="formulario" id="contacto">

            <form id="IDFormulario" action="../Administracion/Comentarios/save.php" method="POST">
                <h2>Queremos conocer tu opinión</h2>
                <label class="condiciones">
                    <input id="nombre" onblur="validarNombre()" name="nombre" placeholder="nombre" type="text" name="">
                    <span class="mensaje"></span>
                </label>
                <label class="condiciones">
                    <input id="apellido" onblur="validarApellido()" name="apellidos" placeholder="apellido" type="text" name="">
                    <span class="mensaje"></span>
                </label>
                <label class="condiciones">
                    <input id="email" onblur="validarEmail()" name="email" placeholder="email" type="email" name="">
                    <span class="mensaje"></span>
                </label>
                <label class="condiciones">¿Donde has conocido el libro?
                    <select id="seleccion" class="control" onblur="validarSeleccion()" nombre="">

                        <option read only>Elige una opción</option>
                        <option>Internet</option>
                        <option>Por un amigo o familiar</option>
                        <option>Televisión</option>
                        <option>Prensa escrita</option>
                        <option>Redes sociales</option>

                    </select>
                    <span class="mensaje"></span>
                </label>
                <label class="condiciones">¿Que te ha parecido la idea del autor?.

                    <textarea id="texto" name="texto" placeholder="Pon un comentario" rows="10" cols="60" name="" id="comentario"></textarea>
                    <span class="mensaje"></span>
                </label>
                <label class="condicionesEspecial">
                    <input id="check" onclick="validarCheckBox()" type="checkbox" name="">
                    <span class="mensaje">Acepto condiciones</span>
                    <div class="cajaboton">
                        <button type="submit" class="boton" id="enviar" onclick="validarCheckBox()">Enviar</button>
                    </div>
                </label>

                <a href="../LenguajesDeMarcas/miembros.php" target="_blank" class="enlaceSocio">
                    <h2>¡Conviertete en un amigo del imperio!</h2>
                </a>
            </form>

        </section>

    </main>
    <aside></aside>
    <footer class="pie"><i class="fa-solid fa-copyright"></i>
        <p>COPYRIGHT. Todos los derechos reservados</p>
        <a href="#menu" class="final">Volver a inicio</a>
    </footer>

</body>

<script src="Validaciones/validacionEstructura.js"></script>

</html>