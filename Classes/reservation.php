<?php
class reservation {
    private $id_user;
    private $id_activite;
    private $date_reservation;
    private $nombre_places;
    private $statut;

    function __construct($id_user, $id_activite, $date_reservation, $nombre_places, $statut) {
        $this->id_user = $id_user;
        $this->id_activite = $id_activite;
        $this->date_reservation = $date_reservation;
        $this->nombre_places = $nombre_places;
        $this->statut = $statut;
    }

    public function getIdUser() { return $this->id_user; }
    public function getIdActivite() { return $this->id_activite; }
    public function getDateReservation() { return $this->date_reservation; }
    public function getNombrePlaces() { return $this->nombre_places; }
    public function getStatut() { return $this->statut; }

    public static function getAllReservations($db) {
        $reservations = [];
        $query = "SELECT * FROM reservation";
        $stmt = $db->prepare($query);
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $reservations[] = new reservation(
                $row['id_client'],
                $row['id_activite'],
                $row['date_reservation'],
                $row['nbrPresonne'],
                $row['statut']
            );
        }
        return $reservations;
    }

    public static function updateReservationStatus($db, $id_client, $id_activite, $status) {
        $query = "UPDATE reservation SET statut = :statut WHERE id_client = :id_client AND id_activite = :id_activite";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':statut', $status);
        $stmt->bindParam(':id_client', $id_client);
        $stmt->bindParam(':id_activite', $id_activite);
        $stmt->execute();
    }

    public function afficherReservation() {
        $html = "<tr class='border-t'>";
        $html .= "<td class='py-2 px-4'>" . $this->getIdUser() . "</td>";
        $html .= "<td class='py-2 px-4'>" . $this->getDateReservation() . "</td>";
        $html .= "<td class='py-2 px-4'>" . $this->getNombrePlaces() . "</td>";
        $html .= "<td class='py-2 px-4'>" . $this->getStatut() . "</td>";
        $html .= "<td class='border-b p-3'>";
        $html .= "<form method='post' action='manage_reservations.php'>";
        $html .= "<input type='hidden' name='id_client' value='" . $this->getIdUser() . "'>";
        $html .= "<input type='hidden' name='id_activite' value='" . $this->getIdActivite() . "'>";
        $html .= "<button type='submit' name='action' value='accept' class='text-green-500 hover:underline'>Accept</button> | ";
        $html .= "<button type='submit' name='action' value='refuse' class='text-red-500 hover:underline'>Refuse</button>";
        $html .= "</form>";
        $html .= "</td>";
        $html .= "</tr>";
        return $html;
    }
}
?>
