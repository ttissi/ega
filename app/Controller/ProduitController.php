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

	public function panneauVenteAdmin()
	{

		$ProduitModel = new ProduitModel;
		$ProduitModel-> setTable('produits'); 				// Précise la table
		$ProduitModel-> setPrimaryKey('id_produit'); 		// Précise clé primaire

		$ListeProduits = $ProduitModel->findAll();

		$this->show('produit/panneau_vente_admin', ['ListeProduits' => $ListeProduits]);
	}

}