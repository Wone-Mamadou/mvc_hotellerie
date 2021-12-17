<?php

session_start();

    include('classes/chambre.php');
    include('classes/reserver.php');
    include('classes/utilisateur.php');
    include('classes/client.php');


    include "modele/ModeleGenerique.php";
    include "modele/ModeleChambre.php";
    include "modele/ModeleReservation.php";
    include "modele/ModeleUtilisateur.php";

    include('controleur/Ctl_utilisateur.php');
    include "controleur/Ctl_detail.php";
    include "controleur/Ctl_reservation.php";

    $ctl_utilisateur = new Ctl_utilisateur();
    $ctl_utilisateur->urlutilisateur();

    $ctl_detail = new Ctl_detail();
    $ctl_detail->url_detail();

    $ctl_reservation = new Ctl_resevation();
    $ctl_reservation->urlreservation();

    // $mdl_chambre = new ModeleChambre();
    // $chambres = $mdl_chambre->getAllChambre();
    $mdl_utilisateur = new ModeleUtilisateur();
    

    if(empty($_GET))
        include("vues/accueil.phtml");

