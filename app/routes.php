<?php
	
	$w_routes = array(
		['GET', 		'/', 					'Default#home', 'default_home'],
		['GET', 		'/accueil', 			'Default#home', 'default_accueil'],
		['GET', 		'/plan_site', 			'Default#planSite', 'default_planSite'],		
		['GET', 		'/bureau', 				'Bureau#compositionBureau', 'bureau_compositionBureau'],
		['GET', 		'/about', 				'Bureau#about', 'bureau_about'],
		['GET|POST', 	'/contact', 			'Bureaut#contact', 'bureau_contact'],
		['GET', 		'/mentions_legales',	'Bureau#mentionsLegales', 'bureau_mentionsLegales'],			
		['GET', 		'/acces_practice', 		'Practice#accesPractice', 'practice_accesPractice'],

		// Routes dédiées à la gestion des membres
		['GET|POST', 	'/connexion', 			'Membre#seConnecter', 'membre_seConnecter'],
		['GET|POST', 	'/connexion_site', 		'Membre#afficherConnexionModale', 'membre_afficherConnexionModale'],		
		['GET|POST', 	'/change/[:numEgaMembre]','Membre#pwdNew', 'membre_pwdNew'],
		['GET|POST', 	'/profil/[:idMembre]', 	'Membre#modifierProfil', 'membre_modifierProfil'],
		//['GET|POST', 	'/profil/[:idMembre]', 	'Membre#adminModifieProfil', 'membre_adminModifieProfil'],		
		['GET|POST', 	'/deconnexion', 		'Membre#seDeconnecter', 'membre_seDeconnecter'],
		// ['GET|POST', 	'/reset', 				'Membre#resetMotDePasse', 'membre_resetMotDePasse'],

		['GET|POST', 	'/admin/membre', 		'Membre#admin', 'membre_admin'],
		['GET|POST', 	'/admin/vente', 		'Membre#admin', 'vente_admin'],
		['GET|POST', 	'/admin/location', 		'Membre#admin', 'location_admin'],
		['GET|POST', 	'/admin/competition', 	'Membre#admin', 'competition_admin'],						

		// Routes dédiées à la gestion de la carte Goole
		['GET|POST', 	'/carte', 				'Golf#initialiseCarte', 'golf_initialiseCarte'],

		// Routes dédiées à la gestion des ventes de produits
		['GET', 		'/produit/affichage', 	'Produit#affichage', 'produit_affichage'],
		['GET|POST', 	'/produit/creation', 	'ProduitCreation#creation', 'produitCreation_creation'],
	);