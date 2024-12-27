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
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
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
    

    <main class="flex-1  overflow-y-auto">
    <div class="container mx-auto p-4">
        <!-- Welcome Section -->
    <div class="bg-white p-6 rounded-lg shadow-md mb-6 flex justify-between items-center">
      <div>
        <h2 class="text-3xl font-semibold text-gray-800">Welcome, Sara!</h2>
        <p class="text-gray-600 mt-2">Here is the history of today's reservations</p>
      </div>
      <div>
        <img src="https://via.placeholder.com/120" alt="chef icon" class="w-32">
      </div>
    </div>
     <!-- Statistics Section -->
     <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
      <div class="bg-white p-6 rounded-lg shadow-md flex justify-between items-center">
        <div>
          <h3 class="text-gray-600">Pending Requests</h3>
          <p class="text-2xl font-bold text-blue-500">12</p>
        </div>
        <i class="fas fa-clock text-4xl text-blue-400"></i>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-md flex justify-between items-center">
        <div>
          <p class="text-gray-600">Approved Today</p>
          <h3 class="text-2xl font-bold text-green-500">34</h3>
        </div>
        <i class="fas fa-check-circle text-4xl text-green-400"></i>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-md flex justify-between items-center">
        <div>
          <p class="text-gray-600">Approved Tomorrow</p>
          <h3 class="text-2xl font-bold text-yellow-500">8</h3>
        </div>
        <i class="fas fa-calendar-day text-4xl text-yellow-400"></i>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-md flex justify-between items-center">
        <div>
          <p class="text-gray-600">Total Clients</p>
          <h3 class="text-2xl font-bold text-yellow-500">8</h3>
        </div>
        <i class="fas fa-calendar-day text-4xl text-yellow-400"></i>
      </div>
    </div>
        
        <!-- Reservations Section -->
        <section class="mb-8">
            
            

    <?php if ($_SESSION['user_role'] == 'superadmin') { ?>
        <div id="editForm" class="  inset-0 flex items-center justify-center">

        <div class="bg-gray-800 p-8 rounded-lg w-full max-w-md">
        <h2 class="text-2xl font-bold mb-6 text-white">Add Admin</h2>
        <form method="post" action="admin_dashboard.php" id="addAdminForm">
            <div class="flex">
                <input type="hidden" name="editId" id="editId" class="w-full">
            <div class="mb-4">
                <label for="nom" class="block text-sm font-medium text-gray-400 mb-2">Nom</label>
                <input type="text" id="nom" name="nom" class="input-field" required>
            </div>
            </div>
            
            <div class="mb-4">
                <label for="prenom" class="block text-sm font-medium text-gray-400 mb-2">Prenom</label>
                <input type="text" id="prenom" name="prenom" class="input-field" required>
            </div>
            <div class="mb-4">
                <label for="editEmail" class="block text-sm font-medium text-gray-400 mb-2">Email</label>
                <input type="email" id="editEmail" name="email" class="input-field" required>
            </div>
            <div class="mb-4">
                <label for="tel" class="block text-sm font-medium text-gray-400 mb-2">Telephone</label>
                <input type="text" id="tel" name="telephone" class="input-field" required>
            </div>
            <div class="mb-4">
                <label for="adresse" class="block text-sm font-medium text-gray-400 mb-2">Adresse</label>
                <input type="text" id="adresse" name="adresse" class="input-field" required>
            </div>
            <div class="mb-4">
                <label for="date" class="block text-sm font-medium text-gray-400 mb-2">Date de naissance</label>
                <input type="date" id="date" name="date_naissance" class="input-field" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-400 mb-2">Password</label>
                <input type="password" id="password" name="password" class="input-field" required>
            </div>
            <div class="flex justify-end">
                
              <input type="submit" value="Add Admin" class="text-black flex justify-start content-center mt-3 hover:text-black" class="bg-white border border-black  w-32 h-10 flex items-center justify-center">
                
            </div>
        </form>
    </div>
        
    <?php } ?>

            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                
            </div>
        
    
   

    </div>

     </main>
</div>
    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center p-4">
        <p>&copy; 2024 Chef's Gastronomic Experience. All rights reserved.</p>
    </footer>
   
</body>
</html>


