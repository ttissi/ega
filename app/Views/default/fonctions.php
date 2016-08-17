<!-- Ce fichier contient l'ensemble des fonctions PHP personnalisées et écrites pour nos besoins -->


<?php 

// Fonction qui détermine l'âge d'une personne à la date du jour
function age($dateNaissance)  {

	list ($annee, $mois, $jour) = explode('-', $dateNaissance);

	$aujourdhui['jour'] 	= date('d');
	$aujourdhui['mois'] 	= date('m');
	$aujourdhui['annee'] 	= date('Y');	

	$monAge = $aujourdhui['annee'] - $annee;
	
	if ($aujourdhui['mois'] <= $mois) {
	  	if ($mois == $aujourdhui['mois']) {
	    	if ($jour > $aujourdhui['jour'])
	      		$monAge--;
	    }
	  	else
	    	$monAge--;
	}
	return $monAge;
}



?>