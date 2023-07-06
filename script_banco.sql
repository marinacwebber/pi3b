create database imdaz;

create table if not exists aluno (
        matricula serial primary key,
        nome varchar(60) not null,
        cpf varchar(11),
        data_nascimento date not null,
        dormitorio varchar(10) not null,
        serie varchar(20) not null,
        data_entrada date not null,
        data_saida date
    );

create table if not exists funcionario (
        matricula serial primary key,
        nome varchar(60) not null,
        cpf varchar(11),
        data_nascimento date not null,
        funcao varchar(40) not null,
        salario decimal(10, 2) not null,
        data_admissao date not null,
        data_demissao date
    );

create table if not exists colaborador (
        matricula serial primary key,
        nome varchar(60) not null,
        cpf varchar(11),
        data_nascimento date not null,
        endereco varchar(300) not null
    );