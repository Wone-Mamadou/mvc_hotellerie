<?php 

class Ctl_detail{

    
    public function url_detail(){
        $mdl_chambre = new ModeleChambre();
       

        if(isset($_GET['action'])){
            $action = $_GET['action'];

            // if( $action = "getdetail"){
                
            //     $mdl_chambre = new ModeleChambre();
            //     $chambres = $mdl_chambre->getAllChambre();
            //     include "vues/detail.phtml";

            // }else
            if( $action == "get" && ctype_digit($_GET['numChambre']) ){

                $mdl_chambre = new ModeleChambre();
                $chambre = $mdl_chambre->getChambre($_GET['numChambre']);

                include "vues/detail.phtml";

            }elseif( $action == "gets" && ctype_digit($_GET['numChambre']) ){

                $mdl_chambre = new ModeleChambre();
                $chambre = $mdl_chambre->getChambre($_GET['numChambre']);

                include "vues/detail.phtml";

        }
    }
}
}