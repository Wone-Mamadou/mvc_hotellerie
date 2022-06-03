<?php

    class Reserver
    {
        private $numClient;
        private $numChambre;
        private $dateArrivee;
        private $dateDepart;
        // private $nom;
        // private $prenom;
        // private $tel;
        // private $mail;
        
        public function __construct($numClient = 0, $numChambre = 0, $dateArrivee = "", $dateDepart = "")
        {
            $this->setNumClient($numClient);
            $this->setNumChambre($numChambre);
            $this->setDateArrivee($dateArrivee);
            $this->setDateDepart($dateDepart);
            // $this->setNom($nom);
            // $this->setPrenom($prenom);
            // $this->setTel($tel);
            // $this->setMail($mail);
        }
        
        public function setNumClient($numClient)
        {
            $this->numClient = $numClient;
        }
        public function setNumChambre($numChambre)
        {
            $this->numChambre = $numChambre;
        }
        public function setDateArrivee($dateArrivee)
        {
            $this->dateArrivee = $dateArrivee;
        }
        public function setDateDepart($dateDepart)
        {
            $this->dateDepart = $dateDepart;
        }
        // public function setNom($nom){$this->nom = $nom;}
        // public function setPrenom($prenom){$this->prenom = $prenom;}
        // public function setTel($tel){$this->tel = $tel;}
        // public function setMail($mail){$this->mail = $mail;}

        public function getNumclient()
        {
            return $this->numClient;
        }
        public function getNumChambre()
        {
            return $this->numChambre;
        }
        public function getDateArrivee()
        {
            return $this->dateArrivee;
        }
        public function getDateDepart()
        {
            return $this->dateDepart;
        }
        // public function getNom(){return $this->nom;}
        // public function getPrenom(){return $this->prenom;}
        // public function getTel(){return $this->tel;}
        // public function getMail(){return $this->mail;}
    }
