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
	


	public function __construct(
		$idMembre,
		$genre,
		
		)
	
	{
		$this->idMembre      = $idMembre;
		$this->genre         = $genre;
		
	}


}

 ?>