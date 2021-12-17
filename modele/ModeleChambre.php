<?php

class ModeleChambre extends ModeleGenerique{

    public function getAllChambre(){

        $resultat = $this->getAll('chambre');
        // var_dump($resultat);
        $chambres = [];
        foreach($resultat as $key => $value){
            // var_dump($value);
            $chambre = new Chambre($value['numChambre'], $value['prix'], $value['nbLits'], $value['nbPers'], $value['image'], $value['description']);
            $chambres[] = $chambre;
            // var_dump($chambres);
        }
        return $chambres;
    }

    public function getChambre($numChambre){
        $cham = $this->getOne("chambre", $numChambre);
        // var_dump($cham);
        extract($cham);
        return $chambre = new Chambre($numChambre, $prix, $nbLits,  $nbPers , $image, $description);
    }
}