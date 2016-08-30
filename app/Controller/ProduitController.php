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
		
		$ProduitsTrouves = Null;
		$BaseProduitComplete = $db-> findAll();
		// echo '<pre>';print_r($BaseProduitComplete);echo '</pre>';

		// Je veux récupérer les 6 dernières annonces, non clôturées et par ordre de parution.
		// 1- Je trie la liste des produits par ordre de parution
		$TousLesProduitsParus = $db-> findAll($orderBy = "date_publication", $orderDir = "DESC", $limit = Null, $offset = Null);
		// 2- Je ne conserve que les produits n'ayant pas été clôturés, en conservant le même ordre
		$data = ['date_cloture' => '0000-00-00 00:00:00'];
		$ProduitsEnVente = $db-> search($data, $operator = 'OR');
		// echo '<pre>';print_r($DerniersProduits);echo '</pre>';

		// $DerniersProduits = $db-> findAll($orderBy = "date_publication", $orderDir = "DESC", $limit = 6, $offset = Null);

		$data = ['id_membre' => $_SESSION['user']['id_membre'], 'date_cloture' => '0000-00-00 00:00:00'];
		$MesProduitsEnVente = $db-> search($data, $operator = 'AND');
		
		if($_POST) {

			$db = new ProduitModel;
			$db-> setTable('produits');
			$db-> setPrimaryKey('id_produit');

			$criteres = [];
			if (isset($_POST['categorie'])) { 
				$criteres['categorie'] = $_POST['categorie'];
			}
			if (isset($_POST['etat'])) { 
				$criteres['etat'] = $_POST['etat'];
			}
			if (isset($_POST['sexe'])) { 
				$criteres['sexe'] = $_POST['sexe'];
			}
			if (isset($_POST['dexterite'])) { 
				$criteres['dexterite'] = $_POST['dexterite'];
			}

			$ProduitsTrouves = $db-> search($criteres, $operator = 'AND');
		}

		if (isset($ProduitsTrouves)) {
		$this->show('produit/affichage', ['DerniersProduits' => $ProduitsEnVente, 'MesDerniersProduits' => $MesProduitsEnVente, 'ProduitsTrouves' => $ProduitsTrouves]);
		} else
		{
			$this->show('produit/affichage', ['DerniersProduits' => $ProduitsEnVente, 'MesDerniersProduits' => $MesProduitsEnVente]);
		}
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
					$numProduit 	= $LastProduit[0]['id_produit'] + 1;
					// echo '<pre>';print_r($LastProduit);echo '</pre>';
					// echo '<br>'.$numProduit;
					// echo $var;
					// $app = getApp();
        			// $imgpath = $app-> getBasePath() . '/assets/img/ventes/'; 
        			$imgpath = 'assets/img/ventes/';
					
					// Traitement de l'image produit n°1;
					if ($_FILES['image1']['error'] > 0) {
						// 	echo "erreur de chargement..."
					
					} else {		// sinon stockage de l'image

					// Rajouter un traitement pour n'accepter que des fichiers image
					// et empêcher ainsi l'envoi de fichiers php, exe... qui pourraient
					// agir de façon malveillante
					// De la même façon, limiter la taille des fichiers image à accepter, quite à les redimensionner..
					
						$nomImage1 	= $_FILES['image1']['name'];
						$extension 	= pathinfo($nomImage1, PATHINFO_EXTENSION);
						//  $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
                		// if (in_array($extension_upload, $extensions_autorisees)) {traitement}
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
						$ProduitCree 	= $db-> find($resultat['id_produit']);
						// $ProduitCree 	= json_encode($ProduitCree, JSON_FORCE_OBJECT); 
						// $idProduit = $produit['id_produit'];
						// 
						$success = 'Votre annonce de vente d\'un produit a bien été créée.';
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

	// -----------  méthode Recherche Multicritères ------------
	public function rechercheMulti () 
	{

		if($_POST) {
			$db = new ProduitModel;
			$db-> setTable('produits');
			$db-> setPrimaryKey('id_produit');

			$criteres = [];
			if (isset($_POST['categorie'])) { 
				$criteres['categorie'] = $_POST['categorie'];
			}
			if (isset($_POST['etat'])) { 
				$criteres['etat'] = $_POST['etat'];
			}
			if (isset($_POST['sexe'])) { 
				$criteres['sexe'] = $_POST['sexe'];
			}
			if (isset($_POST['dexterite'])) { 
				$criteres['dexterite'] = $_POST['dexterite'];
			}
			$ProduitsTrouves = $db-> search($criteres, $operator = 'AND');
				$success = "Recherche effectuée avec succès.<br>Voici les produits concernés.";
				$this-> show('produit/affichage', ['ProduitsTrouves' => $ProduitsTrouves]);
		}
	

	}


	// -----------  méthode visualisation ------------
	public function visualisation ($id)
	{
		$db = new ProduitModel;
		$db->setTable('produits');
		$db->setPrimaryKey('id_produit');
		
		$ObjetProduit = $db->getProduit($id);

		if(($_POST) && (isset($_POST['btnSupprimer'])))
		{
			$resultat = $db-> delete($id);
			$this->redirectToRoute('produit_affichage');	
		}
		
		$this->show('produit/visualisation', ['produit'=> $ObjetProduit]);	
	}


	// -----------  méthode visualisation ------------
	public function suppression ($idProduit)
	{
		$db = new ProduitModel;
		$db->setTable('produits');
		$db->setPrimaryKey('id_produit');
		
		// $ObjetProduit = $db->getProduit($idProduit);

		$resultat = $db-> delete($idProduit);
		$this->show('produit/affichage');	
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