<?php 
namespace Model\Produit;

/**
* 
*/
class Produit
{
	

	//Définition des propriétés de la classe

private	$id_produit;

private $intitule;
private	$categorie;

private	$description;
private	$etat;
private	$dexterite;
private	$sexe;
private	$prix;

private	$date_publication;
private	$date_cloture;

private	$image_produit1;
private	$image_produit2;
private	$image_produit3;
private $tel_contact;
private	$id_membre;
private	$email_contact;


	

	//Mise en place du constructeur
	public function __construct(
		$id_produit,

		$intitule,
		$categorie,

		$description,
		$etat,
		$dexterite,
		$sexe,
		$prix,

		$date_publication,
		$date_cloture,

		$image_produit1,
		$image_produit2,
		$image_produit3,
		$tel_contact,
		$id_membre,
		$email_contact)
	
		{
			$this -> id_produit			= $id_produit;
			$this -> intitule			= $intitule;
			$this -> categorie			= $categorie;
			$this -> description		= $description;
			$this -> etat				= $etat;
			$this -> dexterite			= $dexterite;
			$this -> sexe				= $sexe;
			$this -> prix				= $prix;
			$this -> date_publication	= $date_publication;
			$this -> date_cloture		= $date_cloture;
			$this -> image_produit1		= $image_produit1;
			$this -> image_produit2		= $image_produit2;
			$this -> image_produit3		= $image_produit3;
			$this -> tel_contact		= $tel_contact;
			$this -> id_membre			= $id_membre;
			$this -> email_contact		= $email_contact;
			
		}

		public function getID_PRODUIT() 
		{
			return $this -> id_produit;
		}

		public function getINTITULE() 
		{
			return $this -> intitule;
		}

		public function getCATEGORIE() 
		{
			return $this -> categorie;
		}

		public function getDESCRIPTION() 
		{
			return $this -> description;
		}

		public function getETAT() 
		{
			return $this -> etat;
		}

		public function getDEXTERITE() 
		{
			return $this -> dexterite;
		}

		public function getSEXE() 
		{
			return $this -> sexe;
		}

		public function getPRIX() 
		{
			return $this -> prix;
		}

		public function getDATE_PUBLICATION() 
		{
			return $this -> date_publication;
		}

		public function getDATE_CLOTURE() 
		{
			return $this -> date_cloture;
		}

		public function getIMAGE_PRODUIT1() 
		{
			return $this -> image_produit1;
		}

		public function getIMAGE_PRODUIT2() 
		{
			return $this -> image_produit2;
		}

		public function getIMAGE_PRODUIT3() 
		{
			return $this -> image_produit3;
		}

		public function getTEL_CONTACT() 
		{
			return $this -> tel_contact;
		}

		public function getID_MEMBRE() 
		{
			return $this -> id_membre;
		}

		public function getEMAIL_CONTACT() 
		{
			return $this -> email_contact;
		}

//**************************************************************



	public function setID_PRODUIT($id_produit){
		$this->id_produit = $id_produit;
	}

	

	public function setINTITULE($intitule){
		$this->intitule = $intitule;
	}

	

	public function setCATEGORIE($categorie){
		$this->categorie = $categorie;
	}

	

	public function setDESCRIPTION($description){
		$this->description = $description;
	}

	
	public function setETAT($etat){
		$this->etat = $etat;
	}

	

	public function setDEXTERITE($dexterite){
		$this->dexterite = $dexterite;
	}

	

	public function setSEXE($sexe){
		$this->sexe = $sexe;
	}

	

	public function setPRIX($prix){
		$this->prix = $prix;
	}

	

	public function setDATE_PUBLICATION($date_publication){
		$this->date_publication = $date_publication;
	}

	

	public function setDATE_CLOTURE($date_cloture){
		$this->date_cloture = $date_cloture;
	}

	

	public function setIMAGE_PRODUIT1($image_produit1){
		$this->image_produit1 = $image_produit1;
	}

	
	public function setIMAGE_PRODUIT2($image_produit2){
		$this->image_produit2 = $image_produit2;
	}

	

	public function setIMAGE_PRODUIT3($image_produit3){
		$this->image_produit3 = $image_produit3;
	}

	

	public function setTEL_CONTACT($tel_contact){
		$this->tel_contact = $tel_contact;
	}

	

	public function setID_MEMBRE($id_membre){
		$this->id_membre = $id_membre;
	}

	

	public function setEMAIL_CONTACT($email_contact){
		$this->email_contact = $email_contact;
	}



 }