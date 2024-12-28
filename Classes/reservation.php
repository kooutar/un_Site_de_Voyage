<?php
      class resevation{
         private $id_user;
         private $id_activite;
         private $date_reservation;
         function __construct($id_user,$id_activite,$date_reservation)
         {
            $this->id_user=$id_user;
            $this->id_activite=$id_activite;
            $this->date_reservation=$date_reservation;
         }
         
         

      }
?>