<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['user_role'] != 'client') {
    header("Location: login.php");
    exit();
}


require_once('../dataBase/db.php');
require_once('../classes/activties.php');

$db = dataBase::getInstance()->getConnection();
$activites = activites::getAllActivites($db);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Client Dashboard</title>
</head>
<body>
    <h2>Client Dashboard</h2>
    <div>
        <?php foreach ($activites as $activite) {
            $activite->setID_activite($activite->getID_activite());
            echo $activite->afficherActivites();
        } ?>
    </div>
    <a href="logout.php">Logout</a>
</body>
</html>
