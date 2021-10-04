<?php
namespace App\Controllers;
class C_accueil extends BaseController {
    public function index() {
        echo view('pages/v_accueil.php');
    }
    
    /**
     * Affiche la page de connexion
     */
    public function login() {
        //Définit les données à envoyer à la vue, en l'ocurrence le titre
        $data['titre'] = "Connexion Espace Utilisateur";
        //Charge la vue en passant des données en paramètre
        echo view('pages/v_connexion', $data);
    }
    
    /**
     * Déconnecte l'utilisateur et redirige sur la page d'accueil
     */
    public function logout() {
        //Détruit la session
        session()->destroy();
        return redirect()->to('Accueil');
    }
}
?>