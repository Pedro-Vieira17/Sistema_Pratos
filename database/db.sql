CREATE DATABASE Sistema_pratos_LP;
USE Sistema_pratos_LP;

CREATE TABLE usuario (
    nome VARCHAR(200) NOT NULL,
    email VARCHAR(200) NOT NULL
);

CREATE TABLE prato (
    nome VARCHAR(200) NOT NULL,
    descricao VARCHAR(200) NOT NULL,
    preco DECIMAL(10, 2) NOT NULL,
    categoria VARCHAR(200) NOT NULL
);
