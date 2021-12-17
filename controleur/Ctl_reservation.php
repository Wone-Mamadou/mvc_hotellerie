<?php 

class Ctl_resevation{

    public function urlreservation(){
        $mdl_reservation = new ModeleReservation();

        if(isset($_GET['action'])){
            $action = $_GET['action'];
           
            if( $action == "reservation"){
                include "vues/reservation.phtml";

                if ( isset($_POST['nom'])) {
                   
                    $client = new Client(0, $_POST['nom'], $_POST['prenom'], $_POST['tel']);
                    $reservation = new Reserver(0, $_POST['numChambre'], $_POST['dateA'],$_POST['dateD']);
                   
                    $mdl_reservation->inscription($client, $reservation);

                    header("location: ?action=reservation");
                    exit;
                }  
                
            }
        }
    }
}