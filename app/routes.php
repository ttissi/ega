<?php
	
	$w_routes = array(

		// Méthode http - masque URL associé _ NomController#nomMethodeAAppeler - NomRoute
		['GET', '/', 'Default#home', 'default_home'],
		['GET', '/accueil', 'Default#home', 'default_accueil'],
		['GET|POST', '/inscription', 'Membre#inscription', 'membre_inscription'],
		['GET|POST', '/connexion', 'Membre#seConnecter', 'membre_seConnecter'],
		['GET|POST', '/profil', 'Membre#modifierProfil', 'membre_modifierProfil'],
		['GET|POST', '/carte', 'Golf#initialiseCarte', 'golf_initialiseCarte'],		
	);