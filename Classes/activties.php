<?php
class activites {
    private $id_activite;
    private $titre;
    private $description;
    private $destination;
    private $prix;
    private $date_debut;
    private $date_fin;
    private $places_disponibles;
    private $type_activite;
    private $image_path;

    function __construct($titre, $description, $destination, $prix, $date_debut, $date_fin, $places_disponibles, $type_activite, $image_path) {
        $this->titre = $titre;
        $this->description = $description;
        $this->destination = $destination;
        $this->prix = $prix;
        $this->date_debut = $date_debut;
        $this->date_fin = $date_fin;
        $this->places_disponibles = $places_disponibles;
        $this->type_activite = $type_activite;
        $this->image_path = $image_path;
    }

    public function setID_activite($id_activite) { $this->id_activite = $id_activite; }
    public function getID_activite() { return $this->id_activite; }
    public function getTitre() { return $this->titre; }
    public function getDescription() { return $this->description; }
    public function getDestination() { return $this->destination; }
    public function getPrix() { return $this->prix; }
    public function getDate_debut() { return $this->date_debut; }
    public function getDate_fin() { return $this->date_fin; }
    public function getPlaces_disponibles() { return $this->places_disponibles; }
    public function getType_activite() { return $this->type_activite; }
    public function getImagePath() { return $this->image_path; }
    public function getActivites() { return $this; }

    public function reserverActivite($id_activite, $client_id, $nbrPersonne, $db) {
        
    
            // Préparer la requête d'insertion dans la table 'reservation'
            $query = "INSERT INTO reservation (id_activite, id_client, nbrPresonne) VALUES (:id_activite, :id_client, :nbrPersonne)";
            $stmt = $db->prepare($query);
            $stmt->bindParam(':id_activite', $id_activite);
            $stmt->bindParam(':id_client', $client_id);
            $stmt->bindParam(':nbrPersonne', $nbrPersonne);
    
            // Exécuter la requête
            if ($stmt->execute()) {
                // Réduire le nombre de places disponibles après une réservation
                $this->places_disponibles--;
                $this->updatePlacesDisponibles($db);
                return true; // Réservation réussie
            } else {
                // Afficher les informations de débogage
                echo "Erreur lors de l'exécution de la requête : ";
                print_r($stmt->errorInfo());
                return false; // Échec de la réservation
            }
       
    }
    
    // Mise à jour du nombre de places disponibles
    private function updatePlacesDisponibles($db) {
        $query = "UPDATE activite SET places_disponibles = :places_disponibles WHERE id_activite = :id_activite";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':places_disponibles', $this->places_disponibles);
        $stmt->bindParam(':id_activite', $this->id_activite);
        $stmt->execute();
    }

    public static function getAllActivites($db) {
        $activites = [];
        $query = "SELECT * FROM activite";
        $stmt = $db->prepare($query);
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $activite = new activites(
                $row['titre'],
                $row['description'],
                $row['destination'],
                $row['prix'],
                $row['date_debut'],
                $row['date_fin'],
                $row['places_disponibles'],
                $row['type_activite'],
                $row['image_path']
            );
            $activite->setID_activite($row['id_activite']);
            $activites[] = $activite;
        }
        return $activites;
    }

    public function afficherActivites() {
        $html = "<div>";
        $html .= "<div class='bg-white border rounded-lg shadow-md p-4 hover:shadow-lg transition-shadow duration-300'>";
        $html .= "<h3 class='text-xl font-semibold mb-2'>" . $this->getTitre() . "</h3>";
        $html .= "<img src='" . $this->getImagePath() . "' alt='Image de l'activité' class='w-full h-48 object-cover rounded-md mb-4'>";
        $html .= "<p><strong>Description:</strong> " . $this->getDescription() . "</p>";
        $html .= "<p><strong>Destination:</strong> " . $this->getDestination() . "</p>";
        $html .= "<p><strong>Prix:</strong> " . $this->getPrix() . "€</p>";
        $html .= "<p><strong>Dates:</strong> Du " . $this->getDate_debut() . " au " . $this->getDate_fin() . "</p>";
        $html .= "<p><strong>Places disponibles:</strong> " . $this->getPlaces_disponibles() . "</p>";
        $html .= "<p><strong>Type:</strong> " . $this->getType_activite() . "</p>";
        // $html .= "<form method='post' action='reserver.php'>";
        // $html .= "<input type='hidden' name='id_activite' value='" . $this->getID_activite() . "'>";
        $html .= "<button type='submit' class='resrever bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400'>Reserver</button>";
        // $html .= "</form>";
        $html .= "</div>";  // Fin de la carte d'activité
        $html .= "</div>";  // Fin du conteneur de cartes
        return $html;
    }

 }


?>