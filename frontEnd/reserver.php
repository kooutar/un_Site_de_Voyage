<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

require_once('../database/db.php');
require_once('../classes/activties.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_activite = $_POST['id_activite'];
    $id_client = $_SESSION['user_id'];
    $nbrPersonne = $_POST['nbrPersonne'];
    if(empty($nbrPersonne)){
        echo "eror nbrPersonne";
    }else{
         echo "id_activite: " . $id_activite . "<br>";
    echo "id_client: " . $id_client . "<br>";
    echo "nbrepero: " . $nbrPersonne . "<br>";

    $db = dataBase::getInstance()->getConnection();
    $activite = new activites('', '', '', '', '', '', '', '', '');
    $activite->setID_activite($id_activite);

    try {
        if ($activite->reserverActivite($id_activite, $id_client, $nbrPersonne, $db)) {
            echo "Réservation effectuée avec succès.";
        } else {
            echo "Erreur lors de la réservation.";
        }
    } catch (PDOException $e) {
        echo "Erreur lors de la réservation : " . $e->getMessage();
    }
    }
   
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Réserver</title>
</head>
<body>
    <h2>Réserver</h2>
    <p>Votre réservation a été effectuée avec succès.</p>
    <a href="client_dashboard.php">Retour au tableau de bord</a>
</body>
</html>
