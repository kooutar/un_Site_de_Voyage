<?php 
  
  class Visiteur extends Utilisateurs {

    function __construct($nom,$prenom,$telephone,$mail)
    {
        parent::__construct($nom,$prenom,$telephone,$mail);
    }

    function insrire()
    {
        $db = dataBase::getInstance()->getConnection();
         
    }
     
  }

?>