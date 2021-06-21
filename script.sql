CREATE DATABASE competicao_natacao;

use competicao_natacao;

CREATE TABLE competidor(
    id int(3) ZEROFILL NOT NULL AUTO_INCREMENT,
    nome varchar(40) NOT NULL,
    idade int(2) ZEROFILL NOT NULL,
    categoria varchar(15),
    PRIMARY KEY(id)
);

CREATE TABLE exemplo_nomes(
    id int(3) ZEROFILL NOT NULL AUTO_INCREMENT,
    nome varchar(40) NOT NULL,
    PRIMARY KEY(id)
);
