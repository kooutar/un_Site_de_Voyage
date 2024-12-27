CREATE DATABASE voyage2;
USE voyage2;
CREATE TABLE user (
    id_client INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(100) not null,
    prenom VARCHAR(100) not null,
    email VARCHAR(150) UNIQUE,
    telephone VARCHAR(150) not null,
    adresse TEXT not null,
    date_naissance DATE not null,
    role ENUM('client', 'admin', 'superadmin')
);

CREATE TABLE reservation (
    
    date_reservation TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    statut ENUM('En attente', 'Confirmée', 'Annulée') DEFAULT 'En attente',
    id_client INT NOT NULL,
    id_activite INT NOT NULL,
    FOREIGN KEY (id_client) REFERENCES user(id_client) ON DELETE CASCADE,
    FOREIGN KEY (id_activite) REFERENCES activite(id_activite) ON DELETE CASCADE,
    PRIMARY key(id_client,id_activite)
);

CREATE TABLE activite (
    id_activite INT PRIMARY KEY AUTO_INCREMENT,
    titre VARCHAR(150) not null,
    description TEXT not null,
    destination VARCHAR(100) not null,
    prix DECIMAL(10,2) not null,
    date_debut DATE not null,
    date_fin DATE not null,
    places_disponibles INT not null,
    type_activite ENUM('vols', 'hotels', 'circuits touristiques')
);