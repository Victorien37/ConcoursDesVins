<?php

namespace App\Models;
use CodeIgniter\model;

class M_utilisateur extends \CodeIgniter\Model {
    //on indique dans la variable $table le nom de la table utilisée
    protected $table = 'membre';
    
    /**
     * Retourne le nom et prénom de l'utilisateur dont le login et le mot de passe sont passés en paramètre
     * @param $login login de l'utilisateur
     * @param $mdp mot de passe
     * @return les informations de l'utilisateur si les identifiants sont corrects
     */
    public function getUtilisateur($login, $mdp) {
        $db = \Config\Database::connect();
        return $db->table($this->table)
                ->select('nomMembre, prenomMembre, president')
                ->where('login', $login)
                ->where('mdp', sha1($mdp))
                ->get()
                ->getResult();
    }
}