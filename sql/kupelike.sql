create database kupelike;

use kupelike;

create table sagardotegi (
sagar_id integer unsigned auto_increment primary key,
nombre varchar(60),
latitud varchar(14),
longitud varchar(15),
direccion varchar(60),
foto varchar(100));

create table kupela (
kupela_id integer unsigned auto_increment primary key,
sagar_id integer unsigned,
nombre varchar(60),
numero integer unsigned,
descripcion varchar(600),
foto varchar(100));

create table votos (
kupela_id integer unsigned,
cliente_id integer unsigned,
fecha date,
primary key (kupela_id, cliente_id));

create table cliente (
cliente_id integer unsigned auto_increment primary key,
nombre varchar(60),
direccion varchar(100),
fecha_nacimiento date);


alter table kupela
add constraint fk_kupsag
foreign key (sagar_id)
references sagardotegi(sagar_id)
on delete cascade
on update cascade;

alter table votos
add constraint fk_votkup
foreign key (kupela_id)
references kupela(kupela_id)
on delete cascade
on update cascade;

alter table votos
add constraint fk_votkup2
foreign key (cliente_id)
references cliente(cliente_id)
on delete cascade
on update cascade;