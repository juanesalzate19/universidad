create database universidad;
use universidad;

CREATE TABLE alumno  (
documento_est int(12) NOT NULL PRIMARY KEY ,
nombre_est varchar(30) NOT NULL,
telefono_est varchar(15)  NOT NULL,
direccion_est varchar(20)  NOT NULL,
correo_est varchar(15)  NOT NULL,
carrera varchar(50)  NOT NULL,
semestre varchar (20),
estado_est varchar(50),
contraseña varchar (20));
select * from alumno;

CREATE TABLE facultad (
  codigo_facultad int(11) NOT NULL  PRIMARY KEY,
  nombre varchar(100) );
  INSERT INTO facultad( codigo_facultad,nombre)values(1,"ingenieria"),(2,"diseño"),(3,"administracion");
  select * from facultad;


CREATE TABLE carrera (
  codigo_carrera int(11)  PRIMARY KEY auto_increment,
  nombre_carrera varchar(50) NOT NULL,
  codigo_facultad int(11), FOREIGN KEY (codigo_facultad) REFERENCES  facultad(codigo_facultad)) ;
select *from carrera;
 INSERT INTO carrera(codigo_carrera, nombre_carrera, codigo_facultad)values
 (null,"Ingeniería en Sistemas",1),
(null,"Ingeniería en mecatronica",1),
 (null,"diseño grafico",2),
  (null,"licenciatura en diseño",2),
 (null,"Administración en Recursos Humanos",3),
  (null,"Administración en Salud Ocupacional",3);
 
 CREATE TABLE materias(
 id_materia int(11) primary key auto_increment,
 nombre varchar(100),
 semestre varchar(100),
  codigo_carrera int(11),FOREIGN KEY (codigo_carrera) REFERENCES carrera (codigo_carrera));
select *from materias;
 INSERT INTO  materias(id_materia,nombre,semestre,codigo_carrera)values
 
 (null,"Algebra",1,1),
 (null,"Algoritmos y complejidad",1,1),
 (null,"Arquitectura de computadores",2,1),
 (null,"Arquitectura y diseño de software",2,1),
 (null,"Ecuaciones diferenciales",1,2),
 (null,"Fisica de ondas",1,2),
 (null,"Estadisticas inferencial",2,2),
 (null,"Circuitos radioelectricos y señales",2,2),
 (null,"Produccion multimedia",1,3),
 (null,"Produccion grafica",1,3),
 (null,"Diseño fotografico",2,3),
 (null,"Mercadotecnia",2,3),
 (null,"Historia del Arte",1,4),
 (null,"Estudio de la Imagen",1,4),
 (null,"Redacción y Composición",2,4),
 (null,"Tipografía",2,4),
 (null,"Principios y Perspectivas de la Administración",1,5),
 (null,"Matemáticas para los Negocios",1,5),
 (null,"Organización y Estructuras Organizacionales",2,5),
 (null,"Comportamiento Organizacional",2,5),
 (null,"Legislación laboral",1,6),
 (null,"Seguridad y salud en el trabajo",1,6),
 (null,"Factores de riesgo",2,6),
 (null,"Salud ocupacional",2,6);

 select * from materias;


CREATE TABLE administracion (
  codigo_admi int(1) PRIMARY KEY  auto_increment,
  documento int(11),
  nombre varchar(30) NOT NULL,
  telefono varchar(20)  NOT NULL,
  correo varchar(20) NOT NULL,
  id_materia int(11) NOT NULL,
  cargo varchar(50),
  contraseña varchar(20),
  FOREIGN KEY (id_materia) REFERENCES  materias (id_materia));

 select *  from administracion;
 CREATE TABLE calificaciones (
  codigo_cali int(11) NOT NULL  PRIMARY KEY auto_increment,
  documento_est int(11),
  nombre varchar (50),
  carrera varchar (100),
  semestre varchar(5)  NOT NULL,
  id_materia int(11),
  nota1 double,
  nota2 double,
  promedio double NOT NULL,
  FOREIGN KEY (id_materia) REFERENCES  materias (id_materia),
  FOREIGN KEY (documento_est) REFERENCES  alumno (documento_est));
select * from calificaciones;

