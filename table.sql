CREATE DATABASE projet_final;

use projet_final;

CREATE TABLE projet_final_membre(
    id_membre INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(100),
    date_de_naissance DATE,
    genre VARCHAR(10),
    email VARCHAR(100),
    ville VARCHAR(100),
    mdp VARCHAR(100),    
    image_profile VARCHAR(100)
);

CREATE TABLE projet_final_categorie_objet(
    id_categorie INT PRIMARY KEY AUTO_INCREMENT,
    nom_categorie VARCHAR(100)
);

CREATE TABLE projet_final_objet(
    id_objet INT PRIMARY KEY AUTO_INCREMENT,
    nom_objet VARCHAR(100),
    id_categorie INT,
    id_membre INT,
    FOREIGN KEY (id_categorie) REFERENCES projet_final_categorie_objet(id_categorie),
    FOREIGN KEY (id_membre) REFERENCES projet_final_membre(id_membre)
);

CREATE TABLE projet_final_images_objet(
    id_image INT PRIMARY KEY AUTO_INCREMENT,
    id_objet INT,
    nom_image VARCHAR(100),
    FOREIGN KEY (id_objet) REFERENCES projet_final_objet(id_objet)
);

CREATE TABLE projet_final_emprunt(
    id_emprunt INT PRIMARY KEY AUTO_INCREMENT,
    id_objet INT,
    id_membre INT,
    date_emprunt DATE,
    date_retour DATE,
    FOREIGN KEY (id_membre) REFERENCES projet_final_membre(id_membre),
    FOREIGN KEY (id_objet) REFERENCES projet_final_objet(id_objet)
);

INSERT INTO projet_final_categorie_objet (nom_categorie) VALUES
('esthetique'),
('bricollage'),
('mecanique'),
('cuisine');

INSERT INTO projet_final_objet (nom_objet,id_categorie,id_membre) VALUES
('maquillage',1,1),
('rouge a levre',1,1),
('marteau',2,1),
('planche',2,1),
('pelle',2,1),
('tournevis',3,1),
('vis',3,1),
('couteau',4,1),
('fourchette',4,1),
('assiette',4,1),
('casserole',4,1),
('shampoing',1,2),
('parfum',1,2),
('scie',2,2),
('clou',2,2),
('perceuse',2,2),
('cle',3,2),
('roue',3,2),
('jante',3,2),
('poele',4,2),
('marmite',4,2),
('louche',4,2);
