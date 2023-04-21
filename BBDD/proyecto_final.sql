create database if not exists libro;
use libro;
create table if not exists cliente (
id int not null auto_increment primary key,
nombre varchar(25),
apellidos varchar(45),
email varchar (15) not null,
libro_id int
);

insert into cliente values (NULL, "Rodrigo", "Ibañez Lopez", "rodrigo@gmail.com",1);
insert into cliente values (NULL, "Sara", "Ibañez Lopez", "sarao@gmail.com",1);
insert into cliente values (NULL, "Pedro", "Ibañez Lopez", "pedro@gmail.com",1);
insert into cliente values (NULL, "Enrique", "Ibañez Lopez", "enrique@gmail.com",1);
insert into cliente values (NULL, "Luis", "Ibañez Lopez", "luis@gmail.com",1);
alter table cliente modify email varchar (50);


create table if not exists libro (
id int not null auto_increment primary key,
titulo varchar(30),
autor varchar(45),
sintesis varchar (500),
paginas int,
precio decimal(2)
);

insert into libro values (null, "Un Impreio Eterno", "Daniel Correa Escribano", "Corren los primeros meses del año 2015. Vivimos en un mundo en el que el imperio romano no se ha desintegrado del todo. Su cultura, su ciudadanía y su heroísmo, siguen vivas en tres islas del mediterráneo y en su capital. Para una parte de la humanidad, tan solo son un reducto del pasado, un pueblo que vive a espaldas del resto del mundo, presuntamente ajenos a lo que ocurre a su alrededor. Otros muchos, entre los que se encuentra nuestro protagonista, Oscar López, un periodista del barrio de Carabanchel, viven obsesionados con los secretos que se ocultan en Roma. Las circunstancias llevaran al periodista a un viaje donde descubría que se oculta tras las sombras",385, 15);

create table if not exists comentario (
id int not null auto_increment primary key,
nombre varchar(25),
apellidos varchar(45),
email varchar (15) not null,
fecha date,
comentario varchar(500)
);

insert into comentario values (null, "Rodrigo", "Ibañez Lopez", "rodrigo@gmail.com", "2022-03-23", "un gran libro");
insert into comentario values (null, "Manuel", "Ibañez Lopez", "manuel@gmail.com", "2022-03-12", "Me encantó");
insert into comentario values (null, "Sara", "Ibañez Lopez", "Sara@gmail.com", "2022-05-23", "Excelente");
insert into comentario values (null, "Pedro", "Ibañez Lopez", "rodrigo@gmail.com", "2022-01-23", "un libro brillante");

create table if not exists gotas_de_escritura (
id int not null auto_increment primary key,
titulo varchar(25),
texto varchar(900)
);

