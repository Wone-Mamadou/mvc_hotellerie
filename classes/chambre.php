<?php

    class Chambre{

        private $numchambre;
        private $prix;
        private $nblits;
        private $nbPers;
        private $image;
        private $description;


        public function __construct($numchambre = 0, $prix = 0, $nblits = 0, $nbPers = 0, $image = "", $description = "")
        {
            $this->setNumchambre($numchambre);
            $this->setPrix($prix);
            $this->setNblits($nblits);
            $this->setNbPers($nbPers);
            $this->setImage($image);
            $this->setDescription($description);
        }

        public function setNumchambre($numchambre){$this->numchambre = $numchambre;}

        public function getNumchambre(){return $this->numchambre;}

        public function setPrix($prix){$this->prix = $prix;}

        public function getPrix(){return $this->prix;}

        public function setNblits($nblits){$this->nblits = $nblits;}

        public function getNblits(){return $this->nblits;}

        public function setNbPers($nbPers){$this->nbPers = $nbPers;}

        public function getNbPers(){return $this->nbPers;}

        public function setImage($image){$this->image = $image;}

        public function getImage(){return $this->image;}

        public function setDescription($description){$this->description = $description;}

        public function getDescription(){return $this->description;}



    }