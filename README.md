# Système de Réservation de Voyages 2.0
## Description du Projet
Le Système de Réservation de Voyages 2.0 est une application web permettant aux clients de réserver des activités ou des offres touristiques telles que des vols, hôtels, et circuits. Le projet inclut la migration d'un système existant vers une architecture orientée objet (OOP) pour améliorer la flexibilité, la lisibilité, et la maintenabilité du code.
## Technologies Utilisées
Frontend: HTML5, CSS3, Responsive Design, UX/UI
Backend: PHP, MySQL
Versioning: Git
Méthodologie: Programmation Orientée Objet (OOP), UML
Base de données: MySQL
## Fonctionnalités
Authentification et Autorisation
Administrateur: Gestion des utilisateurs, des rôles, des activités, et des réservations.
Client Authentifié: Consultation et réservation d'activités, personnalisation des options, modification ou annulation des réservations.
Visiteur: Consultation des offres sans inscription.
Gestion des Activités
Ajouter, modifier, et supprimer des activités telles que des vols, des hôtels, et des circuits touristiques.
Gestion des Réservations
Création, modification, et annulation des réservations par les utilisateurs authentifiés.
## Structure du Projet
Backend
Contrôleurs: Gèrent les requêtes HTTP et interagissent avec le modèle pour manipuler les données.
Modèles: Représentent les entités (utilisateur, activité, réservation) et gèrent les interactions avec la base de données.
Vues: Affichent les pages HTML aux utilisateurs, en utilisant une architecture MVC.
Base de Données
Tables principales:
users: Contient les informations des utilisateurs.
activities: Contient les informations sur les activités touristiques.
reservations: Gère les réservations des utilisateurs.
## Diagrammes UML
Des diagrammes UML sont fournis pour illustrer l'architecture et les relations entre les différentes entités du système.
Prérequis
PHP >= 7.4
MySQL
Serveur web (Apache ou Nginx)
Git
## Installation
Clonez le repository :
bash
Copier le code
git clone <lien-vers-le-repository>
cd <nom-du-dossier>
Importez la base de données :
Le fichier SQL de création de la base de données et des tables est situé dans le dossier database/. Exécutez-le dans votre serveur MySQL :
bash
Copier le code
mysql -u root -p < database/setup.sql
Configurez votre serveur web pour pointer vers le dossier du projet. Si vous utilisez Apache, vous pouvez créer un fichier .htaccess à la racine du projet.
Accédez à l'application via http://localhost.
## Documentation
La documentation complète est disponible en PDF et couvre les sujets suivants :
## Introduction à la Programmation Orientée Objet en PHP
Encapsulation et Modificateurs d'Accès
Héritage et Polymorphisme
Méthodes Magiques
Gestion des Erreurs et Exceptions
Interfaces et Traits
Namespaces et Autoloading
Principes SOLID
Évaluation
Le projet sera évalué sur la migration vers l'architecture OOP, la structure du code, la lisibilité et la cohérence des fonctionnalités implémentées. Une présentation de 20 minutes sera réalisée, suivie d'une session de questions et réponses.
## Livrables
Le lien vers le repository GitHub contenant :
Le code source du site.
Le fichier des diagrammes UML.
Les fichiers de documentation.
Le fichier des commandes SQL (création de BD, création des tables, insertion des données).
README.
## Conclusion
Ce projet vise à fournir une solution moderne, flexible et évolutive pour la gestion des réservations de voyages, tout en adoptant une approche orientée objet pour garantir une meilleure gestion du code et une évolutivité future.
