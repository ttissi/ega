<?php

namespace Controller;

use \W\Controller\Controller;

class ProduitController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */

	public function affichage()
	{
		$this->show('produit/affichage');
	}

}