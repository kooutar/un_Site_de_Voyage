<?php 

// Inclure la classe activites
require_once('../Classes/activties.php');
require_once('../dataBase/db.php');
$db = dataBase::getInstance()->getConnection();

// Récupérer toutes les activités depuis la base de données
$activitesList = activites::getAllActivites($db);

// Afficher les activités sous forme de cartes
foreach ($activitesList as $activite) {
    echo $activite->afficherActivites();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>



</style>
<body>
     <div class="containre">

     
     </div>
</body>
</html>
