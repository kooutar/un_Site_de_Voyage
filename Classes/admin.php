<?php 
require_once('utilisateur.php');
require_once('principeUtilisateur.php');
require_once('../dataBase/db.php');
  class Admin  extends UtilisateurPrincipale{
    function __construct($nom,$prenom,$mail,$telephone,$adresse,$date_naissance,$password)
    {
        parent::__construct($nom,$prenom,$mail,$telephone,$adresse,$date_naissance,$password);
    }

    public function ajouterActiviter($activite){
        $db=dataBase::getInstance()->getConnection();
        try{
          $req="INSERT INTO activite(titre,description,destination,prix,date_debut,date_fin,places_disponibles,type_activite,image_path)
          VALUES(:titre,:description,:destination,:prix,:date_debut,:date_fin,:places_disponibles,:type_activite,:image_path)";
           $query = $db->prepare($req);
           $titre=$activite->getTitre();
           $description=$activite->getDescription();
           $destination=$activite->getDestination();
           $prix=$activite->getPrix();
           $date_debut=$activite->getDate_debut();
           $date_fin=$activite->getDate_fin();
           $places_disponibles=$activite->getPlaces_disponibles();
           $type_activite=$activite->getType_activite();
           $image_path=$activite->getImagePath();
          $query->bindParam(":titre", $titre);
          $query->bindParam(":description",$description);
          $query->bindParam(":destination", $destination);
          $query->bindParam(":prix",$prix);
          $query->bindParam(":date_debut", $date_debut);
          $query->bindParam(":date_fin",$date_fin);
          $query->bindParam(":places_disponibles", $places_disponibles);
          $query->bindParam(":type_activite",$type_activite);
          $query->bindParam(":image_path",$image_path);
          

          $query->execute();
          $id_activite=$db->lastInsertId();
          $activite->setID_activite($id_activite);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        
        function accepterReservation(resevation $reservation )
        {
          $db=dataBase::getInstance()->getConnection();
          try{
             $req="INSERT INTO "  ;


          }catch(PDOException $e){
              echo $e->getMessage();
          }
                
        }


            
    }

    


   
  }

?>