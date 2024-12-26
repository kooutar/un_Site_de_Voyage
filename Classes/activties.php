<?php 
 class activites{
    private $titre;
    private $description;
    private $destination;
    private $prix;
    private $date_debut;
    private $date_fin;
    private $places_disponibles;
    private $type_activite;
    function __construct($titre,$description,$destination,$prix,$date_debut,$date_fin,$places_disponibles,$type_activite)
    {
        $this->titre=$titre;
        $this->description=$description;
        $this->destination=$destination;
        $this->prix=$prix;
        $this->date_debut=$date_debut;
        $this->date_fin=$date_fin;
        $this->places_disponibles=$places_disponibles;
        $this->type_activite=$type_activite;
    }
     public function getTitre() {return $this->titre;}
     public function getDescription() {return $this->description;}
     public function getDestination() {return $this->destination;}
     public function getPrix() {return $this->prix;}
     public function getDate_debut() {return $this->date_debut;}
     public function getDate_fin() {return $this->date_fin;}
     public function getPlaces_disponibles() {return $this->places_disponibles;}
     public function getType_activite() {return $this->type_activite;}
     public function getActivites(){return $this;}

 }


?>