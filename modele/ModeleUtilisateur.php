<?php

class ModeleUtilisateur extends ModeleGenerique
{
    public function connexion($login, $mot_de_passe)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM utilisateur WHERE login = ? AND mot_de_passe = ?");
        $stmt->execute([$login, $mot_de_passe]);
        
        if ($stmt->rowcount() != 0) {
            $resul = $stmt->fetch();
            // var_dump($resul);
            extract($resul);
            $utilisateur = new Utilisateur($id_util, $login, "", $role);
            $_SESSION['utilisateur'] = serialize($utilisateur);
        }
    }

    public function inscriptions()
    {
    }
}
