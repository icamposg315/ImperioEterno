drop database if exists libro;
create database if not exists libro;
use libro;

CREATE TABLE `administradores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `administradores` (`id`, `email`, `nombre`, `password`) VALUES
(1, 'Daniel@hotmail.com', 'dani', '123456Dani.'),
(2, 'Ismael@hotmail.com', 'isma', '123456Isma.');

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nombre` varchar(25) DEFAULT NULL,
  `apellidos` varchar(45) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `libro_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

DELIMITER $$
CREATE TRIGGER `respaldo_cliente_AI` AFTER INSERT ON `cliente` FOR EACH ROW begin 
	insert respaldo_cliente (id, new_nombre, new_apellidos, new_email, tipo_operacion, fecha_modificacion, usuario) 
    values (new.id, new.nombre, new.apellidos, new.email, 'inserción', now(), user());
end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `respaldo_cliente_BD` BEFORE DELETE ON `cliente` FOR EACH ROW begin 
	insert respaldo_cliente (id, old_nombre, old_apellidos, old_email, tipo_operacion, fecha_modificacion, usuario) 
    values (old.id, old.nombre, old.apellidos, old.email, 'borrar', now(), user());
end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `respaldo_cliente_BU` BEFORE UPDATE ON `cliente` FOR EACH ROW begin 
	insert respaldo_cliente (id, old_nombre, new_nombre, old_apellidos, new_apellidos, old_email, new_email, tipo_operacion, fecha_modificacion, usuario) 
    values (new.id, old.nombre, new.nombre, old.apellidos, new.apellidos, old.email, new.email, 'modificacion', now(), user());
end
$$
DELIMITER ;

CREATE TABLE `cliente_has_comentario` (
  `cliente_id` int(11) DEFAULT NULL,
  `comentario_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `cliente_has_gotas_de_escritura` (
  `cliente_id` int(11) DEFAULT NULL,
  `gotas_de_escritura_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `cliente_has_libro` (
  `cliente_id` int(11) DEFAULT NULL,
  `libro_id` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `numero` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `cliente_has_personajes` (
  `cliente_id` int(11) DEFAULT NULL,
  `personajes_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `comentario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(25) DEFAULT NULL,
  `apellidos` varchar(45) DEFAULT NULL,
  `email` varchar(15) NOT NULL,
  `fecha` date DEFAULT NULL,
  `comentario` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `gotas_de_escritura` (
  `id` int(11) NOT NULL,
  `titulo` varchar(25) DEFAULT NULL,
  `texto` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

DELIMITER $$
CREATE TRIGGER `respaldo_gotas_AI` AFTER INSERT ON `gotas_de_escritura` FOR EACH ROW begin 
	insert respaldo_gotas (id, new_titulo, new_texto, tipo_operacion, fecha_modificacion, usuario) 
    values (new.id, new.titulo, new.texto, 'inserción', now(), user());
end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `respaldo_gotas_BD` BEFORE DELETE ON `gotas_de_escritura` FOR EACH ROW begin 
	insert respaldo_gotas (id, old_titulo, old_texto, tipo_operacion, fecha_modificacion, usuario) 
    values (old.id, old.titulo, old.texto, 'borrar', now(), user());
end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `respaldo_gotas_BU` BEFORE UPDATE ON `gotas_de_escritura` FOR EACH ROW begin 
	insert respaldo_gotas (id, old_titulo, new_titulo, old_texto, new_texto, tipo_operacion, fecha_modificacion, usuario) 
    values (new.id, old.titulo, new.titulo, old.texto, new.texto, 'modificacion', now(), user());
end
$$
DELIMITER ;

CREATE TABLE `libro` (
  `id` int(11) NOT NULL,
  `titulo` varchar(30) DEFAULT NULL,
  `autor` varchar(45) DEFAULT NULL,
  `sintesis` varchar(500) DEFAULT NULL,
  `paginas` int(11) DEFAULT NULL,
  `precio` decimal(2,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `personajes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(25) DEFAULT NULL,
  `texto` varchar(600) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DELIMITER $$
CREATE TRIGGER `personajes_AI` AFTER INSERT ON `personajes` FOR EACH ROW begin 
	insert respaldo_personajes (id, new_nombre, new_texto, tipo_operacion, fecha_modificacion, usuario) values (new.id,
    new.nombre, new.texto, 'insertar', now(), user());
end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `personajes_BD` BEFORE DELETE ON `personajes` FOR EACH ROW begin 
	insert respaldo_personajes (id, old_nombre, old_texto, tipo_operacion, fecha_modificacion, usuario) values (old.id,
    old.nombre, old.texto, 'delete', now(), user());
end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `personajes_BU` BEFORE UPDATE ON `personajes` FOR EACH ROW begin 
	insert respaldo_personajes (id, old_nombre, new_nombre, old_texto, new_texto, tipo_operacion, fecha_modificacion, usuario) values (new.id,
    old.nombre, new.nombre, old.texto, new.texto, 'modificacion', now(), user());
end
$$
DELIMITER ;

CREATE TABLE `respaldo_cliente` (
  `id` int(11) DEFAULT NULL,
  `old_nombre` varchar(20) DEFAULT NULL,
  `new_nombre` varchar(20) DEFAULT NULL,
  `old_apellidos` varchar(20) DEFAULT NULL,
  `new_apellidos` varchar(20) DEFAULT NULL,
  `old_email` varchar(20) DEFAULT NULL,
  `new_email` varchar(20) DEFAULT NULL,
  `tipo_operacion` varchar(15) DEFAULT NULL,
  `fecha_modificacion` datetime DEFAULT NULL,
  `usuario` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `respaldo_gotas` (
  `id` int(11) DEFAULT NULL,
  `old_titulo` varchar(15) DEFAULT NULL,
  `new_titulo` varchar(15) DEFAULT NULL,
  `old_texto` varchar(800) DEFAULT NULL,
  `new_texto` varchar(800) DEFAULT NULL,
  `tipo_operacion` varchar(15) DEFAULT NULL,
  `fecha_modificacion` datetime DEFAULT NULL,
  `usuario` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `respaldo_personajes` (
  `id` int(11) DEFAULT NULL,
  `old_nombre` varchar(25) DEFAULT NULL,
  `new_nombre` varchar(25) DEFAULT NULL,
  `old_texto` varchar(500) DEFAULT NULL,
  `new_texto` varchar(500) DEFAULT NULL,
  `tipo_operacion` varchar(15) DEFAULT NULL,
  `fecha_modificacion` datetime DEFAULT NULL,
  `usuario` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `libro_id` (`libro_id`);

ALTER TABLE `cliente_has_comentario`
  ADD KEY `cliente_id` (`cliente_id`),
  ADD KEY `comentario_id` (`comentario_id`);

ALTER TABLE `cliente_has_gotas_de_escritura`
  ADD KEY `cliente_id` (`cliente_id`),
  ADD KEY `gotas_de_escritura_id` (`gotas_de_escritura_id`);

ALTER TABLE `cliente_has_libro`
  ADD KEY `cliente_id` (`cliente_id`),
  ADD KEY `libro_id` (`libro_id`);

ALTER TABLE `cliente_has_personajes`
  ADD KEY `cliente_id` (`cliente_id`),
  ADD KEY `personajes_id` (`personajes_id`);

ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `gotas_de_escritura`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `libro`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `personajes`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `administradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

ALTER TABLE `comentario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `gotas_de_escritura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

ALTER TABLE `libro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `personajes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`libro_id`) REFERENCES `libro` (`id`);

ALTER TABLE `cliente_has_comentario`
  ADD CONSTRAINT `cliente_has_comentario_ibfk_1` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`),
  ADD CONSTRAINT `cliente_has_comentario_ibfk_2` FOREIGN KEY (`comentario_id`) REFERENCES `comentario` (`id`);

ALTER TABLE `cliente_has_gotas_de_escritura`
  ADD CONSTRAINT `cliente_has_gotas_de_escritura_ibfk_1` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`),
  ADD CONSTRAINT `cliente_has_gotas_de_escritura_ibfk_2` FOREIGN KEY (`gotas_de_escritura_id`) REFERENCES `gotas_de_escritura` (`id`);

ALTER TABLE `cliente_has_libro`
  ADD CONSTRAINT `cliente_has_libro_ibfk_1` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`),
  ADD CONSTRAINT `cliente_has_libro_ibfk_2` FOREIGN KEY (`libro_id`) REFERENCES `libro` (`id`);

ALTER TABLE `cliente_has_personajes`
  ADD CONSTRAINT `cliente_has_personajes_ibfk_1` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`),
  ADD CONSTRAINT `cliente_has_personajes_ibfk_2` FOREIGN KEY (`personajes_id`) REFERENCES `personajes` (`id`);

INSERT INTO `gotas_de_escritura` (`id`, `titulo`, `texto`) VALUES
(1, 'Púrpura', 'El viento ha barrido las pocas nubes con las que había amanecido el día, dejando un cielo raso de un azul intenso. Augusto lo observa al pie de las escalinatas del senado, frente al templo de Venus. Ha convocado a los prohombres de Roma para debatir sobre el incierto futuro que se cierne sobre ellos. La luz blanca de la mañana crea reflejos sobre su toga púrpura. Los druidas son los únicos conocedores de la fórmula para obtener este tono imperial, que solo el César puede vestir y con el que está forjada su armadura. Usan como base el tinte púrpura común obtenido de un molusco llamado murex brandarix, muy abundante en la costa mediterránea.\n\nUna bandada de palomas atraviesa el azul raso, llevándose consigo los pensamientos del emperador hacía Óscar, el joven periodista que Lucius le presentó un par de días antes y por el que ha reunido al cónclave. Augusto vio inteligencia y astucia en la'),
(2, 'Rojo', 'Óscar no puede evitar que su mirada se pierda por los cientos de miles de reflejos que la armadura de Lucius crea sobre la arena de entrenamiento, da la sensación de que esté bailando sobre ascuas ardientes. Cuando gira, las tiras de rinion que cuelgan de su cintura forman un círculo mortal a su alrededor. Óscar se siente hipnotizado por el color escarlata de la armadura. Igual que hacen las ondulantes llamas del fuego, los movimientos de Lucius consiguen embaucar su alma. Le habían explicado cómo obtienen aquel color escarlata, que además de usar en las armaduras de los generales utilizan en sus capas o en la telas para confeccionar ricos vestidos de gala. El secreto se halla en el coccinus, así llaman al tinte, lo consiguen de un parásito llamado quermes, una especie de cochinilla que habita en los robles, la coscoja o el quercus. A Óscar le parece increíble que de algo tan pequeño y común pueda sacarse algo tan puro. El ruido de las campanas le saca de sus pensamientos, también detiene el entrenamiento de Lucius. Alguien aguarda ante las puertas del palacio familiar'),
(3, 'Blanco', 'La túnica de lana le cubre las piernas hasta las rodillas y deja libre sus brazos, que comienzan a broncearse en los primeros días de verano. No están acampados muy lejos de Equs Alba, en una pradera donde la hierba empieza a deshacerse de los tonos verdes de la primavera. Las tiendas son de un tono más oscuro que su túnica legionaria, están fabricadas con piel curtida de cabra que las convierte en un refugio impermeable y cálido para las húmedas noches de invierno. Todos los nuevos legionarios visten los mismos colores de lana natural, el primer paso para conseguir la ansiada armadura. Óscar empuña con fuerza su espada de entrenamiento, un gladio de madera con la punta afilada. Hoy toca luchar contra un hermano. Entra en la arena con los pies descalzos, siente su frescor entre los dedos y en la planta. Los músculos están en tensión dispuestos para el combate, observa a su rival, presiona el talón contra el suelo y se lanza al ataque'),
(4, 'Azules', 'La senda que conduce a la playa está poblada por los primeros brotes de vida de una primavera tardía. Óscar se acerca despacio a Vivia y se sienta a su lado, frente al mar. Ninguno de los dos dice nada, solo entrelazan sus dedos y se observan en silencio. Óscar siempre se siente cautivado ante los ojos azules de ella. Le cuesta creer que en el pasado, en la antigua Roma, aquel color estuviera tan mal visto. Recuerda las palabras que le dijo Vivia. -De haber nacido en aquella época, habría sido repudiada por el color de mis ojos.- Un color que era sinónimo de lo salvaje, de los pictos del norte, de las hordas germanas, de los celtas, pero que lo envolvía absolutamente todo, desde los cielos hasta los mares, excepto aquel reducto que era el imperio romano. Ni siquiera le dieron un nombre y eran muy pocos los que lo utilizaban, solo algunos soldados destinados en las campañas de norte. Esos tiempos han pasado, hoy obtienen el color como lo hacían los antiguos salvajes de plantas como el glasto, autóctona en el norte de Europa, o del índigo, traída de las tierras de Oriente. Óscar observa el mar y su inmensidad azul, solo comparable a los ojos de Vivia. Siente paz, con una pincelada de algo salvaje'),
(5, 'Trajano', 'Varios druidas consultan viejos códices en las logias de las dos bibliotecas que franquean el foro de Trajano, están protegidos bajo la sombra de la columna que se yergue en medio de la plaza rectangular. Sin duda, aquel es el lugar favorito de Óscar en toda Roma. Siempre que está en la ciudad busca un momento para poder visitarlo. Su mirada se pierde en las decenas de escenas que recorren la superficie del monumento. Cuando consigue concentrarse lo suficiente, las figuras de piedra parecen cobrar vida sobre un pergamino enrollado en su fuste. Cuando su mirada se detiene sobre uno de los relieves que representan al conquistador de Dacia, se pregunta si realmente tendría ese aspecto; un hombre de rostro recio, con porte imperial y mirada inquisitiva. Árboles, piedras, montañas, hombres, mujeres y niños, todos representan momentos de batallas, construcciones de campamentos y marchas infinitas. Le apasionaba aquel emperador. Óscar deja de dar vueltas alrededor de la columna para acercarse a la pequeña puerta que da acceso a la escalera interior. Antes de poner el pie sobre el primer peldaño, se detiene para mostrar su respeto ante los restos de Trajano y de su concubina Plotina que descansan bajo el pedestal. Un viento cálido sopla sobre las calles de Roma. Ante él se muestra la capital de un imperio eterno, teñida por la luz rojiza de un atardecer de verano');


INSERT INTO `libro` (`id`, `titulo`, `autor`, `sintesis`, `paginas`, `precio`) VALUES
(1, 'Un Imperio Eterno', 'Daniel Correa Escribano', 'Corren los primeros meses del año 2015. Vivimos en un mundo en el que el imperio romano no se ha desintegrado del todo. Su cultura, su ciudadanía y su heroísmo, siguen vivas en tres islas del mediterráneo y en su capital. Para una parte de la humanidad, tan solo son un reducto del pasado, un pueblo que vive a espaldas del resto del mundo, presuntamente ajenos a lo que ocurre a su alrededor. Otros muchos, entre los que se encuentra nuestro protagonista, Oscar López, un periodista del barrio de Ca', 385, '16'),
(2, 'Un Imperio Eterno', 'Daniel Correa Escribano', 'Corren los primeros meses del año 2015. Vivimos en un mundo en el que el imperio romano no se ha desintegrado del todo. Su cultura, su ciudadanía y su heroísmo, siguen vivas en tres islas del mediterráneo y en su capital. Para una parte de la humanidad, tan solo son un reducto del pasado, un pueblo que vive a espaldas del resto del mundo, presuntamente ajenos a lo que ocurre a su alrededor. Otros muchos, entre los que se encuentra nuestro protagonista, Oscar López, un periodista del barrio de Ca', 385, '15');

INSERT INTO `personajes` (`id`, `nombre`, `texto`) VALUES
(1, 'Oscar', 'Óscar. Es un periodista de 32 años criado en el madrileño barrio de Carabanchel, de aspecto algo aniñado, sus ojos marrones inspiran cierta tristeza. Vive atormentado por la reciente muerte de su madre. Esta obsesionado con la búsqueda de un asesino en serie que opera en España, dejando de lado a su mujer, a su padre y hermano. Una mañana alguien deja una invitación para aquella misma noche en una habitación de un uno de los hostales de la Gran Vía madrileña, como firma había un sello de un caballo en tinta roja. Óscar acude a la cita sin saber que será el inicio de un viaje que le cambiará la'),
(2, 'Lucius', 'Lucius. Es un legionario y ciudadano romano, que cumple su misión para con Roma de cazador de arsar. Se mueve como una sombra en la sociedad, acusado de ser un asesino en serie, cuando en realizad caza arsar, una raza oscura camuflada entre los humanos. En apariencia tiene unos 40 años aunque ha vivido mucho más. Su cuerpo esta musculado y cubierto por tatuajes que simbolizan las criaturas cazadas y su matrimonio con Gnaea.'),
(3, 'Vivia', 'Vivía. Es la hermana menor de Lucius a penas aparenta 20 años aún así es letal. También legionaria y cazadora. Su cuerpo es el típico de una romana, Atlético y fornido por el entrenamiento. Una larga melena rubia, unos profundos ojos azules y los primeros tatuajes, complementan su aspecto. Un romano solo tiene un amor en la vida y el de Vivía será Óscar.'),
(4, 'Gnaea', 'Gnea. Es la esposa de Lucius. Su único y eterno amor. Es una curtida legionaria de piel morena, bronceada por el sol, melena morena y ojos azul oscuro. Su cuerpo tatuado muestra el símbolo de su matrimonio con Lucius, un hilo que recorre su muñeca y su dedo anular, además de las runas que simbolizan a las criaturas oscuras que pasó por el filo de su gladio.');

INSERT INTO `respaldo_personajes` (`id`, `old_nombre`, `new_nombre`, `old_texto`, `new_texto`, `tipo_operacion`, `fecha_modificacion`, `usuario`) VALUES
(5, NULL, 'amarillo', NULL, 'hola que tal', 'insertar', '2023-04-25 17:17:47', 'root@localhost'),
(5, 'amarillo', 'azul', 'hola que tal', 'hola que tal', 'modificacion', '2023-04-25 17:55:12', 'root@localhost'),
(5, 'azul', NULL, 'hola que tal', NULL, 'delete', '2023-04-25 17:57:49', 'root@localhost');

INSERT INTO `respaldo_gotas` (`id`, `old_titulo`, `new_titulo`, `old_texto`, `new_texto`, `tipo_operacion`, `fecha_modificacion`, `usuario`) VALUES
(6, NULL, 'prueba', NULL, 'txt prueba', 'inserción', '2023-04-29 09:23:51', 'root@localhost'),
(6, 'prueba', 'prueba2', 'txt prueba', 'txt prueba', 'modificacion', '2023-04-29 09:25:09', 'root@localhost'),
(6, 'prueba2', NULL, 'txt prueba', NULL, 'borrar', '2023-04-29 09:26:05', 'root@localhost'),
(7, NULL, 'prueba', NULL, 'txt prueba', 'inserción', '2023-05-01 09:45:04', 'root@localhost'),
(7, 'prueba', 'prueba3', 'txt prueba', 'txt prueba', 'modificacion', '2023-05-01 09:47:16', 'root@localhost'),
(7, 'prueba3', NULL, 'txt prueba', NULL, 'borrar', '2023-05-01 09:47:32', 'root@localhost');

INSERT INTO `respaldo_cliente` (`id`, `old_nombre`, `new_nombre`, `old_apellidos`, `new_apellidos`, `old_email`, `new_email`, `tipo_operacion`, `fecha_modificacion`, `usuario`) VALUES
(21, NULL, 'oi', NULL, 'correa', NULL, 'daniel@gmail.com', 'inserción', '2023-04-26 18:09:31', 'root@localhost'),
(4, 'eustaquio', 'oliverio', 'Ibañez Lopez', 'Ibañez Lopez', 'enrique@gmail.com', 'enrique@gmail.com', 'modificacion', '2023-04-26 19:57:46', 'root@localhost'),
(4, 'oliverio', NULL, 'Ibañez Lopez', NULL, 'enrique@gmail.com', NULL, 'borrar', '2023-04-26 20:00:54', 'root@localhost');

COMMIT;

