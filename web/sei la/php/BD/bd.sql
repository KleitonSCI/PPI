create database if not exists crud;
use crud;
create table if not exists usuario(id int primary key auto_increment not null ,nome varchar(40) not null,email varchar (40) not null);
