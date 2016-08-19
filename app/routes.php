<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],
		['GET', '/accueil', 'Default#home', 'default_accueil'],
		['GET', '/plan_site', 'Default#planSite', 'default_planSite'],		
		['GET', '/bureau', 'Bureau#compositionBureau', 'bureau_compositionBureau'],
		['GET', '/about', 'Bureau#about', 'bureau_about'],
		['GET|POST', '/contact', 'Bureaut#contact', 'bureau_contact'],
		['GET', '/mentions_legales', 'Bureau#mentionsLegales', 'bureau_mentionsLegales'],			
		['GET', '/acces_practice', 'Practice#accesPractice', 'practice_accesPractice'],

		['GET|POST', '/connexion', 'Membre#seConnecter', 'membre_seConnecter'],
		['GET|POST', '/connexion_site', 'Membre#afficherConnexionModale', 'membre_afficherConnexionModale'],
		['GET|POST', '/change/[:numEgaMembre]', 'Membre#pwdNew', 'membre_pwdNew'],
		['GET|POST', '/profil', 'Membre#modifierProfil', 'membre_modifierProfil'],
		['GET|POST', '/deconnexion', 'Membre#seDeconnecter', 'membre_seDeconnecter'],

		['GET|POST', '/carte', 'Golf#initialiseCarte', 'golf_initialiseCarte'],	

		['GET', '/produit/affichage', 'Produit#affichage', 'produit_affichage'],
		['GET|POST', '/produit/creation', 'Produit#creation', 'produit_creation'],
		['GET|POST', '/produit/visualisation/[:id]', 'Produit#visualisation', 'produit_visualisation'],
	);