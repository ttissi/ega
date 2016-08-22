<?php 
namespace Model\Produit;

use Model\Produit\Produit;

class ProduitModel extends \W\Model\Model 
{	

	protected $table = 'produits';
	// propriété contenant le nom de la clé primaire (id par défaut)
	protected $primaryKey;
	
	// Connexion à la base de données
	protected $dbh;

	

	public function getProduit($idProduitARecuperer) 
	{
		$Produit = $this -> find($idProduitARecuperer);
		$ObjetProduit = new Produit 	(
			$Produit['id_produit'],
			$Produit['intitule'],
			$Produit['categorie'],
			$Produit['description'],
			$Produit['etat'],
			$Produit['dexterite'],
			$Produit['sexe'],
			$Produit['prix'],
			$Produit['date_publication'],
			$Produit['date_cloture'],
			$Produit['image_produit1'],
			$Produit['image_produit2'],
			$Produit['image_produit3'],
			$Produit['tel_contact'],
			$Produit['id_membre'],
			$Produit['email_contact']
		);

		return $ObjetProduit;
	}

	public function getIdMembreProduit($idMembre) 
	{
		$Produit = $this -> findAll($idMembre);
		$ObjetAllProduit = new Produit 	(
			$Produit['id_produit'],
			$Produit['intitule'],
			$Produit['categorie'],
			$Produit['description'],
			$Produit['etat'],
			$Produit['dexterite'],
			$Produit['sexe'],
			$Produit['prix'],
			$Produit['date_publication'],
			$Produit['date_cloture'],
			$Produit['image_produit1'],
			$Produit['image_produit2'],
			$Produit['image_produit3'],
			$Produit['tel_contact'],
			$Produit['id_membre'],
			$Produit['email_contact']
		);

		return $ObjetAllProduit;
	}

	// public function getAllProduit($idProduitARecuperer) 
	// {
	// 	$AllProduit = $this -> findAll($idProduitARecuperer);
	// 	$ObjetAllProduit = new Produit 	(
	// 		$Produit['id_produit'],
	// 		$Produit['intitule'],
	// 		$Produit['categorie'],
	// 		$Produit['description'],
	// 		$Produit['etat'],
	// 		$Produit['dexterite'],
	// 		$Produit['sexe'],
	// 		$Produit['prix'],
	// 		$Produit['date_publication'],
	// 		$Produit['date_cloture'],
	// 		$Produit['image_produit1'],
	// 		$Produit['image_produit2'],
	// 		$Produit['image_produit3'],
	// 		$Produit['tel_contact'],
	// 		$Produit['id_membre'],
	// 		$Produit['email_contact']
	// 	);

	// 	return $ObjetAllProduit;
	// }
}

 	