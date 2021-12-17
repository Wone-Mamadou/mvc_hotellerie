<?php

class Ctl_utilisateur{
   
    public function urlutilisateur(){
        $mdl_utilisateur = new ModeleUtilisateur();
        

        if(isset($_GET['action'])){
            $action = $_GET['action'];
            
            if( $action == 'connexion'){
                include "vues/connexion.phtml";
               
               

                if( isset($_POST['login']) ){
                    $mdl_utilisateur = new ModeleUtilisateur();
                   
                    $mdl_utilisateur->connexion($_POST['login'], $_POST['mdp']);
                    header("location: .");
                    exit;
                }
                
            }elseif($action == "deconnexion"){
                session_destroy();
                header("location: ?action=connexion");
                exit;
            }elseif($action == 'inscription'){
                include "vues/inscription.phtml";
            }
        }
    }
}