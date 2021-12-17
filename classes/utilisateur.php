<?php

    class Utilisateur{

        private $id_util;
        private $login;
        private $mot_de_passe;
        private $role;
        
        public function __construct($id_util = 0, $login = "", $mot_de_passe = "", $role = ""){

            $this->setIdutil($id_util);
            $this->setLogin($login);
            $this->setMotdepasse($mot_de_passe);
            $this->setRole($role);
        }
        
        public function setIdutil($id_util){$this->id_util = $id_util;}
        public function setLogin($login){$this->login = $login;}
        public function setMotdepasse($mot_de_passe){$this->mot_de_passe = $mot_de_passe;}
        public function setRole($role){$this->role = $role;}

        public function getIdutil(){return $this->id_util;}
        public function getLogin(){return $this->login;}
        public function getMotdepasse(){return $this->mot_de_passe;}
        public function getRole(){return $this->role;}
    }