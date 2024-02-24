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

INSERT INTO categorie(nom) VALUES
    ('transport'),
    ('nourriture');

INSERT INTO mouvement(prix, date, description) VALUES
    (2000,'2024-02-01','Frais de deplacement'); 