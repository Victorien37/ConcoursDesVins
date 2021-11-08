<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Models;

/**
 * Description of M_producteur
 *
 * @author Victorien
 */
class M_producteur extends \CodeIgniter\Model {
    //on indique dans la variable $table le nom de la table utilisée
    protected $table = 'producteur';
    
    /**
     * 
     * @param type $login
     * @param type $mdp
     * @return type
     */
    public function getListeProducteur() {
        $db = \Config\Database::connect();
        return $db->table($this->table)
                ->select('nomProducteur')
                ->distinct()
                ->get()
                ->getResult();
    }
    
}
