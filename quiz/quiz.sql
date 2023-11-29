create database quiz;

use quiz;

create table if not exists questoes
(
    id int primary key auto_increment,
nome varchar (120),
questao1 char (1)
);

select * from questoes;