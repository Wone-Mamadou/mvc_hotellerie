<?php

class ModeleReservation extends ModeleGenerique{

    public function inscription($client, reserver $reservation){

        var_dump($client);

        $stmt = $this->pdo->prepare("INSERT INTO client VALUES(NULL, ?, ?, ?)");
        $stmt->execute([$client->getNom(), $client->getPrenom(), $client->getTel()]);

        //récupère la dernière clé
        $idClient = $this->pdo->lastInsertId();

        $reservation->setNumClient($idClient);

        $stmt = $this->pdo->prepare("INSERT INTO reserver VALUES(?, ?, ?, ?)");

        $stmt->execute([
            htmlentities($reservation->getNumClient()),
            htmlentities($reservation->getNumChambre()),
            htmlentities($reservation->getDateArrivee()),
            htmlentities($reservation->getDateDepart())
        ]);

        if( $stmt->rowCount() ){
            $_SESSION['message'] = "Reservation effectuée avec success";
        }
    }


}