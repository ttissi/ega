<?php

namespace Controller;

use \W\Controller\Controller;
use Model\Membre\MembreModel;
use Model\Membre\MembreAuthentificationModel;
use \W\Model\ConnectionModel;
use \W\Model\Model;
use \W\Model\UsersModel;
use \W\Security\AuthentificationModel;
use \W\Security\AuthorizationModel;

class MembreController extends Controller
{
	/**
	 * Méthodes pour membres
	 */
	// ------------ méthode seConnecter ------------ 
	public function seConnecter() 
	{

		if (!isset($error)) { $error = '';} 

		// Vérification des données POST
		if ($_POST) 
		{
			// Création d'une instance de ma classe MembreAuthentificationModel
			$MembreAuthentificationModel = new MembreAuthentificationModel;
			
			// Saisie num_ega et pwd (dans le formulaire)
			// Mon controlleur récupere les 2 infos
			$login =  trim(strip_tags($_POST['login']));
			$pwd   =  trim(strip_tags($_POST['pwd']));

			if (!empty($login) && !empty($pwd))
			{
				// Je me connecte sur mon MembreModel et je récupere les infos pour le membre avec l'ega correspondant

				$MembreModel = new MembreModel;
				$MembreModel-> setTable('membres'); 			// Précise la table
				$MembreModel-> setPrimaryKey('num_ega'); 		// Précise clé primaire

				// -- Vérification qu'il s'agit de la premiere connexion
				// -- D'abord je récupère le membre avec l'ID EGA passer en parametre.
				$Membre            = $MembreModel-> find($login);
				$PremiereConnexion = $Membre['premiere_connexion'];
				$numEgaMembre      = $Membre['num_ega'];

				if ($Membre == '')		// Je vérifie si le n° de carte de membre existe
				{
					$error = 'Le N° de membre précédemment renseigné n\'existe pas.<br> Veuillez recommencer !';
				}

				else if($PremiereConnexion) //Est-ce la premiere connexion du membre ?
				{
					//On vérifie le mot de passe en clair
					if ($pwd == $Membre['password'])
					{
						$success = 'Votre première connexion est validée, mais pour des raisons de sécurité, vous devez désormais changer le mot de passe actuel.';
						if (!isset($error)) { $error = ''; }
						// $this-> redirectToRoute('membre_pwdNew', ['numEgaMembre' => $numEgaMembre, 'error' => $error, 'success' => $success]);
						$this->show('membre/new_pwd', ['numEgaMembre' => $numEgaMembre, 'error' => $error, 'success' => $success]);

					} // End if($pwd == $Membre['password'])
					else {
						$error = 'Votre login ou votre mot de passe n\'est pas correct.';
					}

				} // End if($PremiereConnexion) 

				else // Si ce n'est pas la première connexion
				{
					$membreCheck = $MembreAuthentificationModel-> isValidLoginInfo($login, $pwd);

					if ($membreCheck > 0)
					{
						// Si tout est ok, je connecte
						$MembreAuthentificationModel-> logUserIn($Membre);
					
						$this-> redirectToRoute('default_home'); // Je redirige comme c'est ok
					}

					else
					{
						$error = 'Votre login ou votre mot de passe n\'est pas correct.';
					}


				} // End else

			} // End if(null!==$login && null!==$pwd)
			else 
			{
				$error = 'Les deux champs sont obligatoires !';
			}

		} // if ($_POST)

		if (!isset($error)) { $error = ''; }
		if (!isset($success)) { $success = ''; }
		$this->show('membre/connexion', ['error' => $error, 'success' => $success]); // Envoi à la vue connexion
		// $this->show('membre/connexion'); // Envoi à la vue connexion
		

	} // End function


	// -----------  méthode afficherConnexionModale ------------
	
	public function afficherConnexionModale() 
	{
		$this->show('membre/connexion_modale');
	}

	// -----------  méthode afficherConnexionModale ------------
	
