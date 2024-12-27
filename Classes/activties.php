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
   
     public static function getAllActivites($db) {
        $activites = [];
        $query = "SELECT * FROM activite";  // Assurez-vous que le nom de la table est correct
        $stmt = $db->prepare($query);
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $activites[] = new activites(
                $row['titre'],
                $row['description'],
                $row['destination'],
                $row['prix'],
                $row['date_debut'],
                $row['date_fin'],
                $row['places_disponibles'],
                $row['type_activite']
            );
        }
        return $activites;
    }

      // Nouvelle méthode pour afficher les activités sous forme de carte responsive
      public function afficherActivites() {
        // Commencez à générer la structure HTML des cartes avec Tailwind CSS
        $html = "<div>";  // Grid responsive
        
        // Exemple de carte pour une activité
        $html .= "<div class='bg-white border rounded-lg shadow-md p-4 hover:shadow-lg transition-shadow duration-300'>";
        $html .= "<h3 class='text-xl font-semibold mb-2'>" . $this->getTitre() . "</h3>";
        $html .= "<p><strong>Description:</strong> " . $this->getDescription() . "</p>";
        $html .= "<p><strong>Destination:</strong> " . $this->getDestination() . "</p>";
        $html .= "<p><strong>Prix:</strong> " . $this->getPrix() . "€</p>";
        $html .= "<p><strong>Dates:</strong> Du " . $this->getDate_debut() . " au " . $this->getDate_fin() . "</p>";
        $html .= "<p><strong>Places disponibles:</strong> " . $this->getPlaces_disponibles() . "</p>";
        $html .= "<p><strong>Type:</strong> " . $this->getType_activite() . "</p>";
        $html .="<button class='resrever bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400'> Reserver</button>";
        $html .= "</div>";  // Fin de la carte d'activité
    
        $html .= "</div>";  // Fin du conteneur de cartes
        
        // Retourner le HTML généré
        return $html;
    }
    


 }


?>