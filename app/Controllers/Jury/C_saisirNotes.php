<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controllers;
/**
 * Description of C_consulter_notes
 *
 * @author Victorien
 */
class C_saisirNotes extends BaseController {
    public function index() {
        
        $m_producteur = model('App\Models\M_producteur');
        //On appel la méthode du modele pour récupérer la liste des privilèges
        $data['listeProducteur'] = $m_producteur->getListeProducteur();
        return view('pages/Jury/v_saisirNotes', $data);
    }
    
    public function vin() {
        $m_vin = model('App\Models\M_vin');
        //On appel la méthode du modele pour récupérer la liste des privilèges
        $data['listeVin'] = $m_vin->getListeVin();
        return view('pages/Jury/v_saisirNotes', $data);
    }
}