	public function resetMotDePasse() 
	{
		/*
		1) Demander au membre de fournir 
			- son N° de carte EGA
			- sa date de naissance
			Pour vérifier qu'il est bien la personne qu'il prétend être
		2) Lui indiquer qu'un courriel va lui être adressé à l'email fourni à EGA, qui contiendra un lien pour réinitialiser son mot de passe
		3) S'il n'a pas fourni d'adresse email, il peut utiliser le formulaire de contact proposé en bas de page
		 */
	}


	// -----------  méthode newPwd ------------
	public function pwdNew($numEgaMembre) 
	{	

		// Par mesure de sécurité, je stocke le n° de membre récupéré à ce moment, avant qu'il ne soit éventuellement intercepté et modifié par une personne mal intentionnée
		$numEgaTransmis 				= $numEgaMembre;

		if (!isset($error)) { $error = '';}
		if (!isset($success)) { $success = '';}

		// Vérification des données POST
		if (isset($_POST) && !empty($_POST['pwdNew']))
		{	
			$MembreAuthentificationModel 	= new MembreAuthentificationModel;

			// Mon controlleur récupere les mots de passe pour les comparer
			$pwdNew     =  trim(strip_tags($_POST['pwdNew']));
			$pwdConfirm =  trim(strip_tags($_POST['pwdConfirm']));

			if (!empty($pwdNew) && !empty($pwdConfirm))		// Les 2 mots de passe ont-ils bien été remplis ?
			{									
				if ( $pwdNew == $pwdConfirm) 	// les 2 mots de passe correspondent
				{
					// Hashage du nouveau de mot de passe pour ne pas être envoyé en clair
					$pwdNew = password_hash($pwdNew, PASSWORD_DEFAULT);

					// Préparation des données à mettre à jour en BDD
					$updateNewPwd = [
						'password'           => $pwdNew,
						'premiere_connexion' => 0
					];

					$MembreModel = new MembreModel;
					$MembreModel-> setTable('membres'); 		// Précise la table
					$MembreModel-> setPrimaryKey('num_ega');	// Précise clé primaire

					$Membre 			= $MembreModel-> find($numEgaTransmis);		// Trouve le membre concerné en BDD
					$PremiereConnexion 	= $Membre['premiere_connexion']; 			// Je tiens à savoir si c'est la première connexion du membre

					$MembreModel->update($updateNewPwd, $numEgaTransmis); 	// Modifie données dans BDD
					
					if (!isset($_SESSION)) {	// Evitons de déconnecter un administrateur qui aurait initié le changement de mot de passe
						$MembreAuthentificationModel-> logUserIn($Membre);		// Je connecte le membre et ouvre sa session
					}

					if($PremiereConnexion == 1)		// Si 1ère connexion, le membre doit vérifier ses informations de profil
					{
						$success = 'Votre mot de passe a bien été changé.<br>Veuillez SVP vérifier vos informations personnelles.';
						$this	-> redirectToRoute('membre_modifierProfil', ['idMembre' => $Membre['id_membre'], 'success' => $success, 'error' => $error]);
					}
					else if ($Membre['admin'] == 1)
					{	// Pour l'administrateur, j'affiche le panneau de gestion des membres
						$this-> redirectToRoute('membre_admin');
					}
					else 		
					{		// Sinon on renvoie le membre sur la page d'accueil du site
						$this-> redirectToRoute('default_home');
					}

				} // END if($pwdNew == $pwdConfirm)
				else
				{
					$error = 'Les mots de passe ne correspondent pas.';
				}

			}// END if(!empty($pwdNew) && !empty($pwdConfirm)) 
			else
			{
				$error = 'Chaque champ doit être rempli.';
			}

		} // if ($_POST)
		
		// $this->show('membre/new_pwd', ['error' => $error]);
		$this->show('membre/new_pwd', ['numEgaMembre' => $numEgaMembre, 'error' => $error, 'success' => $success]);
							
	} // End function pwdNew


