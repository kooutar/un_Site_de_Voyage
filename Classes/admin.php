<?php
require_once('utilisateur.php');
require_once('db.php');

class Admin extends Utilisateurs {
    private $password;

    function __construct($nom, $prenom, $mail, $telephone, $adresse, $date_naissance, $password) {
        parent::__construct($nom, $prenom, $mail, $telephone, $adresse, $date_naissance);
        $this->password = $password;
    }

    function addAdmin() {
        $db = dataBase::getInstance()->getConnection();
        try {
            $req_Insert_user = "INSERT INTO user (nom, prenom, email, telephone, date_naissance, adresse, password, role) 
                                VALUES (:nom, :prenom, :email, :telephone, :date_naissance, :adresse, :password, :role)";
            $query = $db->prepare($req_Insert_user);
            $nom = $this->getNom();
            $prenom = $this->getPrenom();
            $telephone = $this->getTelephone();
            $mail = $this->getMail();
            $date_naissance = $this->getDate_naissance();
            $adresse = $this->getAdresse();
            $password = password_hash($this->password, PASSWORD_DEFAULT); // Hash the password
            $role = "admin";
            $query->bindParam(':nom', $nom);
            $query->bindParam(':prenom', $prenom);
            $query->bindParam(':email', $mail);
            $query->bindParam(':telephone', $telephone);
            $query->bindParam(':date_naissance', $date_naissance);
            $query->bindParam(':adresse', $adresse);
            $query->bindParam(':password', $password);
            $query->bindParam(':role', $role);
            $query->execute();
            echo "Admin ajouté avec succès.";
        } catch (PDOException $e) {
            echo "Erreur lors de l'ajout de l'admin : " . $e->getMessage();
        }
    }
}
?>
