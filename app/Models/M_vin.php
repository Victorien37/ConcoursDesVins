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
    public function getListeVin() {
        $db = \Config\Database::connect();
        return $db->table($this->table)
                ->select('nomProducteur', 'nomAppellation', 'nomCommercial', 'couleur')
                ->join('vin', 'appellation', 'idAppellation' == 'id')
                ->join('vin', 'producteur', 'idProducteur' == 'id')
                ->where('nomProducteur', $this->getListeProducteur())
                ->distinct()
                ->get()
                ->getResult();
    }
}
