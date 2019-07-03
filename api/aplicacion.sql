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

-- creacion de la funcion de validar usuario

CREATE DEFINER=`root`@`localhost` FUNCTION `validar_usuario_new`(
p_usuario varchar(50),p_nombre varchar(50),
p_apellido varchar(50),p_clave varchar(50)
) RETURNS int(11)
BEGIN
	declare
	existe int(11);
    select count(usuario) into existe from tb_usuarios
    where usuario=p_usuario;
    if existe < 1 then
		insert into tb_usuarios (usuario,nombre,apellido,clave,fecha_gra,ultimo_usuario)
        values (p_usuario,p_nombre,p_apellido,p_clave,sysdate(),user());
        return 1;
    else
		return 0;
    end if;
END