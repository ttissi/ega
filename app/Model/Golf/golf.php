<?php

namespace Model\Golf;

class Golf
{
	
	//Définition des propriétés de la classe
	private $id_golf;
	private $nom;
	//--
	private $latitude;
	private $longitude;
	//--
	private $telephone;
	private $email;
	private $adresse;
	private $code_postal;
	private $ville;
	//--
	private $web;
	private $fb;
	//--
	private $id_responsable;
	private $gf_sem;
	private $gf_we;
	private $nb_gf;
	//--
	private $commentaires;
	private $image_blason;
	private $image_golf1;
	private $image_golf2;
	private $image_golf3;
	//--
	private $page_meteo;
	private $ville_meteo;


	//Mise en place du constructeur
	public function __construct(
		$id_golf,
		$nom,
		$latitude,
		$longitude,
		$telephone,
		$email,
		$adresse,
		$code_postal,
		$ville,
		$web,
		$fb,
		$id_responsable,
		$gf_sem,
		$gf_we,
		$nb_gf,
		$commentaires,
		$image_blason,
		$image_golf1,
		$image_golf2,
		$image_golf3,
		$page_meteo,
		$ville_meteo)
		{
			$this -> id_golf		= $id_golf;
			$this -> nom			= $nom;
			$this -> latitude		= $latitude;
			$this -> longitude		= $longitude;
			$this -> telephone		= $telephone;
			$this -> email			= $email;
			$this -> adresse		= $adresse;
			$this -> code_postal	= $code_postal;
			$this -> ville			= $ville;
			$this -> web			= $web;
			$this -> fb				= $fb;
			$this -> id_responsable	= $id_responsable;
			$this -> gf_sem			= $gf_sem;
			$this -> gf_we			= $gf_we;
			$this -> nb_gf			= $nb_gf;
			$this -> commentaires	= $commentaires;
			$this -> image_blason	= $image_blason;
			$this -> image_golf1	= $image_golf1;
			$this -> image_golf2	= $image_golf2;
			$this -> image_golf3	= $image_golf3;
			$this -> page_meteo		= $page_meteo;
			$this -> ville_meteo	= $ville_meteo;
		}
		
	//Mise en place des getters
	public function getID_GOLF() 
	{
		return $this -> id_golf;
	}

	public function getNOM() 
	{
		return $this -> nom;
	}

	public function getLATITUDE() 
	{
		return $this -> latitude;
	}

	public function getLONGITUDE() 
	{
		return $this -> longitude;
	}

	public function getTELEPHONE() 
	{
		return $this -> telephone;
	}

	public function getEMAIL() 
	{
		return $this -> email;
	}

	public function getADRESSE() 
	{
		return $this -> adresse;
	}

	public function getCODE_POSTAL() 
	{
		return $this -> code_postal;
	}

	public function getVILLE() 
	{
		return $this -> ville;
	}

	public function getWEB() 
	{
		return $this -> web;
	}

	public function getFB() 
	{
		return $this -> fb;		
	}

	public function getID_RESPONSABLE() 
	{
		return $this -> id_responsable;
	}

	public function getGF_SEM() 
	{
		return $this -> gf_sem;
	}

	public function getGF_WE() 
	{
		return $this -> gf_we;
	}

	public function getNB_GF() 
	{
		return $this -> nb_gf;
	}

	public function getCOMMENTAIRES() 
	{
		return $this -> commentaires;
	}

	public function getIMAGE_BLASON() 
	{
		return $this -> image_blason;
	}

	public function getIMAGE_GOLF1() 
	{
		return $this -> image_golf1;
	}

	public function getIMAGE_GOLF2() 
	{
		return $this -> image_golf2;
	}

	public function getIMAGE_GOLF3() 
	{
		return $this -> image_golf3;
	}

	public function getPAGE_METEO() 
	{
		return $this -> page_meteo;
	}

	public function getVILLE_METEO() 
	{
		return $this -> ville_meteo;
	}

/* ******************************************************************** */
/* 			Definitions des autres méthodes appliquées au golf          */
/* ******************************************************************** */

	// Affiche module de sélection d'un golf partenaire sur panneau de gauche
	public function selectiongolf()
	{

	}

	// Affiche les marqueurs pour toutes les adresses de la table golfs
/*	public function affichemarqueur (GoogleMap map) {

		private $chemin_blason = '/img/golfs/blasons/';
		$image_blason = $chemin_blason . $image_blason;

	    map.addMarker(new MarkerOptions()
	        .position(new LatLng($latitude, $longitude))
	        .title($nom));
	    	.snippet('Plus de détails...');
	    	.icon(BitmapDescriptorFactory.fromAsset($image_blason));
	}*/

	// Affiche Tooltip sur marqueur au "survol"
	public function afficheresumegolf()
	{

	}	

	// Affiche les détails du golf "cliqué" sur la carte
	public function affichedetailsgolf() 
	{

	}

	// Affiche itinéraire d'une adresse donnée vers le golf sélectionné
	public function afficheitineraire() 
	{

	}	
	
	// Met à jour le module météo pour la ville du golf sélectionné
	// Par défaut: la ville d'Ermont (base du practice EGA)
	public function villemeteo() 
	{

	}	
	



}