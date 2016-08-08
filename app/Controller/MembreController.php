<?php

namespace Controller;

use \W\Controller\Controller;
use Model\MembreModel;

class MembreController extends Controller
{
	/**
	 * Page mon inscription
	 */
	public function inscription()
	{
		$this->show('/membre/inscription');
	}

	public function modifierProfil() 
	{
		$this->show('/membre/profil');
	}

	public function seConnecter() 
	{
		$this->show('/membre/connexion');

		// Vérification login et pwd pour connexion
		if (isset($_POST['btnConnexion']))
		{
			$_POST['login'] = $login;
			$_POST['pwd']   = $pwd;

			$verifLogin = $bd->prepare('SELECT ??? FROM membre WHERE ??? =:login');
			$verifLogin->bindValue(':???', $login, PDO::PARAM_STR);
			$verifLogin->execute();
			$resultLogin = $verifLogin->rowCount();

			if($resultLogin = 0)
			{
				echo "Votre login n'est pas correcte.";
			}

			$verifPwd = $bd->prepare('SELECT password FROM membre WHERE password =:pwd');
			$verifPwd->bindValue('password', $pwd, PDO::PARAM_STR);
			$verifPwd->exec();
			$resultPwd = $verifPwd->rowCount();

			if($resultPwd = 0)
			{
				echo "Le mot de passe saisi n'est pas correcte.";
			}
		}
	}

	public function seDeconnecter()
	{
		session_destroy();
	}
}