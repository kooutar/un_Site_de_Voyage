<?php 
require_once('../Classes/activties.php');
require_once('../Classes/admin.php');
 if($_SERVER['REQUEST_METHOD']=="POST"){
     $titre=htmlspecialchars(trim($_POST['Titre']));
     $destination=htmlspecialchars(trim($_POST['destination']));
     $Description=htmlspecialchars(trim($_POST['Description']));
     $dateDebut=htmlspecialchars(trim($_POST['dateDebut']));
     $dateFin=htmlspecialchars(trim($_POST['dateFin']));
     $prix=htmlspecialchars(trim($_POST['Prix']));
     $nbrPlaces=htmlspecialchars(trim($_POST['nbrPlaces']));
     $type_activite=htmlspecialchars(trim($_POST['type_activite']));
     if(!empty( $titre) && !empty( $destination) && !empty($Description) && !empty($dateDebut) && !empty($dateFin) && !empty($prix) && !empty($nbrPlaces) && !empty($type_activite) ){
        $activite=new activites($titre,$Description,$destination,$prix,$dateDebut,$dateFin, $nbrPlaces,$type_activite);
        $admin = new Admin("admin","admin","admin@gmail.com","0626917903","zohour","2001-09-08","2001");
        $admin->ajouterActiviter($activite);

     }
     else{
        echo "il faut remplaire tous les champs";
     }
 


 } else{
    echo "err";
 }



?>