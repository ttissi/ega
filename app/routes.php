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
		['GET', 		'/horaires_practice', 	'Practice#horairesPractice', 'practice_horairesPractice'],
		

		// Routes dédiées à la gestion des membres
		['GET|POST', 	'/connexion', 			'Membre#seConnecter', 'membre_seConnecter'],
		['GET|POST', 	'/connexion_site', 		'Membre#afficherConnexionModale', 'membre_afficherConnexionModale'],		
		['GET|POST', 	'/change/[:numEgaMembre]','Membre#pwdNew', 'membre_pwdNew'],
		['GET|POST', 	'/profil/[:idMembre]', 	'Membre#modifierProfil', 'membre_modifierProfil'],
		//['GET|POST', 	'/profil/[:idMembre]', 	'Membre#adminModifieProfil', 'membre_adminModifieProfil'],		
		['GET|POST', 	'/deconnexion', 		'Membre#seDeconnecter', 'membre_seDeconnecter'],
		// ['GET|POST', 	'/reset', 				'Membre#resetMotDePasse', 'membre_resetMotDePasse'],
		['GET|POST', 	'/change/activite/[:idMembre]', 	'Membre#changeActivite', 'membre_changeActivite'],

		['GET|POST', 	'/membre/admin', 		'Membre#admin', 'membre_admin'],
		['GET|POST', 	'/admin/membre', 		'Admin#panneauMembresAdmin', 'gestion_membres'],
		['GET|POST', 	'/admin/vente', 		'Admin#panneauVenteAdmin', 'gestion_vente'],
		// ['GET|POST', 	'/admin/location', 		'Location#admin', 'location_admin'],
		// ['GET|POST', 	'/admin/competition', 	'Competition#admin', 'competition_admin'],						

		// Routes dédiées à la gestion de la carte Goole
		['GET|POST', 	'/carte', 				'Golf#initialiseCarte', 'golf_initialiseCarte'],

		// Routes dédiées à la gestion des ventes de produits
		['GET|POST',	'/produit/affichage', 	'Produit#affichage', 'produit_affichage'],	
		['GET|POST', 	'/produit/creation', 	'Produit#creation', 'produit_creation'],
		['GET|POST', 	'/produit/visualisation/[:id]', 'Produit#visualisation', 'produit_visualisation'],
		['GET|POST', 	'/produit/supression/[:id]', 	'Produit#suppression', 'produit_suppression']
	);