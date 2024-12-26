<?php 
//    require_once('dataBase/db.php');
//    $db1 = dataBase::getInstance();
//    $conn1 = $db1->getConnection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $adresse = $_POST['adresse'];
    $date_naissance = $_POST['date_naissance'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 
    $role = 'client';

    $sql = "INSERT INTO user (nom, prenom, email, telephone, adresse, date_naissance, password, role) VALUES ('$nom', '$prenom', '$email', '$telephone', '$adresse', '$date_naissance', '$password', '$role')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful. You can now <a href='login.php'>login</a>.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Responsive Login Form Tailwind CSS</title>
  <!-- Font Awesome CDN link for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
  <script src="https://cdn.tailwindcss.com"></script>
    <title>Register</title>
</head>
<body class="flex flex-col items-center justify-center min-h-screen  p-4 overflow-hidden">
<div class="max-w-md w-full bg-white rounded-lg shadow-md">
    <div class="h-28 bg-gray-800 text-white text-2xl font-semibold flex items-center justify-center rounded-t-lg">
      <span>Signin form</span>
    </div>
    <form method="post" action="register.php" class="p-6">
        <div class="relative h-14 mb-4">    
        <i class="fas fa-user absolute top-0 left-0 w-14 h-full bg-black text-white text-xl flex items-center justify-center rounded-l-lg"></i>
            <input type="text" id="nom" name="nom" placeholder="Nom.." required 
                class="w-full h-full pl-16 border border-gray-300 rounded-r-lg text-lg focus:border-black focus:ring-black transition">
        </div>
            <div class="relative h-14 mb-4">
        <!-- <label for="email">Email:</label> -->

            <i class="fas fa-user absolute top-0 left-0 w-14 h-full bg-black text-white text-xl flex items-center justify-center rounded-l-lg"></i>
            <input type="text" id="prenom" name="prenom" placeholder="Prenom.." required 
                class="w-full h-full pl-16 border border-gray-300 rounded-r-lg text-lg focus:border-black focus:ring-black transition">
        </div>
        <div class="relative h-14 mb-4">
      <!-- <label for="email">Email:</label> -->

        <i class="fas fa-user absolute top-0 left-0 w-14 h-full bg-black text-white text-xl flex items-center justify-center rounded-l-lg"></i>
        <input type="email" id="email" name="email" placeholder="Email or Phone" required 
               class="w-full h-full pl-16 border border-gray-300 rounded-r-lg text-lg focus:border-black focus:ring-black transition">
      </div>
      <div class="relative h-14 mb-4">
      <!-- <label for="email">Email:</label> -->

        <i class="fas fa-user absolute top-0 left-0 w-14 h-full bg-black text-white text-xl flex items-center justify-center rounded-l-lg"></i>
        <input type="telephone" id="telephone" name="telephone" placeholder="Phone number.." required 
               class="w-full h-full pl-16 border border-gray-300 rounded-r-lg text-lg focus:border-black focus:ring-black transition">
      </div>
      <div class="relative h-14 mb-4">
      <!-- <label for="email">Email:</label> -->

        <i class="fas fa-user absolute top-0 left-0 w-14 h-full bg-black text-white text-xl flex items-center justify-center rounded-l-lg"></i>
        <input type="text" id="adresse" name="adresse" required 
               class="w-full h-full pl-16 border border-gray-300 rounded-r-lg text-lg focus:border-black focus:ring-black transition">
      </div>
      <div class="relative h-14 mb-4">
      <!-- <label for="email">Email:</label> -->

        <i class="fas fa-user absolute top-0 left-0 w-14 h-full bg-black text-white text-xl flex items-center justify-center rounded-l-lg"></i>
        <input type="date" id="date_naissance" name="date_naissance" required 
               class="w-full h-full pl-16 border border-gray-300 rounded-r-lg text-lg focus:border-black focus:ring-black transition">
      </div>

      <div class="relative h-14 mb-4">
      <!-- <label for="password">Password:</label> -->
        <i class="fas fa-lock absolute top-0 left-0 w-14 h-full bg-black text-white text-xl flex items-center justify-center rounded-l-lg"></i>
        <input type="password" id="password" name="password" placeholder="Create password" required 
               class="w-full h-full pl-16 border border-gray-300 rounded-r-lg text-lg focus:border-black focus:ring-black transition">
      </div>
      <div class="relative h-14 mb-4">
      <!-- <label for="confirmpassword">Email:</label> -->
        <i class="fas fa-lock absolute top-0 left-0 w-14 h-full bg-black text-white text-xl flex items-center justify-center rounded-l-lg"></i>
        <input type="password" id="confirmpassword" placeholder="Confirm password" required 
               class="w-full h-full pl-16 border border-gray-300 rounded-r-lg text-lg focus:border-black focus:ring-black transition">
      </div>
      <div>
        <input type="submit" value="Register" 
               class="w-full h-14 bg-gray-800 text-white text-lg font-medium rounded-lg cursor-pointer hover:bg-white transition hover:text-black hover:border-2 hover:border-black">
      </div>
      <div class="text-center mt-6 text-sm">
        Already have an account? <a href="login.php" class="text-gray-800 hover:underline">Login</a>
      </div>
        
    </form>
    
    </div>
</body>

</html>
