

<?php
require_once('db.php');
require_once('visiteur.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (Visiteur::login($email, $password)) {
        if ($_SESSION['user_role'] == 'admin') {
            header("Location: admin_dashboard.php");
        } elseif ($_SESSION['user_role'] == 'superadmin') {
            header("Location: superadmin_dashboard.php");
        } else {
            header("Location: client_dashboard.php");
        }
        exit();
    } else {
        echo "Invalid email or password.";
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex flex-col items-center justify-center min-h-screen  p-4 overflow-hidden">

  <div class="max-w-md w-full bg-white rounded-lg shadow-md">
    <div class="h-28 bg-[#04007A] text-white text-2xl font-semibold flex items-center justify-center rounded-t-lg">
      <span>Login Form</span>
    </div>
    <form method="post" action="login.php" class="p-6">
      <div class="relative h-14 mb-4">
     
        <i class="fas fa-user absolute top-0 left-0 w-14 h-full bg-black text-white text-xl flex items-center justify-center rounded-l-lg"></i>
        <input type="email" name="email" placeholder="Email or Phone" required 
               class="w-full h-full pl-16 border border-gray-300 rounded-r-lg text-lg focus:border-[#04007A] focus:ring-[#04007A] transition">
      </div>
      <div class="relative h-14 mb-4">
        <i class="fas fa-lock absolute top-0 left-0 w-14 h-full bg-black text-white text-xl flex items-center justify-center rounded-l-lg"></i>
        <input type="password" name="password" placeholder="Password" required 
               class="w-full h-full pl-16 border border-gray-300 rounded-r-lg text-lg focus:border-[#04007A] focus:ring-[#04007A] transition">
      </div>
      <div class="text-right mb-4">
        <a href="#" class="text-black text-sm hover:underline">Forgot password?</a>
      </div>
      <div>
        <input type="submit" value="Login" 
               class="w-full h-14 bg-[#04007A] text-white text-lg font-medium rounded-lg cursor-pointer hover:bg-white hover:text-black hover:border-2 hover:border-black transition">
      </div>
      <div class="text-center mt-6 text-sm">
        Not a member? <a href="signin.php" class="text-[#04007A] hover:underline">Signup now</a>
      </div>
    </form>
  
  </body>
</html>
