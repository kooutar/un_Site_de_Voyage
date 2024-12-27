

<?php
require_once('utilisateur.php');
require_once('db.php');

class Visiteur extends Utilisateurs {
    private $password;

    function __construct($nom, $prenom, $mail, $telephone, $adresse, $date_naissance, $password) {
        parent::__construct($nom, $prenom, $mail, $telephone, $adresse, $date_naissance);
        $this->password = $password;
    }

    function inscrire() {
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
            $password = password_hash($this->password, PASSWORD_DEFAULT); 
            $role = "client";
            $query->bindParam(':nom', $nom);
            $query->bindParam(':prenom', $prenom);
            $query->bindParam(':email', $mail);
            $query->bindParam(':telephone', $telephone);
            $query->bindParam(':date_naissance', $date_naissance);
            $query->bindParam(':adresse', $adresse);
            $query->bindParam(':password', $password);
            $query->bindParam(':role', $role);
            $query->execute();
            echo "Visiteur inscrit avec succès.";
        } catch (PDOException $e) {
            echo "Erreur lors de l'inscription : " . $e->getMessage();
        }
    }

    static function login($email, $password) {
        $db = dataBase::getInstance()->getConnection();
        try {
            $req_Select_user = "SELECT * FROM user WHERE email = :email";
            $query = $db->prepare($req_Select_user);
            $query->bindParam(':email', $email);
            $query->execute();
            $user = $query->fetch();
            if ($user && password_verify($password, $user['password'])) {
                session_start();
                $_SESSION['user_id'] = $user['id_client'];
                $_SESSION['user_role'] = $user['role'];
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo "Erreur lors de la connexion : " . $e->getMessage();
            return false;
        }
    }
}
?>

