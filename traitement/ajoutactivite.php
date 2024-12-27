<?php 
require_once('../Classes/activties.php');
require_once('../Classes/admin.php');
if ($_SERVER['REQUEST_METHOD'] == "POST") {
   $titre = htmlspecialchars(trim($_POST['Titre']));
   $destination = htmlspecialchars(trim($_POST['destination']));
   $Description = htmlspecialchars(trim($_POST['Description']));
   $dateDebut = htmlspecialchars(trim($_POST['dateDebut']));
   $dateFin = htmlspecialchars(trim($_POST['dateFin']));
   $prix = htmlspecialchars(trim($_POST['Prix']));
   $nbrPlaces = htmlspecialchars(trim($_POST['nbrPlaces']));
   $type_activite = htmlspecialchars(trim($_POST['type_activite']));
   $path_image = $_FILES['image_path'];

   // Vérifiez si tous les champs sont remplis
   if (!empty($titre) && !empty($destination) && !empty($Description) && !empty($dateDebut) &&
       !empty($dateFin) && !empty($prix) && !empty($nbrPlaces) && !empty($type_activite)) {
       
       // Gérer le fichier téléchargé
       if ($path_image['error'] === UPLOAD_ERR_OK) {
           // Récupérer le chemin temporaire et le nom du fichier
           $tmp_name = $path_image['tmp_name'];
           $original_name = basename($path_image['name']);
           
           // Définir le dossier de destination et renommer l'image (par exemple, ajouter un timestamp)
           $upload_dir = '../uploads/';
           $new_name = time() . "_" . $original_name; // Exemple : 1695841234_image.jpg
           $upload_path = $upload_dir . $new_name;

           // Déplacer le fichier dans le dossier "uploads/"
           if (move_uploaded_file($tmp_name, $upload_path)) {
               // Le fichier a été correctement téléchargé
               $activite = new activites($titre, $Description, $destination, $prix, $dateDebut, $dateFin, $nbrPlaces, $type_activite, $upload_path);

               // Ajout de l'activité par un administrateur
               $admin = new Admin("admin", "admin", "admin@gmail.com", "0626917903", "zohour", "2001-09-08", "2001", "12345678");
               $admin->ajouterActiviter($activite);

               echo "Activité ajoutée avec succès !";
           } else {
               echo "Erreur lors du téléchargement de l'image.";
           }
       } else {
           echo "Veuillez sélectionner une image valide.";
       }
   } else {
       echo "Il faut remplir tous les champs.";
   }

 


 } else{
    echo "err";
 }



?>