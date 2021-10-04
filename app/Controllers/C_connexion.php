<?php

namespace App\Controllers;

class C_connexion extends BaseController {

    public function index() {
        $data = [];
        $data['titre'] = 'Connexion Espace Utilisateur';
        //Chargement de la bibliotheque en tant que service
        $validation = \Config\Services::validation();

        //On définit le groupe de règles de la configuration de validation au service de validation
        $validation->setRuleGroup('reglesConnexion');

        //Validation des données transmises à partir d'une requête HTTP
        //L'objet en cours Request prendra toutes les données d'entrée et les définira comme données à valider
        if ($validation->withRequest($this->request)->run()) {
            //Cas ou les données ont été validées
            //On récupère les données saisies
            $login = $this->request->getVar('login');
            $mdp = $this->request->getVar('mdp');
            //On crée une instance pour le modèle m_utilisateur
            $m_utilisateur = model('App\Models\M_utilisateur');

            //On appelle la méthode du modèle pour récuperer l'utilisateur
            $result = $m_utilisateur->getUtilisateur($login, $mdp);
            //Si la requete renvoie une ligne
            if ($result) {
                //On ajoute le nom, le prenom de l'utilisateur
                //dans les données de la session
                $connexiondata = [
                    'username' => $result[0]->nomMembre,
                    'prenom' => $result[0]->prenomMembre,
                    'president' => $result[0]->president,
                    'isLoggedIn' => true,
                ];
                session()->set($connexiondata);

                //L'utilisateur est redirigé vers la page d'accueil
                return redirect()->to('Accueil');
            } else {
                //Cas ou l'utilisateur n'a pas été trouvé
                //Un message erreur personnalisé est défini
            $data['errors'] = ["Login ou mot de passe incorrect, modifiez vos informations de connexions"];
                echo view('pages/v_connexion', $data);
            }
        } else {
            //Cas ou les données n'ont pas été validées
            //On récupère la liste des erreurs
            $data['errors'] = $validation->getErrors();
            //On passe la liste des erreurs à la vue
            echo view('pages/v_connexion', $data);
        }
    }

}

?>