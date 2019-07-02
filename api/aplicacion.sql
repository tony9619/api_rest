use eshare;

create table tb_usuarios (
 id_usuario int primary key auto_increment,
 usuario varchar(15),
 nombre varchar(50),
 apellido varchar(50),
 clave varchar(100),
 fecha_gra date,
 img blob,
 ultimo_usuario varchar(15)
);

insert into tb_usuarios (usuario,nombre,apellido,clave,fecha_gra,ultimo_usuario)
values 
('gmaldonado','Guillermo','Maldonado','gmaldonado2019$',
STR_TO_DATE(sysdate(), '%Y-%m-%d'),user());

insert into tb_usuarios (usuario,nombre,apellido,clave,fecha_gra,ultimo_usuario)
values ('lgarcia','Lorena','Garcia','lgarcia2019$',
STR_TO_DATE(sysdate(), '%Y-%m-%d'),user());

insert into tb_usuarios (usuario,nombre,apellido,clave,fecha_gra,ultimo_usuario)
values ('jargueta','Jose','Argueta','jargueta2019$',
STR_TO_DATE(sysdate(), '%Y-%m-%d'),user());

insert into tb_usuarios (usuario,nombre,apellido,clave,fecha_gra,ultimo_usuario)
values ('tbolanos','Teresa','Bolaños','tbolanos2019$',
STR_TO_DATE(sysdate(), '%Y-%m-%d'),user());

insert into tb_usuarios (usuario,nombre,apellido,clave,fecha_gra,ultimo_usuario)
values ('malvarado','Milagro','Alvardo','malvarado2019$',
STR_TO_DATE(sysdate(), '%Y-%m-%d'),user());
