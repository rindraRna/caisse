CREATE DATABASE caisse;
USE caisse;

CREATE TABLE categorie (
    id_cat int primary key auto_increment,
    nom varchar(50)
);

CREATE TABLE mouvement(
    id_mouv int primary key auto_increment,
    prix int,
    date date,
    id_cat int,
    description varchar(255),
    FOREIGN KEY (id_cat) REFERENCES categorie(id_cat)
);

CREATE TABLE login (
    id_log int primary key auto_increment,
    email varchar(30),
    mdp varchar(10)
);

INSERT INTO login VALUES
(1, 'frederic@gmail.com', '12345');