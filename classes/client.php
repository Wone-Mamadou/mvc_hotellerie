<?php

    class Client{

        private $numclient;
        private $nom;
        private $prenom;
        private $tel;
      


        public function __construct($numclient = 0, $nom = "", $prenom = "", $tel = 0)
        {
            $this->setNumclient($numclient);
            $this->setNom($nom);
            $this->setPrenom($prenom);
            $this->setTel($tel);
            
        }

        public function setNumclient($numclient){$this->numclient = $numclient;}

        public function getNumclient(){return $this->numclient;}

        public function setNom($nom){$this->nom = $nom;}

        public function getNom(){return $this->nom;}

        public function setPrenom($prenom){$this->prenom = $prenom;}

        public function getPrenom(){return $this->prenom;}

        public function setTel($tel){$this->tel = $tel;}

        public function getTel(){return $this->tel;}



    }