insert into gotas_de_escritura values (null, "Púrpura", "El viento ha barrido las pocas nubes con las que había amanecido el día, dejando un cielo raso de un azul intenso. Augusto lo observa al pie de las escalinatas del senado, frente al templo de Venus. Ha convocado a los prohombres de Roma para debatir sobre el incierto futuro que se cierne sobre ellos. La luz blanca de la mañana crea reflejos sobre su toga púrpura. Los druidas son los únicos conocedores de la fórmula para obtener este tono imperial, que solo el César puede vestir y con el que está forjada su armadura. Usan como base el tinte púrpura común obtenido de un molusco llamado murex brandarix, muy abundante en la costa mediterránea.

Una bandada de palomas atraviesa el azul raso, llevándose consigo los pensamientos del emperador hacía Óscar, el joven periodista que Lucius le presentó un par de días antes y por el que ha reunido al cónclave. Augusto vio inteligencia y astucia en la mirada del joven, va a necesitar de ambas para convertirse en legionario, ese es el plan, de ello depende todo.");
insert into gotas_de_escritura values (null, "Rojo", "Óscar no puede evitar que su mirada se pierda por los cientos de miles de reflejos que la armadura de Lucius crea sobre la arena de entrenamiento, da la sensación de que esté bailando sobre ascuas ardientes. Cuando gira, las tiras de rinion que cuelgan de su cintura forman un círculo mortal a su alrededor. Óscar se siente hipnotizado por el color escarlata de la armadura. Igual que hacen las ondulantes llamas del fuego, los movimientos de Lucius consiguen embaucar su alma. Le habían explicado cómo obtienen aquel color escarlata, que además de usar en las armaduras de los generales utilizan en sus capas o en la telas para confeccionar ricos vestidos de gala. El secreto se halla en el coccinus, así llaman al tinte, lo consiguen de un parásito llamado quermes, una especie de cochinilla que habita en los robles, la coscoja o el quercus. A Óscar le parece increíble que de algo tan pequeño y común pueda sacarse algo tan puro. El ruido de las campanas le saca de sus pensamientos, también detiene el entrenamiento de Lucius. Alguien aguarda ante las puertas del palacio familiar");
insert into gotas_de_escritura values (null, "Blanco", "La túnica de lana le cubre las piernas hasta las rodillas y deja libre sus brazos, que comienzan a broncearse en los primeros días de verano. No están acampados muy lejos de Equs Alba, en una pradera donde la hierba empieza a deshacerse de los tonos verdes de la primavera. Las tiendas son de un tono más oscuro que su túnica legionaria, están fabricadas con piel curtida de cabra que las convierte en un refugio impermeable y cálido para las húmedas noches de invierno. Todos los nuevos legionarios visten los mismos colores de lana natural, el primer paso para conseguir la ansiada armadura. Óscar empuña con fuerza su espada de entrenamiento, un gladio de madera con la punta afilada. Hoy toca luchar contra un hermano. Entra en la arena con los pies descalzos, siente su frescor entre los dedos y en la planta. Los músculos están en tensión dispuestos para el combate, observa a su rival, presiona el talón contra el suelo y se lanza al ataque");
insert into gotas_de_escritura values (null, "Azules", "La senda que conduce a la playa está poblada por los primeros brotes de vida de una primavera tardía. Óscar se acerca despacio a Vivia y se sienta a su lado, frente al mar. Ninguno de los dos dice nada, solo entrelazan sus dedos y se observan en silencio. Óscar siempre se siente cautivado ante los ojos azules de ella. Le cuesta creer que en el pasado, en la antigua Roma, aquel color estuviera tan mal visto. Recuerda las palabras que le dijo Vivia. -De haber nacido en aquella época, habría sido repudiada por el color de mis ojos.- Un color que era sinónimo de lo salvaje, de los pictos del norte, de las hordas germanas, de los celtas, pero que lo envolvía absolutamente todo, desde los cielos hasta los mares, excepto aquel reducto que era el imperio romano. Ni siquiera le dieron un nombre y eran muy pocos los que lo utilizaban, solo algunos soldados destinados en las campañas de norte. Esos tiempos han pasado, hoy obtienen el color como lo hacían los antiguos salvajes de plantas como el glasto, autóctona en el norte de Europa, o del índigo, traída de las tierras de Oriente. Óscar observa el mar y su inmensidad azul, solo comparable a los ojos de Vivia. Siente paz, con una pincelada de algo salvaje");
insert into gotas_de_escritura values (null, "Trajano", "Varios druidas consultan viejos códices en las logias de las dos bibliotecas que franquean el foro de Trajano, están protegidos bajo la sombra de la columna que se yergue en medio de la plaza rectangular. Sin duda, aquel es el lugar favorito de Óscar en toda Roma. Siempre que está en la ciudad busca un momento para poder visitarlo. Su mirada se pierde en las decenas de escenas que recorren la superficie del monumento. Cuando consigue concentrarse lo suficiente, las figuras de piedra parecen cobrar vida sobre un pergamino enrollado en su fuste. Cuando su mirada se detiene sobre uno de los relieves que representan al conquistador de Dacia, se pregunta si realmente tendría ese aspecto; un hombre de rostro recio, con porte imperial y mirada inquisitiva. Árboles, piedras, montañas, hombres, mujeres y niños, todos representan momentos de batallas, construcciones de campamentos y marchas infinitas. Le apasionaba aquel emperador. Óscar deja de dar vueltas alrededor de la columna para acercarse a la pequeña puerta que da acceso a la escalera interior. Antes de poner el pie sobre el primer peldaño, se detiene para mostrar su respeto ante los restos de Trajano y de su concubina Plotina que descansan bajo el pedestal. Un viento cálido sopla sobre las calles de Roma. Ante él se muestra la capital de un imperio eterno, teñida por la luz rojiza de un atardecer de verano");
alter table gotas_de_escritura modify texto varchar (2000);

create table if not exists personajes (
id int not null auto_increment primary key,
nombre varchar(25),
texto varchar(600)
);

insert into personajes values (null, "Oscar", "Óscar. Es un periodista de 32 años criado en el madrileño barrio de Carabanchel, de aspecto algo aniñado, sus ojos marrones inspiran cierta tristeza. Vive atormentado por la reciente muerte de su madre. Esta obsesionado con la búsqueda de un asesino en serie que opera en España, dejando de lado a su mujer, a su padre y hermano. Una mañana alguien deja una invitación para aquella misma noche en una habitación de un uno de los hostales de la Gran Vía madrileña, como firma había un sello de un caballo en tinta roja. Óscar acude a la cita sin saber que será el inicio de un viaje que le cambiará la vida para siempre.");

insert into personajes values (null, "Lucius", "Lucius. Es un legionario y ciudadano romano, que cumple su misión para con Roma de cazador de arsar. Se mueve como una sombra en la sociedad, acusado de ser un asesino en serie, cuando en realizad caza arsar, una raza oscura camuflada entre los humanos. En apariencia tiene unos 40 años aunque ha vivido mucho más. Su cuerpo esta musculado y cubierto por tatuajes que simbolizan las criaturas cazadas y su matrimonio con Gnaea.");
insert into personajes values (null, "Vivia", "Vivía. Es la hermana menor de Lucius a penas aparenta 20 años aún así es letal. También legionaria y cazadora. Su cuerpo es el típico de una romana, Atlético y fornido por el entrenamiento. Una larga melena rubia, unos profundos ojos azules y los primeros tatuajes, complementan su aspecto. Un romano solo tiene un amor en la vida y el de Vivía será Óscar.");
insert into personajes values (null, "Gnaea", "Gnea. Es la esposa de Lucius. Su único y eterno amor. Es una curtida legionaria de piel morena, bronceada por el sol, melena morena y ojos azul oscuro. Su cuerpo tatuado muestra el símbolo de su matrimonio con Lucius, un hilo que recorre su muñeca y su dedo anular, además de las runas que simbolizan a las criaturas oscuras que pasó por el filo de su gladio.");




create table if not exists cliente_has_libro (
cliente_id int,
libro_id int,
fecha date,
numero int,
CONSTRAINT FOREIGN KEY (cliente_id) REFERENCES cliente(id),
CONSTRAINT FOREIGN KEY (libro_id) REFERENCES libro(id)
);

create table if not exists cliente_has_gotas_de_escritura (
cliente_id int,
gotas_de_escritura_id int,

CONSTRAINT FOREIGN KEY (cliente_id) REFERENCES cliente(id),
CONSTRAINT FOREIGN KEY (gotas_de_escritura_id) REFERENCES gotas_de_escritura(id)
);

create table if not exists cliente_has_personajes (
cliente_id int,
personajes_id int,

CONSTRAINT FOREIGN KEY (cliente_id) REFERENCES cliente(id),
CONSTRAINT FOREIGN KEY (personajes_id) REFERENCES personajes(id)
);

create table if not exists cliente_has_comentario (
cliente_id int,
comentario_id int,

CONSTRAINT FOREIGN KEY (cliente_id) REFERENCES cliente(id),
CONSTRAINT FOREIGN KEY (comentario_id) REFERENCES comentario(id)
);