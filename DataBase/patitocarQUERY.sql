USE sql10422667;

create table usuario(
ci varchar(10) primary key,
nombre varchar(30) not null,
apellidos varchar(30) not null,
telefofo varchar(10) not null,
direccion varchar(40) not null,
email varchar(40) not null unique,
password varchar(256) not null,
rol varchar(8) default "user"
)engine = innodb;



alter table usuario modify password varchar(256) not null;

drop table usuario;

SELECT * from usuario;

SELECT * FROM usuario WHERE email = 'a@e';

truncate table usuario;

drop database inscripcion;

CREATE USER
