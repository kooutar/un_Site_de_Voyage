<?php
session_start();
if (!isset($_SESSION['user_id']) || ($_SESSION['user_role'] != 'admin' && $_SESSION['user_role'] != 'superadmin')) {
    header("Location: login.php");
    exit();
}

require_once('../dataBase/db.php');
require_once('../Classes/admin.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['ban_user_id'])) {
    $userId = $_POST['ban_user_id'];
    Admin::banUser($userId);
}

$db = dataBase::getInstance()->getConnection();
$query = $db->prepare("SELECT * FROM user WHERE role = 'client'");
$query->execute();
$clients = $query->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manage clients</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<!-- Navbar -->
<nav class="bg-black shadow-md p-4 flex justify-between items-center">
    <div class="flex items-center"><a href="#">
                <img src="img/cuisine_logo-removebg-preview.png" class="max-w-full h-auto w-[100px] " alt="logo">
            </a>
    <h1 class="text-2xl font-bold text-white"> Dashboard panel</h1></div>
    <div class="flex items-center">
      <span class="mr-4 text-white">Hello, <strong>Chef Sara</strong></span>
      <img src="https://via.placeholder.com/40" alt="profile" class="rounded-full w-10 h-10">
    </div>
  </nav>
        
<div class="flex h-screen">
  <!-- Sidebar -->
  <aside class="w-64 bg-gray-800">
      
  <nav class="mt-8">
          <a href="manage_reservations.php" class="block py-2 px-4 text-gray-400 hover:bg-gray-700 hover:text-white">Manage reservations</a>
          <a href="add_activity.php" class="block py-2 px-4 text-gray-400 hover:bg-gray-700 hover:text-white">Add Activities</a>
          <a href="manage_clients.php" class="block py-2 px-4 text-gray-400 hover:bg-gray-700 hover:text-white">Manage Clients</a>
          <?php if ($_SESSION['user_role'] == 'superadmin') { ?>
            <a href="admin_dashboard.php#addAdminForm" class="block py-2 px-4 text-gray-400 hover:bg-gray-700 hover:text-white">Add Admin</a>
        <?php } ?>
          <a href="logout.php" class="block py-2 px-4 text-gray-400 hover:bg-gray-700 hover:text-white">Logout</a>
      </nav>
  </aside>
  <!-- Main Content -->
  <main class="flex-1 overflow-y-auto m-12">
        <!-- Welcome Section -->
    <div class="bg-white p-6 rounded-lg shadow-md mb-6 flex justify-between items-center">
      <div>
        <h2 class="text-3xl font-semibold text-gray-800">Welcome, Sara!</h2>
        <p class="text-gray-600 mt-2">Here is your management dashbord</p> 
      </div>
      <div>
        <img src="https://via.placeholder.com/120" alt="chef icon" class="w-32">
      </div>
    </div>

       <!-- User Management Section -->
       <section id="user-management" >
              <h2 class="text-3xl font-bold mb-6">Clients Management</h2>
              
              <div class="bg-white rounded-lg shadow-md overflow-hidden">


    <table class="min-w-full bg-white">
    <thead>
    <tr class="border-t">
            <th class="py-2 px-4 text-left" >ID</th>
            <th class="py-2 px-4 text-left">Nom</th>
            <th class="py-2 px-4 text-left">Prenom</th>
            <th class="py-2 px-4 text-left">Email</th>
            <th class="py-2 px-4 text-left">Telephone</th>
            <th class="py-2 px-4 text-left">Adresse</th>
            <th class="py-2 px-4 text-left">Date de Naissance</th>
            <th class="py-2 px-4 text-left">Action</th>
        </tr>
        </thead>
        <?php foreach ($clients as $client) { ?>
            <tr class="border-t">
                <td class="py-2 px-4"><?php echo $client['id_client']; ?></td>
                <td class="py-2 px-4"><?php echo $client['nom']; ?></td>
                <td class="py-2 px-4"><?php echo $client['prenom']; ?></td>
                <td class="py-2 px-4"><?php echo $client['email']; ?></td>
                <td class="py-2 px-4"><?php echo $client['telephone']; ?></td>
                <td class="py-2 px-4"><?php echo $client['adresse']; ?></td>
                <td class="py-2 px-4"><?php echo $client['date_naissance']; ?></td>
                <td class="py-2 px-4">
                    <?php if ($client['banned'] == false) { ?>
                        <form method="post" action="manage_clients.php">
                            <input type="hidden" name="ban_user_id" value="<?php echo $client['id_client']; ?>">
                            <input type="submit" value="Ban User">
                        </form>
                    <?php } else { ?>
                        Banned
                    <?php } ?>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
