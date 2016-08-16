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
	// ------------ inscription ------------ 
/*	public function inscription()
	{
		// Vérification des données POST
		if($_POST)
		{
			// Vérifications d'usage des saisies
			#Code...

			// Insertion en BDD 
			// J'appelle mon Model chargée de l'inscription de mon membre
			$db = new MembreModel; // J'instancie un objet.
			$Membre->setPrimaryKey('id_membre'); // Je précise pour W la clé primaire de ma table
			$Membre->setTable('membres'); // Je précise également la table

			// Je crée un tableau avec mes données
			$data = array();
			
				// id_membre => null //(mettre à null pour qu'il le fasse automatiquement)
				// adresse => $_POST['adresse'],
				// 'password' => password_hash($_POST['pwd'], PASSWORD_DEFAULT);
			

			// J'appelle la méthode insert du Model
			$db->insert($data); // Je passe en paramètre mon tableau de données

			// Je fais une redirection en cas de succès.
			$this->show('default/home');
		}

		// Envoie à la vue inscription du dossier membre
		$this->show('membre/inscription');
	}*/

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
			$login = $_POST['login'];
			$pwd   = $_POST['pwd'];

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
			$pwdNew     = $_POST['pwdNew'];
			$pwdConfirm = $_POST['pwdConfirm'];

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

		$this->show('membre/pwd_new');

	} // End function pwdNew


	// -----------  méthode modifierProfil ------------
	public function modifierProfil() 
	{
		//$this->allowTo('actif');
		$this->show('membre/profil');
	}

	public function modifierProfilIntegration() 
	{
		//$this->allowTo('actif');
		$this->show('membre/profil-ti');
	}

	// ----------- méthode seDeconnecter -----------
	public function seDeconnecter()
	{
		$MembreAuthentificationModel->logUserOut();
		$this->show('default/home');
	}

} // End class

// ===========================================
// Utilisation de la méthode :
//$id_membre = $db->isValidLoginInfo($_POST['login'], $_POST['pwd']);