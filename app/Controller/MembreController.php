<?php

namespace Controller;

use \W\Controller\Controller;
use Model\Membre\MembreModel;
use Model\Membre\MembreAuthentificationModel;

class MembreController extends Controller
{
	/**
	 * Méthodes pour membres
	 */
	// ------------ inscription ------------ 
	public function inscription()
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
	}

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
				$Membre 			= $MembreModel->find($login);
				$PremiereConnexion 	= $Membre['premiere_connexion'];

				//if(!$PremiereConnexion) :
					//Ici il s'agit de la premiere connexion du membre

					//On vérifie le mot de passe en clair
					if($pwd == $Membre['password'])
					{
						// on update la bdd pour premire connexion = 0
						$premiereConnexion = array();
						$this->update();
					}

				//else :

					//ici, ce n'est pâs la prmeire fois, connexion normal...

				//endif;
			}

			// Si je n'ai aucun retour de la BDD le membre avec cette id ega n'existe pas

			// Si oui, je vérifie s'il s'agit de sa premiere connexion.
			// Si oui, je compare sans cryptage le mot de passe envoyé via le formulaire par mon membre par celui du membre avec le ega retourné.
			// Si c'est ok, je le connecte et je met a jour le champs premiere connexion du membre a 0 , sinon erreur EGA ne correspond pas au mdp

			// Si, non, l'utilisateur bn'est pas a sa premiere connecxcoin, j'utilise la fonctoin native de W

			// ===========================================
			// Utilisation de la méthode :
			//$id_membre = $db->isValidLoginInfo($_POST['login'], $_POST['pwd']);

			// Vérification de mon utilisateur en BDD
			if ($id_membre > 0) 
			{
				// Je crée une instance de membreModel
				$Membre = new MembreModel;
				$Membre->setPrimaryKey('id_membre'); // Précise clé primaire
				$Membre->setTable('membres'); // Précise la table

				// Je récupère les données du membre connecté en BDD via MembreModel
				// Puis je passe en session via loginUserIn()
				$db->logUserIn($Membre->find($id_membre));
				// Si tout est ok, je connecte
		
				// Je redirige comme c'est ok
				//$this->redirectToRoute('default_home');
			} // End if ($id_membre > 0)
		} // if ($_POST)

		// Envoi à la vue connexion
		$this->show('membre/connexion');
	} // End function


	// -----------  méthode newPwd ------------
	public function newPwd() 
	{
		$this->show('membre/new_pwd');
	}


	// -----------  méthode modifierProfil ------------
	public function modifierProfil() 
	{
		$this->show('membre/profil');
	}


	// ----------- méthode seDeconnecter -----------
	public function seDeconnecter()
	{
		$this->logUserOut();
	}
}



/*// Vérification login et pwd pour connexion
		if (isset($_POST['btnConnexion']))
		{
			$_POST['login'] = $login;
			$_POST['pwd']   = $pwd;

			if (!empty($_POST['login']))
			{
				echo "Vous devez remplir votre login.";
			}

			$verifLogin = $bd->prepare('SELECT num_ega FROM membres WHERE num_ega=:login');
			$verifLogin->bindValue('num_ega', $login, PDO::PARAM_STR);
			$verifLogin->execute();
			$resultLogin = $verifLogin->rowCount();

			if($resultLogin != 0)
			{
				// Comparaison du pwd de l'utilisateur avec celui de la BDD :
				if ($pwd == password_hash($pwd)) 
				{
					foreach($membre as $key => $value) 
					{
						$_POST['pwd'][$key] = $value;
					}
				} // End if ($pwd == password_hash($pwd))
			
			} // End if ($resultLogin != 0)
		} // End if (isset($_POST['btnConnexion']))*/