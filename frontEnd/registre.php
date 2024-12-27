<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Responsive Login Form Tailwind CSS</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
<script src="https://cdn.tailwindcss.com"></script>
<title>Register</title>
</head>
<body class="flex flex-col items-center justify-center min-h-screen p-4 overflow-hidden bg-gray-100">
  <div class="max-w-md w-full bg-white rounded-lg shadow-md">
    <div class="h-28 bg-[#04007A] text-white text-2xl font-semibold flex items-center justify-center rounded-t-lg">
      <span>Register Form</span>
    </div>
    <form method="post" action="" class="p-6">
      <div class="grid grid-cols-2 gap-4 mb-4">
        <div class="relative h-14">
          <i class="fas fa-user absolute top-0 left-0 w-14 h-full bg-black text-white text-xl flex items-center justify-center rounded-l-lg"></i>
          <input type="text" id="nom" name="nom" placeholder="Nom" required 
                 class="w-full h-full pl-16 border border-gray-300 rounded-r-lg text-lg focus:border-black focus:ring-black transition">
        </div>
        <div class="relative h-14">
          <i class="fas fa-user absolute top-0 left-0 w-14 h-full bg-black text-white text-xl flex items-center justify-center rounded-l-lg"></i>
          <input type="text" id="prenom" name="prenom" placeholder="Prenom" required 
                 class="w-full h-full pl-16 border border-gray-300 rounded-r-lg text-lg focus:border-black focus:ring-black transition">
        </div>
        <div class="relative h-14">
          <i class="fa-solid fa-inbox absolute top-0 left-0 w-14 h-full bg-black text-white text-xl flex items-center justify-center rounded-l-lg"></i>
          <input type="email" id="email" name="email" placeholder="Email" required 
                 class="w-full h-full pl-16 border border-gray-300 rounded-r-lg text-lg focus:border-black focus:ring-black transition">
        </div>
        <div class="relative h-14">
          <i class="fa-solid fa-phone absolute top-0 left-0 w-14 h-full bg-black text-white text-xl flex items-center justify-center rounded-l-lg"></i>
          <input type="telephone" id="telephone" name="telephone" placeholder="Phone" required 
                 class="w-full h-full pl-16 border border-gray-300 rounded-r-lg text-lg focus:border-black focus:ring-black transition">
        </div>
        <div class="relative h-14">
          <i class="fa-solid fa-house absolute top-0 left-0 w-14 h-full bg-black text-white text-xl flex items-center justify-center rounded-l-lg"></i>
          <input type="text" id="adresse" name="adresse" placeholder="Adresse" required 
                 class="w-full h-full pl-16 border border-gray-300 rounded-r-lg text-lg focus:border-black focus:ring-black transition">
        </div>
        <div class="relative h-14">
          <i class="fa-solid fa-calendar absolute top-0 left-0 w-14 h-full bg-black text-white text-xl flex items-center justify-center rounded-l-lg"></i>
          <input type="date" id="date_naissance" name="date_naissance" required 
                 class="w-full h-full pl-16 border border-gray-300 rounded-r-lg text-lg focus:border-black focus:ring-black transition">
        </div>
        <div class="relative h-14">
          <i class="fas fa-lock absolute top-0 left-0 w-14 h-full bg-black text-white text-xl flex items-center justify-center rounded-l-lg"></i>
          <input type="password" id="password" name="password" placeholder="Password" required 
                 class="w-full h-full pl-16 border border-gray-300 rounded-r-lg text-lg focus:border-black focus:ring-black transition">
        </div>
        <div class="relative h-14">
          <i class="fas fa-lock absolute top-0 left-0 w-14 h-full bg-black text-white text-xl flex items-center justify-center rounded-l-lg"></i>
          <input type="password" id="confirmpassword" placeholder="Confirm Password" required 
                 class="w-full h-full pl-16 border border-gray-300 rounded-r-lg text-lg focus:border-black focus:ring-black transition">
        </div>
      </div>
      <div>
        <input type="submit" value="Register" 
               class="w-full h-14 bg-[#04007A] text-white text-lg font-medium rounded-lg cursor-pointer hover:bg-white transition hover:text-black hover:border-2 hover:border-black">
      </div>
      <div class="text-center mt-6 text-sm">
        Already have an account? <a href="login.php" class="text-[#04007A] hover:underline">Login</a>
      </div>
    </form>
  </div>
</body>
</html>






<?php 
   require_once('../dataBase/db.php');
   require_once('../Classes/visiteur.php');
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
      $visiteur=new Visiteur($nom,$prenom,$email,$telephone,$adresse,$date_naissance,$password);
      $visiteur->insrire();
    // $sql = "INSERT INTO user (nom, prenom, email, telephone, adresse, date_naissance, password, role) VALUES ('$nom', '$prenom', '$email', '$telephone', '$adresse', '$date_naissance', '$password', '$role')";

    // if ($conn->query($sql) === TRUE) {
    //     echo "Registration successful. You can now <a href='login.php'>login</a>.";
    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    // }

    // $conn->close();
}
?>