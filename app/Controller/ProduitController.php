<?php

namespace Controller;

use \W\Controller\Controller;
use \App\Controller\UploadController;
use \W\Model\Model;
use Model\Produit\ProduitModel;

class ProduitController extends Controller
{


	public function affichage()
	{
		
		$this->show('produit/affichage');
	}

	public function creation()
	{	
		$newName1 = "";
		$newName2 = "";
		$newName3 = "";
		//Je vérifie que des données ont bien été transmise via POST
		if($_POST) {
			print_r($_POST);
			//Si la variable POST NOM MATIERE existe, je poursuit le traitement.
			if(isset($_POST['intitule'])) {
				
				//Si cette meme variable n'est pas vide, je poursuit le traitement
				if(!empty($_POST['intitule'])) {
					
					//J'initialise la connexion à la BDD
					$db = new ProduitModel;
					
					//je n'oublie pas de définir la table et clé primaire
					$db->setTable('produits');
					$db->setPrimaryKey('id_produit');
					
					if ($_FILES['image1']['error']>0) {

					// 	echo "erreur de chargement...";
					
					} else {
					
					// sinon stockage de l'image

					// var_dump($_FILES);
					
					// $resultat = move_uploaded_file($_FILES['image1']['tmp_name'], '../public/assets/img/upload/'.$_FILES['image1']['name']);
					$nomImage1 = $_FILES['image1']['name'];
					$extension = pathinfo($nomImage1, PATHINFO_EXTENSION);
					$newName1 = '12_' . time() . '_1.' . $extension;
					// echo $newName1;
					// $newName1 = resizeImage($name1, '50', '20');
					$pathName1	= $this->assetUrl('img/ventes/') . $newName1;
					// $pathName1 ='../public/assets/img/ventes/' . $newName1;
					$resultat = rename($_FILES['image1']['tmp_name'], $pathName1);						
					
					if ($resultat) {
					
						echo "image enregistrée"."</br>";
					
						}
					
					}

					if ($_FILES['image2']['error']>0) {

					// 	echo "erreur de chargement...";
					
					} else {
					
					// sinon stockage de l'image
					
					// $resultat = move_uploaded_file($_FILES['image2']['tmp_name'], '../public/assets/img/upload/'.$_FILES['image2']['name']);
					$nomImage2 = $_FILES['image2']['name'];
					$extension = pathinfo($nomImage2, PATHINFO_EXTENSION);
					$newName2 = '12_' . time() . '_2.' . $extension;
					// echo $newName1;
					// $pathName2	= '../public/assets/img/ventes/' . $newName2;
					$pathName2	= $this->assetUrl('img/ventes/') . $newName2;
					$resultat = rename($_FILES['image2']['tmp_name'], $pathName2);


					if ($resultat) {
					
						echo "image enregistrée"."</br>";
					
						}
					
					}

					if ($_FILES['image3']['error']>0) {

					// 	echo "erreur de chargement...";
					
					} else {
					
					// sinon stockage de l'image
					
					// $resultat = move_uploaded_file($_FILES['image3']['tmp_name'], '../public/assets/img/upload/'.$_FILES['image3']['name']);
					
					$nomImage3 = $_FILES['image3']['name'];
					$extension = pathinfo($nomImage3, PATHINFO_EXTENSION);
					$newName3 = '12_' . time() . '_3.' . $extension;
					// echo $newName1;
					// $pathName3	= '../public/assets/img/ventes/' . $newName3;
					$pathName3	= $this->assetUrl('img/ventes/') . $newName3;
					$resultat = rename($_FILES['image3']['tmp_name'], $pathName3);



					if ($resultat) {
					
						echo "image enregistrée"."</br>";
					
						}
					
					}
					
					// $URLimage1 = $_FILES['image1']['name'];
					// $URLimage2 = $_FILES['image2']['name'];
					// $URLimage3 = $_FILES['image3']['name'];

	

    // var_dump($_FILES);

					//Je créer un tableau associatif avec d'un coté mes champs en BDD et de l'autre leurs valeurs.
					$data = array(
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
						'id_membre'				=> '12',
						'tel_contact'			=> $_POST['tel_contact'],
						'email_contact'			=> $_POST['email_contact']
						);
					// print_r($_POST);
					// print_r($_FILES);



					//j'appel en suite la fonction insert() hérite de W Model.
					$produit = $db->insert($data);
					$idProduit = $produit['id_produit'];

					$this->redirectToRoute('produit_visualisation',['id' => $idProduit]);
				
				}
				
			}
			
		}
		
		$this->show('produit/creation');

	}

	public function visualisation ($id)
	
	{
		$db = new ProduitModel;
		$db->setTable('produits');
		$db->setPrimaryKey('id_produit');
		
		$ObjetProduit = $db->getProduit($id);
		
		// var_dump($ObjetProduit);
		$this->show('produit/visualisation',

				['produit'=>$ObjetProduit]

					);	


	}

}


