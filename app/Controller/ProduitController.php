<?php

namespace Controller;

use \W\Controller\Controller;
use \App\Controller\UploadController;
use \W\Model\Model;
use Model\Produit\ProduitModel;

use Model\Membre\MembreModel;
use Model\Membre\MembreAuthentificationModel;
use \W\Model\ConnectionModel;

use \W\Model\UsersModel;
use \W\Security\AuthentificationModel;

class ProduitController extends Controller
{

	// -----------  méthode affichage ------------
	public function affichage()
	{		
		$db = new ProduitModel;
		$db-> setTable('produits');
		$db-> setPrimaryKey('id_membre');
			
		$ObjetAllProduit = $db-> findAll($orderBy = "date_publication", $orderDir = "DESC", $limit = 6, $offset = Null);
		
		$this-> show('produit/affichage', ['ObjetAllProduit' => $ObjetAllProduit]);
	}


	// -----------  méthode MembreProduit ------------
	public function MembreProduit()
	{		
		$data = new ProduitModel;
		$data-> setTable('produits');
		$data-> setPrimaryKey('id_membre');

		$IdMembreProduit 	= $_SESSION['user']['id_membre'];
		$MembreProduit 		= $data-> find($IdMembreProduit);

		$this-> show('produit/affichage', ['MembreProduit' => $MembreProduit]);

		// $db = new ProduitModel;
		// $db->setTable('produits');
		// $db->setPrimaryKey('id_membre');

		// $id_membre = $_SESSION['user']['id_membre'];
		// $MembreProduit = $db->findAll($id_membre);
		// $this->show('produit/affichage');
		// $this->show('produit/affichage', ['ObjetProduit' => $ObjetProduit]);
	}

