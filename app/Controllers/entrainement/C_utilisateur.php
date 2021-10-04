<?php
namespace App\Controllers\Entrainement;
use App\Controllers\BaseController;

/**
 * Description of C_utilisateur
 * Contrôleur qui va gérer les actions d'administration d'un utilisateur connecté
 * @author Victorien
 */
class C_utilisateur extends BaseController {
    public function consultationUtilisateur() {
        $m_utilisateur = model('App\Models\m_utilisateur');
        //On appel la méthode du modele pour récupérer la liste des privilèges
        $data['listePrivileges'] = $m_utilisateur->getListePrivilege();
        return view('pages/entrainement/v_liste_utilisateurs', $data);
    }
}
