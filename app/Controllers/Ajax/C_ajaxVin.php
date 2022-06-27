<?php

namespace App\Controllers\Ajax;

use CodeIgniter\Controller;

/**
 * Controleur qui va gérer les action ajax d'un utilisateur
 */
class C_ajaxVin extends Controller {
    
    /**
     * Demande au modele M_utilisateur d'exécuter la fonction
     * getProducteur() avec le nom du producteur reçu en post
     * Encodage des données reçus en JSON
     */
//    public function utilisateursProducteur() {
//        $m_producteur = model('App\Models\M_producteur');
//        $producteur = $login = $this->request->getVar('producteur');
//        $data = $m_producteur->getProducteur($producteur);
//        
//        echo json_encode($data);
//    }
    
    public function utilisateursProducteur() {
        $m_vin = model('App\Models\M_vin');
        $vin = $this->request->getVar('id');
        $data = $m_vin->getListeVin($vin);
        echo json_encode($data);
    }
}