	// -----------  méthode creation ------------
	public function creation()
	{	
		$newName1 = "";
		$newName2 = "";
		$newName3 = "";
		// $data = "";
		
		//Je vérifie que des données ont bien été transmise via POST
		if (isset($_POST['btnValider'])) {
			
			if (isset($_POST['intitule'])) {
				
				//Si cette même variable n'est pas vide, je poursuit le traitement
				if (!empty($_POST['intitule'])) {
					
					// Préparation des paramètres de récupération de la table concernée en BDD
					$db = new ProduitModel;
					$db-> setTable('produits');
					$db-> setPrimaryKey('id_produit');

					$LastProduit 	= $db-> findAll($orderBy = 'id_produit', $orderDir = 'DESC', $limit = 1, $offset = null);
					$numProduit 	= $LastProduit['id_produit'] + 1;

					// $app = getApp();
        			// $imgpath = $app-> getBasePath() . '/assets/img/ventes/'; 
        			$imgpath = 'assets/img/ventes/';
					
					// Traitement de l'image produit n°1;
					if ($_FILES['image1']['error'] > 0) {
						// 	echo "erreur de chargement..."
					
					} else {		// sinon stockage de l'image
					
						$nomImage1 	= $_FILES['image1']['name'];
						$extension 	= pathinfo($nomImage1, PATHINFO_EXTENSION);
						$newName1 	= $_SESSION['user']['num_ega'] . '_' . $numProduit . '_1.' . $extension;
						// echo $newName1;
						// $newName1 = resizeImage($name1, '50', '20');
						// $pathName1 	= $this->assetUrl('img/ventes/') . $newName1;
						$pathName1 	= $imgpath . $newName1;
						$resultat 	= move_uploaded_file($_FILES['image1']['tmp_name'], $pathName1);						
						if ($resultat) { echo "Image 1 bien enregistrée.</br>"; }
					}

					// Traitement de l'image produit n°1
					if ($_FILES['image2']['error'] > 0) {
						// 	echo "erreur de chargement...";
					
					} else {		// sinon stockage de l'image
					
						$nomImage2 	= $_FILES['image2']['name'];
						$extension 	= pathinfo($nomImage2, PATHINFO_EXTENSION);
						$newName2 	= $_SESSION['user']['num_ega'] . '_' . $numProduit . '_2.' . $extension;
						// echo $newName2;
						// $newName2 = resizeImage($name2, '50', '20');
						$pathName2 	= $imgpath . $newName2;
						$resultat 	= rename($_FILES['image2']['tmp_name'], $pathName2);						
						if ($resultat) { echo "Image 2 bien enregistrée.</br>"; }
					}
					
					// Traitement de l'image produit n°1
					if ($_FILES['image3']['error'] > 0) {
						// 	echo "erreur de chargement...";
					
					} else {		// sinon stockage de l'image
					
						$nomImage3 	= $_FILES['image3']['name'];
						$extension 	= pathinfo($nomImage3, PATHINFO_EXTENSION);
						$newName3 	= $_SESSION['user']['num_ega'] . '_' . $numProduit . '_3.' . $extension;
						// echo $newName13;
						// $newName3 = resizeImage($name3, '50', '20');
						$pathName3 	= $imgpath . $newName3;
						$resultat 	= rename($_FILES['image3']['tmp_name'], $pathName3);						
						if ($resultat) { echo "Image 3 bien enregistrée.</br>"; }
					}
					
					// Préparation des données qui seront mises à jour en BDD
					$data = [
						'id_produit'			=> NULL,
						'intitule' 				=> $_POST['intitule'],
						'categorie'				=> $_POST['categorie'],
						'description'			=> $_POST['description'],
						'etat'					=> $_POST['etat'],
						'dexterite'				=> $_POST['dexterite'],
						'sexe'					=> $_POST['sexe'],
						'prix'					=> $_POST['prix'],
						'date_cloture'			=> NULL,
						'image_produit1'		=> $newName1,
						'image_produit2'		=> $newName2,
						'image_produit3'		=> $newName3,
						'id_membre'				=> $_SESSION['user']['id_membre'],
						'tel_contact'			=> $_POST['tel_contact'],
						'email_contact'			=> $_POST['email_contact']
					];

					// Insertion des caractéristiques du produit  en BDD
					if ($resultat = $db-> insert($data))
					{
						//$resultat 		= $db-> lastInsertId();
						$ProduitCree 	= $db-> find($resultat['id_produit']);
						$ProduitCree 	= json_encode($ProduitCree, JSON_FORCE_OBJECT); 
						// $idProduit = $produit['id_produit'];
						// 
						$success = "Votre annonce de vente d'un produit a bien été créée.";
						$this-> redirectToRoute('produit_visualisation', ['id' => $resultat['id_produit'], 'produit' => $ProduitCree, 'success' => $success]);
					}
					else 
					{
						$error = "Désolé, votre annonce n'a pu être créée !";
					}
				
				}		// Fin TEST if (!empty($_POST['intitule']))

			}		// Fin TEST if (isset($_POST['intitule']))
			
		}		// Fin TEST if (isset($_POST['btnValider']))

		$this-> show('produit/creation');
	}

	// -----------  méthode suppression ------------
	public function supprimer ($id) 
	{

		if (isset($_POST['btnSupprimer'])) {

			$db = new ProduitModel;
			$db-> setTable('produits');
			$db-> setPrimaryKey('id_produit');

			$ProduitASupprimer = $db-> find($_POST['id_produit']);
			
			// Efface le produit en base
			if ($resultat = $db-> delete($_POST['id_produit'])) {
				$success = "Votre annonce a bien été supprimée.";
			}
			else
			{
				$error = "La suppression n'a pu être réalisée !";
			}

		}
		
		$this->show('produit/affichage');

	}


	// -----------  méthode visualisation ------------
	public function visualisation ($id)
	{
		$db = new ProduitModel;
		$db->setTable('produits');
		$db->setPrimaryKey('id_produit');
		
		$ObjetProduit = $db->getProduit($id);
		
		// var_dump($ObjetProduit);
		$this->show('produit/visualisation', ['produit'=>$ObjetProduit]);	
	}

	// -----------  méthode panneauVenteAdmin ------------
	public function panneauVenteAdmin()
	{

		$ProduitModel = new ProduitModel;
		$ProduitModel-> setTable('produits'); 				// Précise la table
		$ProduitModel-> setPrimaryKey('id_produit'); 		// Précise clé primaire

		$ListeProduits = $ProduitModel->findAll();

		$this->show('produit/panneau_vente_admin', ['ListeProduits' => $ListeProduits]);
	}

}