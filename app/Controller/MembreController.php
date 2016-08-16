<?php

namespace Controller;

use \W\Controller\Controller;
use Model\Membre\MembreModel;
use Model\Membre\MembreAuthentificationModel;
use \W\Model\ConnectionModel;
use \W\Model\Model;
use \W\Model\UsersModel;
use \W\Security\AuthentificationModel;

class MembreController extends Controller
{
	/**
	 * Méthodes pour membres
	 */
	// ------------ méthode seConnecter ------------ 
	public function seConnecter() 
	{
		// Vérification des données POST
		if ($_POST) 
		{
			// Création d'une instance de ma classe MembreAuthentificationModel
			$MembreAuthentificationModel = new MembreAuthentificationModel;
			
			// Saisie num_ega et pwd (dans le formulaire)
			// Mon controlleur récupere les 2 infos
			$login =  trim(strip_tags($_POST['login']));
			$pwd   =  trim(strip_tags($_POST['pwd']));

			if(null!==$login && null!==$pwd)
			{
				// Je me connecte sur mon MembreModel et je récupere les infos pour le membre avec l'ega correspondant

				$MembreModel = new MembreModel;
				$MembreModel->setTable('membres'); // Précise la table
				$MembreModel->setPrimaryKey('num_ega'); // Précise clé primaire

				// -- Vérification qu'il s'agit de la premiere connexion
				// -- D'abord je récupère le membre avec l'ID EGA passer en parametre.
				$Membre            = $MembreModel->find($login);
				$PremiereConnexion = $Membre['premiere_connexion'];
				$numEgaMembre      = $Membre['num_ega'];

				if($PremiereConnexion) //Ici il s'agit de la premiere connexion du membre
				{
					//On vérifie le mot de passe en clair
					if($pwd == $Membre['password'])
					{
						$this->redirectToRoute('membre_pwdNew', ['numEgaMembre' => $numEgaMembre]);
					} // End if($pwd == $Membre['password'])

				} // End if($PremiereConnexion) 

				else // Si ce n'est pas la première connexion
				{ 
					
					$membreCheck = $MembreAuthentificationModel->isValidLoginInfo($login, $pwd);

					if($membreCheck > 0)
					{
						// Si tout est ok, je connecte
						$MembreAuthentificationModel->logUserIn($Membre);
					
						$this->redirectToRoute('membre_modifierProfil'); // Je redirige comme c'est ok
					}

					else
					{
						echo 'Votre login ou votre mot de passe n\'est pas correcte.';
					}


				} // End else

			} // End if(null!==$login && null!==$pwd)

		} // if ($_POST)
		
		$this->show('membre/connexion'); // Envoi à la vue connexion

	} // End function

	// -----------  méthode newPwd ------------
	public function pwdNew($numEgaMembre) 
	{
		
		if ($_POST) 
		{
			$MembreAuthentificationModel = new MembreAuthentificationModel;

			// Mon controlleur récupere les mots de passe pour les comparer
			$pwdNew     =  trim(strip_tags($_POST['pwdNew']));
			$pwdConfirm =  trim(strip_tags($_POST['pwdConfirm']));

			if(null!==$pwdNew && null!==$pwdConfirm)
			{									
				if ( $pwdNew == $pwdConfirm) // Même saisie pwd ok
				{
					// HASH ET UPDATE POUR INSÉRER LE NOUVEAU PWD
					
					$pwdNew = password_hash($pwdNew, PASSWORD_DEFAULT);

					$updateNewPwd = [
						'password'           =>$pwdNew,
						'premiere_connexion' => 0
					];

					$MembreModel = new MembreModel;
					$MembreModel->setTable('membres'); // Précise la table
					$MembreModel->setPrimaryKey('num_ega');

					$MembreModel->update($updateNewPwd, $numEgaMembre); // Modifie données dans BDD

					$this->redirectToRoute('membre_seConnecter');

				} // End if(null!==$pwdNew && null!==$pwdConfirm)

			} // End if($pwdNew == $pwdConfirm)

		} // if ($_POST)
		$this->show('membre/new_pwd');
							
	} // End function pwdNew


	// -----------  méthode modifierProfil ------------
	public function modifierProfil() 
	{
		if(isset($_POST['btnModifier']))
		{
			
			$MembreModel = new MembreModel;
			$MembreModel->setTable('membres'); // Précise la table
			$MembreModel->setPrimaryKey('id_membre'); // Précise clé primaire

			$idMembre = $_SESSION['user']['id_membre'];

			$adresse   = trim(strip_tags($_POST['adresse']));
			$cp        = trim(strip_tags($_POST['cp']));
			$ville     = trim(strip_tags($_POST['ville']));
			$telMobile = trim(strip_tags($_POST['telMobile']));
			$telFixe   = trim(strip_tags($_POST['telFixe']));
			$email     = trim(strip_tags($_POST['email']));

			$data = [
				'adresse'     => $adresse,
				'code_postal' => $cp,
				'ville'       => $ville,
				'mobile'      => $telMobile,
				'fixe'        => $telFixe,
				'email'       => $email
			];
			
			// Update
			if($MembreModel->update($data, $idMembre))
			{
				$Membre                      = $MembreModel->find($idMembre);
				$MembreAuthentificationModel = new MembreAuthentificationModel;

				$MembreAuthentificationModel->logUserIn($Membre);
				
				echo "Vos modifications ont bien été enregistrées.";
			}

			else 
			{
				echo "Vos modifications n'ont pas pu être enregistrées";
			}
		} // END if(isset($_POST['btnModifier']))

		//$this->allowTo('actif');
		$this->show('membre/profil');
	} // END function modifierProfil() 


	// ----------- méthode seDeconnecter -----------
	public function seDeconnecter()
	{
		$MembreAuthentificationModel = new MembreAuthentificationModel;
		$MembreAuthentificationModel->logUserOut();

		echo "Vous avez bien été déconnecté.";
		$this->show('default/home');
	}

} // END class

