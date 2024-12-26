<?php 
   require_once('dataBase/db.php');
   require_once('Classes/visiteur.php');
   require_once('Classes/activties.php');
   require_once('Classes/admin.php');
   $db1 = dataBase::getInstance();
   $conn1 = $db1->getConnection();
   // $visiteur=new Visiteur("laajil","kaoutar","kaoutar@gmail.com","0626917903","zohour","2001-09-08");
   // $visiteur->insrire();
   $activite=new activites("activite1","voyage vers DAKHLA","Dakhla",500,"25-03-2025","28-03-2025",60,"vols");
   $admin = new Admin("admin","admin","admin@gmail.com","0626917903","zohour","2001-09-08");
   $admin->ajouterActiviter($activite);
?>