/*$(document).ready(function() {

	// JS POUR LE CONTROLE DES FORMULAIRES
	console.log("Document chargé (main.js).");

	//**************** ÉVENEMENT *******************
	//**********************************************
	var $eltForm = $("#formProfil");

	// Ciblage d'un bouton avec un sélecteur CSS
	// C'est pratique quand l'élément ne possède pas d'ID
	var $btnSubmit = $("#formProfil button[type=submit]");

	// Mettre le dollar dans un nom de variable
	// est autorisé et permet de se souvenir
	// que l'on peut accéder à toutes les fonctions
	//  de jQuery à travers ce élément.
	var $eltGenre         = $("#genre");
	var $eltFirstname     = $("#$firstname");
	var $eltLastname      = $("#lastname");
	var $eltDateNaissance = $("#dateNaissance");
	var $eltAdresse       = $("#adresse");
	var $eltCp            = $("#cp");
	var $eltVille         = $("#ville");
	var $eltTelMobile     = $("#$telMobile");
	var $eltTelFixe       = $("#$telFixe");
	var $eltEmail         = $("#email");
	
	var $eltNumEga        = $("#numEga");
	var $eltNumFfg        = $("#numFfg");
	var $eltPhoto         = $("#photo");
	
	var $eltPwd           = $("#pwd");
	var $eltPwdConfirm    = $("#pwdConfirm");
	
	var $eltCgu           = $("#cgu");

	//::::::::::::::::::::::::::::::::::::::::::::
	//GESTION DES ÉVENEMENTS
	//::::::::::::::::::::::::::::::::::::::::::::

	// Gestion de l'envoi du formulaire
	$elementForm.submit(function(event) 
	{

		//::::::::::::::::::::::::::::::::::::::::::::
		//RÉCUPÉRATION DES VALEURS DE CHAQUE CHAMPS
		//:::::::::::::::::::::::::::::::::::::::::::: 
		var genre         = $eltGenre.val();
		var firstname     = $eltFirstname.val();
		var lastname      = $eltLastname.val();
		var dateNaissance = $eltDateNaissance.val();
		var adresse       = $eltAdresse.val();
		var cp            = $eltCp.val();
		var ville         = $eltVille.val();
		var telMobile     = $eltTelMobile.val();
		var telFixe       = $eltTelFixe.val();
		var email         = $eltEmail.val();
		
		var numEga        = $eltNumeEga.val();
		var numFfg        = $eltNumFfg.val();
		var photo         = $eltPhoto.val();
		
		var pwd           = $eltPwd.val();
		var pwdConfirm    = $eltPwdConfirm.val();
		
		// Ville / commentaire
		
		// Valeur booléane
		//var cgu                 = $eltCgu.is(":checked");

		//::::::::::::::::::::::::::::::::::::::::::::
		CONTRAINTES SUR LES CHAMPS
		//::::::::::::::::::::::::::::::::::::::::::::
		// Suppresion des notifications
		$("p.error").remove();

		// ASTUCE :
		// Pour déboger les patterns : https://regex101.com

		var erreurs = [];

		// Validation du pseudo
		// Utilisation d'une expression régulière
		var patterFirstname         = /^[a-zA-Z]{2,30}$/;
		var firstnameValide         = patterFirstname.test(firstname);
		
		var patterLastname          = /^[a-zA-Z]{2,40}$/;
		var lastnameValide          = patterLastname.test(lastname);
		
		
		//var patternDateNaissance    = /^[a-zA-Z]{2,40}$/;
		//var dateNaissanceValide     = patternDateNaissance.test(dateNaissance);
		
		var patternAdresse          = /^[a-zA-Z]{2,40}$/;
		var adresseValide           = patternAdresse.test(adresse);
		
		var patternCp               = /^[a-zA-Z]{2,40}$/;
		var cpValide                = patternCp.test(cp);
		
		var patternVille            = /^[a-zA-Z]{2,40}$/;
		var villeValide             = patternVille.test(ville);
		
		var patternTelMobile        = /^[0-90-9]{6,40}$/;
		var telMobileValide         = patternTelMobile.test(telMobile);
		
		var patternTelFixe          = /^[0-90-9]{2,40}$/;
		var telFixeValide           = patternTelFixe.test(telFixe);
		
		var patternEmail            = /^[a-zA-Z]{4,80}$/;
		var emailValide             = patternEmail.test(email);
		
		var patternPwd              = /^[a-zA-Z0-9]{8,16}$/;
		var pwdValide               = patternPwd.test(pwd);

		// TODO : les autres champs 


		if (! firstnameValide) 
		{ // firstname === false 
			erreurs.push(
				{
					"id": "firstnameErrId",
					"msg": "Prénom invalide."
				}
			);
		}

		if (! lastnameValide) 
		{ // lastname === false 
			erreurs.push(
				{
					"id": "lastnameErrId",
					"msg": "Nom invalide."
				}
			);
		}

		if (! pwdValide) 
		{ // pwd === false 
			erreurs.push(
				{
					"id": "pwdErrId",
					"msg": "Mot de passe invalide."
				}
			);
		}

		var erreursDetectees = (erreurs.length !== 0)

		if (erreursDetectees) 
		{
			for (var i = 0;  i < erreurs.length;  i++) 
			{
				console.log(erreurs[i]);

				var erreur = erreurs[i]; // erreur "courante" (en cours)

				// Je crée dynamiquement un élément
				// mais pour l'instant il est "déconnecté" du DOM
				var $affichageErreur = $("<p>");

				// Je renseigne le message d'erreur
				$affichageErreur.attr("id", erreur["id"]);
				$affichageErreur.text(erreur["msg"]);
				$affichageErreur.attr("class", "error");

				// syntaxe "pointée"
				$affichageErreur
					.attr("id", erreur["id"])
					.text(erreur["msg"])
					.attr("class", "error")
				;

			$elementForm.prepend($affichageErreur);
			}
		}

		// Empêcher comportement par défaut de l'élément
		// Ici => envoi au serveur
		event.preventDefault();
	});
});
*/