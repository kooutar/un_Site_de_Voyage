<?php
session_start();
if (!isset($_SESSION['user_id']) || ($_SESSION['user_role'] != 'admin' && $_SESSION['user_role'] != 'superadmin')) {
    header("Location: login.php");
    exit();
}

require_once('db.php');
require_once('admin.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && $_SESSION['user_role'] == 'superadmin') {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $adresse = $_POST['adresse'];
    $date_naissance = $_POST['date_naissance'];
    $password = $_POST['password'];

    $admin = new Admin($nom, $prenom, $email, $telephone, $adresse, $date_naissance, $password);
    $admin->addAdmin();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
</head>
<body>
    <h2>Admin Dashboard</h2>
    <ul>
        <li><a href="manage_reservations.php">Manage Reservations</a></li>
        <li><a href="add_activity.php">Add Activities</a></li>
        <li><a href="manage_clients.php">Manage Clients</a></li>
        <?php if ($_SESSION['user_role'] == 'superadmin') { ?>
            <li><a href="admin_dashboard.php#addAdminForm">Add Admin</a></li>
        <?php } ?>
        <li><a href="logout.php">Logout</a></li>
    </ul>

    <?php if ($_SESSION['user_role'] == 'superadmin') { ?>
        <h3>Add Admin</h3>
        <form method="post" action="admin_dashboard.php" id="addAdminForm">
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" required><br><br>
            <label for="prenom">Prenom:</label>
            <input type="text" id="prenom" name="prenom" required><br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
            <label for="telephone">Telephone:</label>
            <input type="text" id="telephone" name="telephone" required><br><br>
            <label for="adresse">Adresse:</label>
            <input type="text" id="adresse" name="adresse" required><br><br>
            <label for="date_naissance">Date de Naissance:</label>
            <input type="date" id="date_naissance" name="date_naissance" required><br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>
            <input type="submit" value="Add Admin">
        </form>
    <?php } ?>
</body>
</html>
