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