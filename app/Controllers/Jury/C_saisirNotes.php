<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controllers\Jury;
use App\Controllers\BaseController;
/**
 * Description of C_saisirNotes
 *
 * @author Victorien
 */
class C_saisirNotes extends BaseController {
    public function index() {
        
        $m_producteur = model('App\Models\M_producteur');
        $m_vin = model('App\Models\M_vin');
        //On appel la méthode du modele pour récupérer la liste des privilèges
        $data['listeProducteur'] = $m_producteur->getListeProducteur();
        // $vins = $m_vin->getListeVin();
        // foreach ($vins as $vin) {
        //     echo $vin->nomCommercial;
        // }
        return view('pages/Jury/v_saisirNotes', $data);
    }
    
//    public function vin() {
//        $m_vin = model('App\Models\M_vin');
//        //On appel la méthode du modele pour récupérer la liste des privilèges
//        $data['listeVin'] = $m_vin->getListeVin();
//        return view('pages/Jury/v_saisirNotes', $data);
//    }
}