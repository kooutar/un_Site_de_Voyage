<?php 
  require_once('utilisateur.php');
  class Visiteur extends Utilisateurs {

    function __construct($nom,$prenom,$mail,$telephone,$adresse,$date_naissance)
    {
        parent::__construct($nom,$prenom,$mail,$telephone,$adresse,$date_naissance);
    }

    function insrire()
    {
        $db = dataBase::getInstance()->getConnection();
        try{
    
            $req_Insert_user="insert Into user(nom,prenom,email,telephone,date_naissance,adresse,role) 
            Values(:nom,:prenom,:email,:telephone,:date_naissance,:adresse,:role)";
            $query=$db->prepare($req_Insert_user);
            $nom = $this->getNom();
            $prenom = $this->getPrenom();
            $telephone = $this->getTelephone();
            $mail = $this->getMail();
            $date_naissance=$this->getDate_naissance();
            $adresse=$this->getAdresse();
            $role="client";
            $query->bindParam(':nom', $nom);
            $query->bindParam(':prenom', $prenom );
            $query->bindParam(':email',  $mail);
            $query->bindParam(':telephone', $telephone);
            $query->bindParam(':date_naissance',  $ $date_naissance);
            $query->bindParam(':adresse',$adresse);
            $query->bindParam(':role',  $ $role);
            $query->execute();
            echo "Visiteur inscrit avec succès.";
        }catch(PDOException $e){
            echo "Erreur lors de l'inscription : " . $e->getMessage();
        }
    }
     
  }

?>