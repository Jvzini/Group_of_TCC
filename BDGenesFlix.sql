create database GENESFLIX;

CREATE TABLE Usuario (
  E_mail VARCHAR(255) PRIMARY KEY,
  Nome VARCHAR(255),
  Senha VARCHAR(255)
);

CREATE TABLE GenesFlix (
  cod INT PRIMARY KEY,
  cod_filme INT
);

CREATE TABLE Filmes (
  cod INT PRIMARY KEY,
  Nome_do_Filme VARCHAR(255),
  Data_de_Lançamento DATE,
  Sinopse TEXT,
  cod_gen INT,
  cod_avalia INT
);

CREATE TABLE Top_3 (
  cod INT PRIMARY KEY,
  Nota DECIMAL,
  Nome_do_Filme VARCHAR(255),
  cod_filme INT
);

CREATE TABLE Avaliacao (
  cod INT PRIMARY KEY,
  Nota DECIMAL,
  Nome_Usuario VARCHAR(255)
);

CREATE TABLE Generos (
  cod INT PRIMARY KEY,
  Terror VARCHAR(255),
  Fantasia VARCHAR(255),
  Comedia VARCHAR(255)
);

ALTER TABLE GenesFlix
ADD CONSTRAINT FK_GenesFlix_Filmes FOREIGN KEY (cod_filme) REFERENCES Filmes(cod);

ALTER TABLE Filmes
ADD CONSTRAINT FK_Filmes_Generos FOREIGN KEY (cod_gen) REFERENCES Generos(cod);

ALTER TABLE Filmes
ADD CONSTRAINT FK_Filmes_Avaliacao FOREIGN KEY (cod_avalia) REFERENCES Avaliacao(cod);

ALTER TABLE Top_3
ADD CONSTRAINT FK_Top_3_Filmes FOREIGN KEY (cod_filme) REFERENCES Filmes(cod);
