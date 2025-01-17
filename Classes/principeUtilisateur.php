
<?php
 class  UtilisateurPrincipale extends Utilisateurs {
       
     function login($email,$password)
     {
      $db = dataBase::getInstance()->getConnection();
      try {
          $req_Select_user = "SELECT * FROM user WHERE email = :email";
          $query = $db->prepare($req_Select_user);
          $query->bindParam(':email', $email);
          $query->execute();
          $user = $query->fetch();
          if ($user && password_verify($password, $user['password'])) {
             
              session_start();
              $_SESSION['user_id'] = $user['id_client'];
              $_SESSION['user_role'] = $user['role'];
              return true;
          } else {
              return false;
          }
      } catch (PDOException $e) {
          echo "Erreur lors de la connexion : " . $e->getMessage();
          return false;
      }
     }
      
  }