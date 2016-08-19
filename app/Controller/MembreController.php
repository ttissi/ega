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
	
		$error = '';

		// Vérification des données POST
		if ($_POST) 
		{


			// Création d'une instance de ma classe MembreAuthentificationModel
			$MembreAuthentificationModel = new MembreAuthentificationModel;
			
			// Saisie num_ega et pwd (dans le formulaire)
			// Mon controlleur récupere les 2 infos
			$login =  trim(strip_tags($_POST['login']));
			$pwd   =  trim(strip_tags($_POST['pwd']));

			if (!empty($login) && !empty($pwd))		// Mes 2 champs ont bien été renseignés
			{
				// Je me connecte sur mon MembreModel et je récupere les infos du membre correspondant au N° de membre EGA donnée

				$MembreModel = new MembreModel;
				$MembreModel-> setTable('membres'); 			// Précise la table
				$MembreModel-> setPrimaryKey('num_ega'); 		// Précise clé primaire

				$Membre            = $MembreModel-> find($login);		// Récupération du membre concerné en BDD
				$PremiereConnexion = $Membre['premiere_connexion'];		// Vérifie en BDD s'il s'agit de la premiere connexion
				$numEgaMembre      = $Membre['num_ega'];				// Je stocke le N° de membre EGA

				$_POST['errorLogin'] = $Membre;

// ================================================
// Test si le N° de membre est valide (à faire)
// ================================================

				if ($PremiereConnexion) 			//Ici il s'agit de la premiere connexion du membre
				{
					// A la première connexion, le mot de passe correspond à son n° de licence FFG,
					// Il va être au membre de changer immédiatement son mot de passe
					if ($pwd == $Membre['password'])
					{
						$this-> redirectToRoute('membre_pwdNew', ['numEgaMembre' => $numEgaMembre]);
					} 	// End if($pwd == $Membre['password'])

				} 	// End if($PremiereConnexion) 

				else 	// Si ce n'est pas la première connexion
				{ 
					
					$membreCheck = $MembreAuthentificationModel-> isValidLoginInfo($login, $pwd);

					if ($membreCheck > 0)
					{
						// Si tout est ok, la connexion du membre est validée
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
				$error = 'Les 2 champs sont obligatoires.';
			}


		} // if ($_POST)

		// $this->show('membre/connexion'); // Envoi à la vue connexion		
		$this->show('default/home'); 		// Envoi à la vue connexion 
		// Ou header('Location: '.$_SERVER['PHP_SELF']);
		// $this->show('membre/connexion_modale', ['error' => $error]); // Envoi à la vue connexion	

	} // End function


	// -----------  méthode afficherConnexionModale ------------
	
	public function afficherConnexionModale() 
	{
		$this->show('membre/connexion_modale');
	}


	// -----------  méthode newPwd ------------
	public function pwdNew($numEgaMembre) 
	{
		
		$error = '';

		if ($_POST) 
		{
			// Vérification si l'url n'est pas changée pour modifier un autre utilisateur
			$numEgaTransmis = $numEgaMembre;

			$MembreAuthentificationModel = new MembreAuthentificationModel;

			// Mon controlleur récupere les mots de passe pour les comparer
			$pwdNew     =  trim(strip_tags($_POST['pwdNew']));
			$pwdConfirm =  trim(strip_tags($_POST['pwdConfirm']));

			if (!empty($pwdNew) && !empty($pwdConfirm))
			{									
				if ( $pwdNew === $pwdConfirm) // Même saisie pwd ok
				{
					// HASH ET UPDATE POUR INSÉRER LE NOUVEAU PWD
					
					$pwdNew = password_hash($pwdNew, PASSWORD_DEFAULT);

					// Je stocke dans un tableau les valeurs à changer dans ma BDD
					$updateNewPwd = [
						'password'           => $pwdNew,
						'premiere_connexion' => 0
					];

					$MembreModel = new MembreModel;
					$MembreModel-> setTable('membres'); 		// Précise la table
					$MembreModel-> setPrimaryKey('num_ega');	// Précise clé primaire

					$Membre            = $MembreModel-> find($numEgaTransmis);		// Récupération du membre concerné en BDD
					$PremiereConnexion = $Membre['premiere_connexion'];				// Vérifie en BDD s'il s'agit de la premiere connexion

					$MembreModel-> update($updateNewPwd, $numEgaTransmis); // Modifie les données en BDD

					// Si tout est ok, la connexion du membre est validée
					$MembreAuthentificationModel-> logUserIn($Membre);

					if ($PremiereConnexion == 1) 	// Suite à la première connexion, j'affiche la page de Profil du membre
					{					
						$this-> redirectToRoute('membre_modifierProfil');
					} 
					else
					{
						$this-> redirectToRoute('default_home');						
					}    

				} 
				else
				{
					$error = 'Les mots de passe ne correspondent pas.';
				}		// Fin Bloc if ($pwdNew === $pwdConfirm)

			} 	
			else 
			{
				$error = 'Chaque champ doit être rempli.';
			}		// Fin Bloc if(null!==$pwdNew && null!==$pwdConfirm)

		} // if ($_POST)
		$this->show('membre/new_pwd', ['error' => $error]);
							
	} // End function pwdNew



	// -----------  méthode modifierProfil ------------
	public function modifierProfil() 
	{
		if(isset($_POST['btnModifier']))
		{
			
			$MembreModel = new MembreModel;
			$MembreModel-> setTable('membres'); 			// Précise la table
			$MembreModel-> setPrimaryKey('id_membre'); 		// Précise clé primaire

			$idMembre = $_SESSION['user']['id_membre'];

			// Je retravaille les données saisies pour éviter les injections SQL/HTML
			$adresse   = trim(strip_tags($_POST['adresse']));
			$cp        = trim(strip_tags($_POST['cp']));
			$ville     = trim(strip_tags($_POST['ville']));
			$telMobile = trim(strip_tags($_POST['telMobile']));
			$telFixe   = trim(strip_tags($_POST['telFixe']));
			$email     = trim(strip_tags($_POST['email']));

// Quid d'une mise à jour des champs non modifiés ? => inutile

			// Je stocke dans un tableau les valeurs à changer dans ma BDD
			$data = [
				'adresse'     => $adresse,
				'code_postal' => $cp,
				'ville'       => $ville,
				'mobile'      => $telMobile,
				'fixe'        => $telFixe,
				'email'       => $email
			];
			
			// Je lance la mise à jour de la table
			if ($MembreModel-> update($data, $idMembre))
			{
				$Membre                      = $MembreModel-> find($idMembre);
				$MembreAuthentificationModel = new MembreAuthentificationModel;

				$MembreAuthentificationModel-> logUserIn($Membre);
				
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
		$MembreAuthentificationModel-> logUserOut();

		echo "Vous avez bien été déconnecté.";
		$this->redirectToRoute('default_home');
	}

} // END class


