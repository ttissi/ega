<?php

namespace Controller;

use \W\Controller\Controller;
use Model\Golf\GolfModel;

class GolfController extends Controller
{
	
	// Je définis mon Practice EGA comme lieu central par défaut de ma carte. L'id de ce lieu est "2" dans ma table golfs

	// Initialise la carte Google Maps 
	public function initialiseCarte()
	{
		$dbgolf		= new GolfModel;
		$dbgolf		-> setTable('golfs');
		$dbgolf		-> setPrimaryKey('id_golf');

		// -- Pour centrer sur les coordonnées du Practice EGA
		DEFINE ("LIEUFAVORI", "2");
		$MonObjetGolf = $dbgolf -> find(LIEUFAVORI);

		// -- Récupération de la liste de tous les golfs
		$ListeDeMesGolfs = $dbgolf -> findAll($orderBy = "nom", $orderDir = "ASC", $limit = null, $offset = null);
		$GolfChoisi = null;
		
		if($_GET) {
			if(null !== $_GET['golf']) {
				$GolfChoisi = $dbgolf -> find($_GET['golf']);
			}
		}

		$this -> show('golf/carte', 
						[
							'golfParDefaut' => $MonObjetGolf, 
							'golfs' 		=> $ListeDeMesGolfs,
							'golfChoisi'	=> $GolfChoisi
						]);
	}

	// Permet de créer un nouveau golf partenaire
	public function creerGolf()
	{
		// Code à insérer
		$dbgolf		= new GolfModel;
		$dbgolf		-> setTable('golfs');
		$dbgolf		-> setPrimaryKey('id_golf');

		// Tableau à compléter
		$data = array('XXXXXX');

		$dbgolf -> insert($data);
		// $this	-> redirectToRoute('golf_listegolf');

	}


}