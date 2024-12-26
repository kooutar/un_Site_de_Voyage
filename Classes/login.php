<?php
// include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            session_start();
            $_SESSION['user_id'] = $row['id_client'];
            $_SESSION['user_role'] = $row['role'];

            if ($row['role'] == 'admin') {
                header("Location: admin_dashboard.php");
            } elseif ($row['role'] == 'superadmin') {
                header("Location: superadmin_dashboard.php");
            } else {
                header("Location: client_dashboard.php");
            }
            exit();
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found with that email.";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body class="flex flex-col items-center justify-center min-h-screen  p-4 overflow-hidden">
<div class="max-w-md w-full bg-white rounded-lg shadow-md">
    <div class="h-28 bg-gray-800 text-white text-2xl font-semibold flex items-center justify-center rounded-t-lg">
      <span>Login Form</span>
    </div>
    <form method="post" action="login.php" class="p-6">
    <div class="relative h-14 mb-4">
     
     <i class="fas fa-user absolute top-0 left-0 w-14 h-full bg-black text-white text-xl flex items-center justify-center rounded-l-lg"></i>
     <input type="email" name="email" placeholder="Email or Phone" required 
            class="w-full h-full pl-16 border border-gray-300 rounded-r-lg text-lg focus:border-gray-800 focus:ring-gray-800 transition">
   </div>
   <div class="relative h-14 mb-4">
        <i class="fas fa-lock absolute top-0 left-0 w-14 h-full bg-black text-white text-xl flex items-center justify-center rounded-l-lg"></i>
        <input type="password" name="password" placeholder="Password" required 
               class="w-full h-full pl-16 border border-gray-300 rounded-r-lg text-lg focus:border-gray-800 focus:ring-gray-800 transition">
      </div>
      <div class="text-right mb-4">
        <a href="#" class="text-black text-sm hover:underline">Forgot password?</a>
      </div>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
    </div>
    <a href="register.php">Register</a>
</body>


<body >
  <div class="max-w-md w-full bg-white rounded-lg shadow-md">
    <div class="h-28 bg-gray-800 text-white text-2xl font-semibold flex items-center justify-center rounded-t-lg">
      <span>Login Form</span>
    </div>
    <form method="post" action="login.php" class="p-6">
      <div class="relative h-14 mb-4">
     
        <i class="fas fa-user absolute top-0 left-0 w-14 h-full bg-black text-white text-xl flex items-center justify-center rounded-l-lg"></i>
        <input type="email" name="email" placeholder="Email or Phone" required 
               class="w-full h-full pl-16 border border-gray-300 rounded-r-lg text-lg focus:border-gray-800 focus:ring-gray-800 transition">
      </div>
      <div class="relative h-14 mb-4">
        <i class="fas fa-lock absolute top-0 left-0 w-14 h-full bg-black text-white text-xl flex items-center justify-center rounded-l-lg"></i>
        <input type="password" name="password" placeholder="Password" required 
               class="w-full h-full pl-16 border border-gray-300 rounded-r-lg text-lg focus:border-gray-800 focus:ring-gray-800 transition">
      </div>
      <div class="text-right mb-4">
        <a href="#" class="text-black text-sm hover:underline">Forgot password?</a>
      </div>
      <div>
        <input type="submit" value="Login" 
               class="w-full h-14 bg-gray-800 text-white text-lg font-medium rounded-lg cursor-pointer hover:bg-white hover:text-black hover:border-2 hover:border-black transition">
      </div>
      <div class="text-center mt-6 text-sm">
        Not a member? <a href="signin.php" class="text-gray-800 hover:underline">Signup now</a>
      </div>
    </form>
  
</html>
