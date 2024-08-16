create database GENESFLIX;

create table Usuario (
    Email varchar(100) not null PRIMARY KEY,
    Nome_de_Usuario  varchar(30) not null,
    Senha varchar(50) not null,
    cod_usuario int not null

);
/*create table Filmes(
    idFilmes int not null auto_increment,
    Nota varchar(2) not null,
    Nome_de_filme varchar(100)  not null,
    Data_de_Lancamento  
)*/  