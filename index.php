<?php 
   require_once('dataBase/db.php');
   require_once('Classes/visiteur.php');
   $db1 = dataBase::getInstance();
   $conn1 = $db1->getConnection();
   $visiteur=new Visiteur("laajil","kaoutar","kaoutar@gmail.com","0626917903","zohour","2001-09-08");
   $visiteur->insrire();
?>