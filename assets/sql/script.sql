CREATE DATABASE caisse;
USE caisse;

CREATE TABLE categorie (
    id_cat int primary key,
    nom varchar(50)
);

CREATE TABLE mouvement(
    id_mouv int primary key,
    prix int,
    date date,
    id_cat int,
    description varchar(255),
    FOREIGN KEY (id_cat) REFERENCES categorie(id_cat)
);