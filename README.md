# LoginSimplePHP
Login simple con php


create database bdlogin
use bdlogin

create table usuario(
id  int primary key NOT NULL AUTO_INCREMENT,
nombre Varchar(50),
correo Varchar(50),
contraseña Varchar(50)
)

insert into usuario values(null,"andy","andy@gmail.com","123456");
insert into usuario values(null,"alex","alex@gmail.com","123");
-----------------------------------------------------
select * from usuario where correo ='alex@gmail.com' and contraseña ='123';
