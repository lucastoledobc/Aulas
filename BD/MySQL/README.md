# MySQL

Documentação: https://dev.mysql.com/doc/

## Comandos:

## Hello World
create database cadastro; → nomes em letras minúsculas

drop database cadastro; → apaga

create database if not exists cadastro
default character set utf8mb4
default collate utf8mb4_general_ci; →define como padrão

use cadastro; → entra na database

create table pessoas (
id int not null auto_increment,
nome varchar (30) NOT NULL,		→ campo obrigatório
nascimento date,
sexo enum(‘M’,’F’),		→ limita as opções 
peso decimal (5,2),		→ até 5 dígitos, 2 casas decimais
`altura` decimal (5,2),	→ crase p/ caso queria acento
nacionalidade varchar(20) default 'Brasil',
primary key (id)
) default charset = utf8mb4;

insert into pessoas (nome, nascimento, sexo, peso, altura, nacionalidade)
values ('Alfredo','2000-02-20','M','70.8','1.83','Brasil');
ou
insert into pessoas values
(default,'Alfredo','2000-02-20','M','70.8','1.83','Brasil'),
(default, 'Mariá','2000-02-20','F','70.8','1.83', default);

alter table pessoas rename to gafanhotos;
alter table gafanhotos add profissao varchar(10) after nome;
alter table gafanhotos modify profissao varchar(10) after nome;
alter table gafanhotos change profissao prof varchar(10);
alter table gafanhotos drop column profissao; 


## Tipos Primitivos:
varchar(x) → string
text → texto longos