<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Model\Model;
use Model\Membre\MembreModel;
use Model\Produit\ProduitModel;

class AdminController extends Controller
{

	// -----------  méthode panneauMembresAdmin ------------
	public function panneauMembresAdmin()
	{

		$MembreModel = new MembreModel;
		$MembreModel->setTable('membres'); 				// Précise la table
		$MembreModel->setPrimaryKey('id_membre'); 		// Précise clé primaire

		$ListeMembres = $MembreModel->findAll();

		$this->show('admin/gestion_membres', ['ListeMembres' => $ListeMembres]);
	}


	// -----------  méthode panneauVenteAdmin ------------
	public function panneauVenteAdmin()
	{

		$ProduitModel = new ProduitModel;
		$ProduitModel->setTable('produits'); 				// Précise la table
		$ProduitModel->setPrimaryKey('id_produit'); 		// Précise clé primaire

		$ListeProduits = $ProduitModel->findAll();

		$this->show('admin/gestion_produits', ['ListeProduits' => $ListeProduits]);
	}

} // END class
