<?php 
  class Utilisateurs{
    private $nom;
    private $prenom;
    private $telephone;
    private $mail;

    function __construct($nom,$prenom,$telephone,$mail)
    {
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->telephone=$telephone;
        $this->mail=$mail;
    }
    public function getNom(){return $this->nom;}
    public function getPrenom(){return $this->prenom;}
    public function getTelephone(){return $this->telephone;}
    public function getMail(){return $this->mail;}
    
 }

?>