<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Models;

/**
 * Description of M_vin
 *
 * @author Victorien
 */
class M_vin extends \CodeIgniter\Model {
    //on indique dans la variable $table le nom de la table utilisée
    protected $table = 'vin';
    
    /**
     * 
     * @return type
     */
    public function getListeVin($id) {
        $db = \Config\Database::connect();
        return $db->table($this->table)
                ->select('id, nomCommercial, couleur')
                ->where('idProducteur', $id)
                ->orderBy('id')
                ->get()
                ->getResult();
    }
}