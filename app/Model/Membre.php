<?php 
namespace Model;
use Modele\;
/**
* 
*/
class Membre
{
	private $idMembre;
	private $genre;
	private $firstname;
	private $lastname;
	private $dateNaissance;
	private $adresse;

	private $cp;
	private $ville;
	private $telMobile;
	private $telFixe;
	private $email;

	private $numEga;
	private $numFfg;
	private $photo;

	private $pwd;
	private $pwdConfirm;


	public function __construct(
		$idMembre,
		$genre,
		$firstname,
		$lastname,
		$dateNaissance,
		$adresse,
		$cp,
		$ville,
		$telMobile,
		$telFixe,
		$email,
		$numEga,
		$numFfg,
		$photo;
		$pwd,
		$pwdConfirm
		)
	
	{
		$this->idMembre      = $idMembre;
		$this->genre         = $genre;
		$this->firstname     = $firstname;
		$this->lastname      = $lastname;
		$this->dateNaissance = $dateNaissance;
		$this->adresse       = $adresse;
		$this->cp            = $cp;
		$this->ville         = $ville;
		$this->telMobile     = $telMobile;
		$this->telFixe       = $telFixe;
		$this->email         = $email;
		
		$this->numEga        = $numEga;
		$this->numFfg        = $numFfg;
		$this->photo;        = $photo;
		
		$this->pwd           = $pwd;
		$this->pwdConfirm    = $pwdConfirm;
	}


}

 ?>