<?php 
session_start();
require_once('principaleUtilisateur.php');
require_once('../dataBase/db.php');
require_once('activites.php');
  class client extends UtilisateurPrincipale {
     
       function reserver(activites $activite){
        $db=dataBase::getInstance()->getConnection();
        try{
          $req="INSERT INTO reservation(id_client,id_activite,nbrPresonne) VALUES(:id_cleint,:id_activite,:nbrPresonne)";

          $getIDclientConnecter="SELECT email from user where id=:id";
          $queryIDClient=$db->prepare($getIDclientConnecter);
          $queryIDClient->bindParam(":id", $_SESSION['id_user'], PDO::PARAM_INT);
          $queryIDClient->execute();

         // Vérifier si un ID a été récupéré
         $idClient = $queryIDClient->fetchColumn();
         if (!$idClient) {
             throw new Exception("Client non trouvé dans la base de données.");
         }

         $req = "INSERT INTO reservation (id_client, id_activite, nbrPersonne) 
                 VALUES (:id_client, :id_activite, :nbrPersonne)";
         $query = $db->prepare($req);

        //  $idActivite = $activite->getId(); // Assurez-vous que la classe `activites` contient cette méthode
        //  $query->bindParam(":id_client", $idClient, PDO::PARAM_INT);
        //  $query->bindParam(":id_activite", $idActivite, PDO::PARAM_INT);
        //  $query->bindParam(":nbrPersonne", $nbrPersonne, PDO::PARAM_INT);

        //  $query->execute();

        }catch(PDOException $e){
          echo $e->getMessage();
        }
       }
  }

?>