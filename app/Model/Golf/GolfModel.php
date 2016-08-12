<?php
namespace Model\Golf;

use Model\Golf\Golf;

class GolfModel extends \W\Model\Model 
{
	public function getGolf($idGolfSelectionne) 
	{
		$Golf = $this -> find($idGolfSelectionne);
		$ObjetGolf = new Golf 	(
									$Golf['id_golf'],
									$Golf['nom'],
									$Golf['latitude'],
									$Golf['longitude'],
									$Golf['telephone'],
									$Golf['email'],
									$Golf['adresse'],
									$Golf['code_postal'],
									$Golf['ville'],
									$Golf['web'],
									$Golf['fb'],
									$Golf['id_responsable'],
									$Golf['gf_sem'],
									$Golf['gf_we'],
									$Golf['nb_gf'],
									$Golf['commentaires'],
									$Golf['image_blason'],
									$Golf['image_golf1'],
									$Golf['image_golf2'],
									$Golf['image_golf3'],
									$Golf['page_meteo'],
									$Golf['ville_meteo']
								);

		return $ObjetGolf;
	}

}