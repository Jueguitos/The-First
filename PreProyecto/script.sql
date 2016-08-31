drop database First;

create database First;

use First;

create table PERSONAJE(
experiencia int,
nivel int,
nickname varchar(30),
movmax int,
vida int,
PRIMARY KEY (nickname)
);

create table USUARIO(
id int,
pass varchar(30),
email varchar(30),
online tinyint,
refpersonaje varchar(30),
PRIMARY KEY (id),
FOREIGN KEY (refpersonaje) REFERENCES PERSONAJE(nickname)
);

create table CLASE(
nombre varchar(30),
descripcion varchar(30),
shortname varchar(2),
refpersonaje varchar(30),
PRIMARY KEY (nombre),
FOREIGN KEY (refpersonaje) REFERENCES PERSONAJE(nickname)
);

create table HABILIDADES(
tipo tinyint,
nombre varchar(30),
descripcion varchar(30),
formula varchar(30),
nmov int,
PRIMARY KEY (nombre)
);

create table ARBOLA(
tipo tinyint,
refclase varchar(30),
refhabilidades varchar(30),
id int AUTO_INCREMENT,
PRIMARY KEY (id),
FOREIGN KEY (refclase) REFERENCES CLASE(nombre),
FOREIGN KEY (refhabilidades) REFERENCES HABILIDADES(nombre)
);


create table COLA(
nombre varchar(30),
id int,
defatq tinyint,
refpersonaje varchar(30),
refhabilidades varchar(30),
PRIMARY KEY (id),
FOREIGN KEY (refpersonaje) REFERENCES PERSONAJE(nickname),
FOREIGN KEY (refhabilidades) REFERENCES HABILIDADES(nombre)
);

create table PASO(
id int,
mova varchar(30),
movd varchar(30),
numero int,
vidatq int,
viddef int,
inic varchar(30),
PRIMARY KEY(id)
);

create table ROUND(
id int,
numero int,
velatq int,
veldef int,
refpaso int,
PRIMARY KEY (id),
FOREIGN KEY (refpaso) REFERENCES PASO(id)
);

create table PELEA(
id int,
fecha datetime,
win tinyint,
refpersonaje varchar(30),
refround int,
PRIMARY KEY (id),
FOREIGN  KEY (refpersonaje) REFERENCES PERSONAJE(nickname),
FOREIGN KEY (refround) REFERENCES ROUND(id)
);
