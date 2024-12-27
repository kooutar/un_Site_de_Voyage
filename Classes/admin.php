<?php
require_once('utilisateur.php');
require_once('principeUtilisateur.php');
require_once('../dataBase/db.php');

class Admin extends UtilisateurPrincipale {
    private $password;

    function __construct($nom, $prenom, $mail, $telephone, $adresse, $date_naissance, $password) {
        parent::__construct($nom, $prenom, $mail, $telephone, $adresse, $date_naissance, $password);
        $this->password = $password;
    }

    public function ajouterActiviter($activite) {
        $db = dataBase::getInstance()->getConnection();
        try {
            $req = "INSERT INTO activite(titre,description,destination,prix,date_debut,date_fin,places_disponibles,type_activite,image_path)
                    VALUES(:titre,:description,:destination,:prix,:date_debut,:date_fin,:places_disponibles,:type_activite,:image_path)";
            $query = $db->prepare($req);
            $titre = $activite->getTitre();
            $description = $activite->getDescription();
            $destination = $activite->getDestination();
            $prix = $activite->getPrix();
            $date_debut = $activite->getDate_debut();
            $date_fin = $activite->getDate_fin();
            $places_disponibles = $activite->getPlaces_disponibles();
            $type_activite = $activite->getType_activite();
            $image_path = $activite->getImagePath();
            $query->bindParam(":titre", $titre);
            $query->bindParam(":description", $description);
            $query->bindParam(":destination", $destination);
            $query->bindParam(":prix", $prix);
            $query->bindParam(":date_debut", $date_debut);
            $query->bindParam(":date_fin", $date_fin);
            $query->bindParam(":places_disponibles", $places_disponibles);
            $query->bindParam(":type_activite", $type_activite);
            $query->bindParam(":image_path", $image_path);


            $id_activite=$db->lastInsertId();
          $activite->setID_activite($id_activite);
          
            $query->execute();
            echo "Activité ajoutée avec succès.";
        } catch (PDOException $e) {
            echo "Erreur lors de l'ajout de l'activité : " . $e->getMessage();
        }
    }

    public function accepterReservation($reservationId) {
        $db = dataBase::getInstance()->getConnection();
        try {
            $req = "UPDATE reservation SET statut = 'Confirmée' WHERE id_reservation = :id_reservation";
            $query = $db->prepare($req);
            $query->bindParam(':id_reservation', $reservationId);
            $query->execute();
            echo "Réservation approuvée avec succès.";
        } catch (PDOException $e) {
            echo "Erreur lors de l'approbation de la réservation : " . $e->getMessage();
        }
    }

    public function refuserReservation($reservationId) {
        $db = dataBase::getInstance()->getConnection();
        try {
            $req = "UPDATE reservation SET statut = 'Annulée' WHERE id_reservation = :id_reservation";
            $query = $db->prepare($req);
            $query->bindParam(':id_reservation', $reservationId);
            $query->execute();
            echo "Réservation refusée avec succès.";
        } catch (PDOException $e) {
            echo "Erreur lors du refus de la réservation : " . $e->getMessage();
        }
    }

    public function addAdmin() {
        $db = dataBase::getInstance()->getConnection();
        try {
            $req_Insert_user = "INSERT INTO user (nom, prenom, email, telephone, date_naissance, adresse, password, role, banned) 
                                VALUES (:nom, :prenom, :email, :telephone, :date_naissance, :adresse, :password, :role, :banned)";
            $query = $db->prepare($req_Insert_user);
            $nom = $this->getNom();
            $prenom = $this->getPrenom();
            $telephone = $this->getTelephone();
            $mail = $this->getMail();
            $date_naissance = $this->getDate_naissance();
            $adresse = $this->getAdresse();
            $password = password_hash($this->password, PASSWORD_DEFAULT); // Hash the password
            $role = "admin";
            $banned = false;
            $query->bindParam(':nom', $nom);
            $query->bindParam(':prenom', $prenom);
            $query->bindParam(':email', $mail);
            $query->bindParam(':telephone', $telephone);
            $query->bindParam(':date_naissance', $date_naissance);
            $query->bindParam(':adresse', $adresse);
            $query->bindParam(':password', $password);
            $query->bindParam(':role', $role);
            $query->bindParam(':banned', $banned);
            $query->execute();
            echo "Admin ajouté avec succès.";
        } catch (PDOException $e) {
            echo "Erreur lors de l'ajout de l'admin : " . $e->getMessage();
        }
    }

    static function banUser($userId) {
        $db = dataBase::getInstance()->getConnection();
        try {
            $req_Ban_user = "UPDATE user SET banned = TRUE WHERE id_client = :id_client";
            $query = $db->prepare($req_Ban_user);
            $query->bindParam(':id_client', $userId);
            $query->execute();
            echo "Utilisateur banni avec succès.";
        } catch (PDOException $e) {
            echo "Erreur lors du bannissement de l'utilisateur : " . $e->getMessage();
        }
    }
}
?>
