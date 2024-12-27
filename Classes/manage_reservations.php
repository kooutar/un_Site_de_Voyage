<?php
session_start();
if (!isset($_SESSION['user_id']) || ($_SESSION['user_role'] != 'admin' && $_SESSION['user_role'] != 'superadmin')) {
    header("Location: login.php");
    exit();
}

require_once('../dataBase/db.php');
require_once('reservation.php');

$db = dataBase::getInstance()->getConnection();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action'])) {
    $id_client = $_POST['id_client'];
    $id_activite = $_POST['id_activite'];
    $action = $_POST['action'];

    if ($action == 'accept') {
        reservation::updateReservationStatus($db, $id_client, $id_activite, 'Approved');
    } elseif ($action == 'refuse') {
        reservation::updateReservationStatus($db, $id_client, $id_activite, 'Denied');
    }
}

$reservations = reservation::getAllReservations($db);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Reservations</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <section class="mb-8 section" id="allreservation">
        <h2 class="text-xl font-bold mb-4">Reservations History</h2>
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="py-2 px-4 text-left">Client</th>
                        <th class="py-2 px-4 text-left">Date</th>
                        <th class="py-2 px-4 text-left">Guests</th>
                        <th class="py-2 px-4 text-left">Status</th>
                        <th class="py-2 px-4 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($reservations as $reservation) {
                        echo $reservation->afficherReservation();
                    } ?>
                </tbody>
            </table>
        </div>
    </section>
    <a href="admin_dashboard.php" class="text-blue-500 hover:underline">Back to Dashboard</a>
</body>
</html>
