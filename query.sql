CREATE DATABASE DB_HCJESSICA;
use db_hcjessica;
CREATE SCHEMA MarcacionAct;
CREATE TABLE MarcacionAct.CategoriaActividad(
id_CategoriaActividad int not null
auto_increment primary key,
Descripcion varchar(100) not null,
id_Estado int not null,
FechaRegistro datetime not null
);

INSERT INTO MarcacionAct.CategoriaActividad (Descripcion, id_Estado, FechaRegistro) VALUES ("FREELANCE", 1, "2024-01-06 17:39:00");
INSERT INTO MarcacionAct.CategoriaActividad (Descripcion, id_Estado, FechaRegistro) VALUES ("ESTUDIO", 1, "2024-01-06 17:39:00");
INSERT INTO MarcacionAct.CategoriaActividad (Descripcion, id_Estado, FechaRegistro) VALUES ("LECTURA", 1, "2024-01-06 17:39:00");
INSERT INTO MarcacionAct.CategoriaActividad (Descripcion, id_Estado, FechaRegistro) VALUES ("INGLÉS", 1, "2024-01-06 17:39:00");

SELECT * FROM MarcacionAct.CategoriaActividad;

CREATE TABLE MarcacionAct.MarcacionActividad(
id_MarcacionActividad int not null
auto_increment primary key,
id_CategoriaActividad int not null,
foreign key (id_CategoriaActividad) references MarcacionAct.CategoriaActividad (id_CategoriaActividad),
FechaMarcacion date not null,
Descripcion varchar(1000) null,
HoraInicio varchar(10) not null,
HoraTermino varchar(10) null,
id_Estado int not null,
FechaRegistro datetime not null
);