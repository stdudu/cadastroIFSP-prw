drop database if exists IFSP;
create database if not exists IFSP;
use IFSP;

-- CRIANDO AS TABELAS DO BD
-- criando tabela cidade
create table cidade(
    id int primary key auto_increment,
    nome varchar(50),
    estado varchar(2)
);
-- criando tabela cliente
create table cliente(
    id int primary key auto_increment,
    nome varchar(50),
    email varchar(50),
    senha varchar(10),
    ativo bool,
    id_cidade int,
    constraint fk_clientecidade foreign key(id_cidade) references cidade(id)
);
-- TABELAS CRIADAS