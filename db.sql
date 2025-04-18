CREATE DATABASE projet;
USE projet;

CREATE TABLE utilisateur (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    id_clients INT,
    mdp VARCHAR(255)

);

CREATE TABLE client (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100),
    prenom VARCHAR(100),
    adresse TEXT,
    ville VARCHAR(100),
    cp VARCHAR(10)
);

CREATE TABLE fleur (
    id INT AUTO_INCREMENT PRIMARY KEY,
    type VARCHAR(100),
    couleur VARCHAR(50),
    nom VARCHAR(100)
);

CREATE TABLE panier (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fleur VARCHAR(200),
    nombre INT,
    id_clients INT,
    FOREIGN KEY (id_clients) REFERENCES client(id)
);