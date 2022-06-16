-- es la linea del codigo que sirve para crear la base de datos y ponerle un nombre 
create database prueba; 
-- es la linea del codigo que sirve para usar la base de datos 
use prueba;
--es la linea del codigo que sirve para crear la tabla 
create table t_paises (id int auto_increment,
						nombre varchar(100),
                        primary key(id));
-- es la linea del codigo que sirve para añadir contenido a la tabla 
insert into t_paises (nombre) values ('MEXICO'),('BRASIL'),
								     ('INGLATERRA'),('URUGUAY'),
									 ('ARGENTINA'),('PANAMA'),
                                     ('BELGICA'),('CANADA');
