<?php 
  require_once('utilisateur.php');
  require_once('../dataBase/db.php');
  class Visiteur extends Utilisateurs {

    function __construct($nom,$prenom,$mail,$telephone,$adresse,$date_naissance,$password)
    {
        parent::__construct($nom,$prenom,$mail,$telephone,$adresse,$date_naissance,$password);
    }

    function insrire()
    {
        $db = dataBase::getInstance()->getConnection();
        try{
    
            $req_Insert_user="insert Into user(nom,prenom,email,telephone,date_naissance,adresse,role,password) 
            Values(:nom,:prenom,:email,:telephone,:date_naissance,:adresse,:role,:password)";
            $query=$db->prepare($req_Insert_user);
            $nom = $this->getNom();
            $prenom = $this->getPrenom();
            $telephone = $this->getTelephone();
            $mail = $this->getMail();
            $date_naissance=$this->getDate_naissance();
            $adresse=$this->getAdresse();
            $password=$this->getPassword();
            $passwordHached=password_hash($password,PASSWORD_DEFAULT);
            $role = 'client';
            $query->bindParam(':nom', $nom);
            $query->bindParam(':prenom', $prenom );
            $query->bindParam(':email',  $mail);
            $query->bindParam(':telephone', $telephone);
            $query->bindParam(':date_naissance',$date_naissance);
            $query->bindParam(':adresse',$adresse);
            $query->bindParam(':role',$role);
            $query->bindParam(':password', $passwordHached);
            
            $query->execute();
            echo "Visiteur inscrit avec succès.";
        }catch(PDOException $e){
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