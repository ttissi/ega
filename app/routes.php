<?php
	
	$w_routes = array(

		// Méthode http - masque URL associé _ NomController#nomMethodeAAppeler - NomRoute
		['GET', '/', 'Default#home', 'default_home'],
		['GET', '/accueil', 'Default#home', 'default_accueil'],
		['GET', '/plan_site', 'Default#planSite', 'default_planSite'],		
		['GET', '/bureau', 'Bureau#compositionBureau', 'bureau_compositionBureau'],
		['GET', '/about', 'Bureau#about', 'bureau_about'],
		['GET|POST', '/contact', 'Bureaut#contact', 'bureau_contact'],
		['GET', '/mentions_legales', 'Bureau#mentionsLegales', 'bureau_mentionsLegales'],			
		['GET', '/acces_practice', 'Practice#accesPractice', 'practice_accesPractice'],
						
		['GET|POST', '/inscription', 'Membre#inscription', 'membre_inscription'],
		['GET|POST', '/connexion', 'Membre#seConnecter', 'membre_seConnecter'],
		['GET|POST', '/profil', 'Membre#modifierProfil', 'membre_modifierProfil'],
		['GET|POST', '/profilIntegration', 'Membre#modifierProfilIntegration', 'membre_modifierProfilIntegration'],		
		['GET|POST', '/carte', 'Golf#initialiseCarte', 'golf_initialiseCarte'],		
		['GET', '/produit/affichage', 'Produit#affichage', 'produit_affichage'],
		['GET|POST', '/produit/creation', 'ProduitCreation#creation', 'produitCreation_creation'],
	);