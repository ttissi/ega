<?php

namespace Controller;

use \W\Controller\Controller;

class ProduitVisualisationController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function visualisation ()
	{
		$this->show('produit/visualisation');

	}

	
	
}