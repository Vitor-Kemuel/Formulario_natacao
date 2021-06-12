CREATE DATABASE competicao_natacao;

use competicao_natacao;

CREATE TABLE infantil(
    id int(3) ZEROFILL NOT NULL AUTO_INCREMENT,
    nome varchar(40) NOT NULL,
    idade int(2) NOT NULL,
    PRIMARY KEY(id)
);

CREATE TABLE adolescente(
    id int(3) ZEROFILL NOT NULL AUTO_INCREMENT,
    nome varchar(40) NOT NULL,
    idade int(2) NOT NULL,
    PRIMARY KEY(id)
);

CREATE TABLE adulto(
    id int(3) ZEROFILL NOT NULL AUTO_INCREMENT,
    nome varchar(40) NOT NULL,
    idade int(2) NOT NULL,
    PRIMARY KEY(id)
);
