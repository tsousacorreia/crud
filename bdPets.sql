-- apagar banco de dados
drop database dbPets;

-- criar banco de dados
create database dbPets;

-- acessar o banco de dados
use dbPets;

-- visualizar banco de dados
show databases;

-- criar tabelas no banco de dados
create table tbPets(
idPet int not null auto_increment,
nomePet varchar(100) not null,
racaPet varchar(20) not null,
corPet varchar(20),
idadePet int(3),
sexoPet char(1) default 'F' check(sexoPet in('F','M')),
registroPet int(10),
tutorPet varchar(100),
primary key(idPet)
);

-- visualizar tabelas
show tables;

-- visualizar estrutura das tabelas
desc tbPets;