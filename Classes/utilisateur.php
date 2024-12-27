<?php 
  class Utilisateurs{
    private $nom;
    private $prenom;
    private $telephone;
    private $mail;
    private $date_naissance;
    private $adresse;
    private $password;
    
    function __construct($nom,$prenom,$mail,$telephone,$adresse,$date_naissance,$password)
    {
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->mail=$mail;
        $this->telephone=$telephone;
        $this->adresse=$adresse;
        $this->$date_naissance=$date_naissance;
        $this->password=$password;
    }

    public function getNom(){return $this->nom;}
    public function getPrenom(){return $this->prenom;}
    public function getTelephone(){return $this->telephone;}
    public function getMail(){return $this->mail;}
    public function getDate_naissance(){return $this->date_naissance;}
    public function getPassword(){return $this->password;}
    public function getAdresse(){return $this->adresse;}

    
    
 }

?>