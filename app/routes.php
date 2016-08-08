<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],
		['GET', '/accueil', 'Default#home', 'default_accueil'],
		['GET|POST', '/inscription', 'Membre#inscription', 'membre_inscription'],
		['GET|POST', '/connexion', 'Membre#seConnecter', 'membre_seConnecter'],
		['GET|POST', '/profil', 'Membre#modifierProfil', 'membre_modifierProfil'],
		['GET', '/produit/affichage', 'Produit#affichage', 'produit_affichage'],
		['GET|POST', '/produit/creation', 'ProduitCreation#creation', 'produitCreation_creation'],
	);