	// -----------  méthode modifierProfil ------------
	public function modifierProfil($idMembre) 
	{

		$AllowAccess = new AuthorizationModel;
		$AllowAccess-> isGranted(0);

		$Membre = $this->getUser();

		if ($idMembre != $Membre['id_membre'] AND $Membre['admin'] == 0) { $this-> redirectToRoute('membre_modifierProfil', ['idMembre' => $Membre['id_membre']]); }

		if (!isset($error)) { $error = '';}
		if (!isset($success)) { $success = '';}

		$MembreModel = new MembreModel;
		$MembreModel-> setTable('membres'); 			// Précise la table
		$MembreModel-> setPrimaryKey('id_membre'); 		// Précise clé primaire
		
		$MembreConnecte = $MembreModel-> find($_SESSION['user']['id_membre']);
		$MembreChoisi 	= $MembreModel-> find($idMembre);

		if (isset($_POST['btnModifier']))
		{
			
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

			// Mise à jour des informations modifiées en BDD
			if ($MembreModel->update($data, $idMembre))
			{
				
				// Je modifie mon objet MembreChoisi qui vient de subir des modifications
				// afin d'être répercutées sur l'affichage
				$MembreChoisi 	= $MembreModel-> find($idMembre);
				
				$success = "Vos modifications ont bien été enregistrées.";
			}

			else 
			{
				$error = "Vos modifications n'ont pas pu être enregistrées";
			}

		} // END if(isset($_POST['btnModifier']))


		$this-> show('membre/profil', ['idMembre'=> $idMembre, 'membreChoisi' => $MembreChoisi, 'success' => $success, 'error' => $error]);

	} // END function modifierProfil() 


	// ----------- méthode seDeconnecter -----------
	public function seDeconnecter()
	{
		$MembreAuthentificationModel = new MembreAuthentificationModel;
		$MembreAuthentificationModel->logUserOut();

		echo "Vous avez bien été déconnecté.";
		$this->redirectToRoute('default_home');
	}


	// -----------  méthode admin ------------
	public function admin()
	{
		$AllowAccess = new AuthorizationModel;
		$AllowAccess-> isGranted(1);
		$MembreModel = new MembreModel;
		$MembreModel->setTable('membres'); 				// Précise la table
		$MembreModel->setPrimaryKey('id_membre'); 		// Précise clé primaire

		$ListeMembresTriNom = $MembreModel->findAll($orderBy = "nom", $orderDir = "ASC", $limit = null, $offset = null);
		$ListeMembresTriNumEga = $MembreModel->findAll($orderBy = "num_ega", $orderDir = "ASC", $limit = null, $offset = null);


		$this->show('membre/admin', ['ListeMembresTriNom' => $ListeMembresTriNom, 'ListeMembresTriNumEga' => $ListeMembresTriNumEga]);
	}

	// -----------  méthode changeActivite ------------
	public function changeActivite($idMembre)
	{
		$AllowAccess = new AuthorizationModel;
		$AllowAccess-> isGranted(1);
		if (!isset($error)) { $error = '';}
		if (!isset($success)) { $success = '';}

		$MembreModel = new MembreModel;
		$MembreModel->setTable('membres'); 				// Précise la table
		$MembreModel->setPrimaryKey('id_membre'); 		// Précise clé primaire

		$Membre = $MembreModel-> find($idMembre);	
		// echo '<br><br><br><pre>';print_r($Membre);echo '</pre>';

		// if(isset($_POST['btnModifier']))
		// {

			if ($Membre['actif'] == 1) { $actif = 0; } else { $actif = 1; }

			$data = ['actif' => $actif];
			
			// Mise à jour en BDD pour le membre concerné
			if($MembreModel->update($data, $idMembre))
			{
				$success = "Le statut du membre a été correctement modifié.";
			}

			else 
			{
				$error = "Le statut du membre n'a pu correctement être effectué !";
			}


		// } // END if(isset($_POST['btnModifier']))

			$this->redirectToRoute('membre_admin');
	}

} // END class

