<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('C_accueil');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'C_accueil::index');

//Route concernant tout les utilisateurs
$routes->add('Accueil', 'C_accueil');
$routes->add('Login', 'C_accueil::login');
$routes->add('Logout', 'C_accueil::logout');
$routes->add('Public', 'C_public');
$routes->add('Privee', 'C_authentifiee', ['filter' => 'Auth']);
$routes->add('Connexion', 'C_connexion');
$routes->add('Utilisateur', 'Entrainement/C_utilisateur::consultationUtilisateur', ['filter' => 'Auth']);
$routes->add('OuvrirConcours', 'C_ouvrirConcours');
$routes->add('ConsulterNotes','C_consulterNotes');
$routes->add('CloturerConcours','C_cloturerConcours');
$routes->add('AfficherCompteRendu','C_compteRendu');
$routes->add('AjaxOuvrirConcours', 'C_ajaxOuvrirConcours');
$routes->add('AjaxOuvrirConcours', 'C_ajaxOuvrirConcours');
$routes->add('InsertionOK', 'C_InsertionOK');
$routes->add('InsertionFail', 'C_InsertionFail');
$routes->add('Privilege', 'C_privilege', ['filter' => 'Auth']);
$routes->add('SaisirNotes', 'C_saisir_notes', ['filter' => 'Auth']);
$routes->add('ConsulterNotes', 'C_consulter_notes', ['filter' => 'Auth']);
$routes->add('ListeProducteur', 'Entrainement/Ajax/C_ajax::utilisateursProducteur', ['filter'=>'auth']);
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
