<!doctype html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>EGA || Profil</title>
</head>
<body>

	<h1>Page profil</h1>
	<h2>Bienvenue <?php  ?> sur votre page profil.</h2>
	
	<form method="post" action="" id="formProfil">
		<fieldset>
			<legend>Mon profil</legend>

			<fieldset>
				<legend>Civilité</legend>	
				<input type="radio" name="genre" value="monsieur" id="monsieur">
				<label for="monsieur">Monsieur</label>

				<input type="radio" name="genre" value="madame" id="madame">
				<label for="madame">Madame</label>

				<label for="firstname"></label>
				<input type="text" name="firstname" id="firstname" placeholder="Ex : Albert" value="<?php  ?>" >

				<label for="lastname"></label>
				<input type="text" name="lastname" id="lastname" placeholder="Ex: Durosier" value="<?php  ?>">

				<label for="dateNaissance"></label>
				<input type="date" name="dateNaissance" id="dateNaissance" placeholder="20/12/1965" value="<?php  ?>">

				<label for="adresse"></label>
				<input type="text" name="adresse" id="adresse" placeholder="1, allée des Champs" value="<?php  ?>">

				<label for="cp"></label>
				<input type="text" name="cp" id="cp" placeholder="Ex : 75000" value="<?php  ?>">

				<label for="ville"></label>
				<input type="text" name="ville" id="ville" placeholder="Ex : Paris" value="<?php  ?>">

				<label for="telMobile"></label>
				<input type="tel" name="telMobile" id="telMobile" placeholder="Ex :06 01 02 03 04" value="<?php  ?>">

				<label for="telFixe"></label>
				<input type="tel" name="telFixe" id="telFixe" placeholder="Ex :01 02 03 04 05" value="<?php  ?>">

				<label for="email"></label>
				<input type="email" name="email" id="email" placeholder="Ex: adresse@email.com" value="<?php  ?>">
			</fieldset>
				
			<fieldset>
				<legend>Références membre</legend>

				<p>N° de carte EGA : <?php  ?></p>
				<p>N° de carte FFG : <?php  ?></p>

				<img src="<?php ?>" width="" height="" alt="Photo de membre">
			</fieldset>

			<fieldset>
				<legend>Authentification</legend>
				<label for="pwdOld">Mot de passe actuel</label>
				<input type="password" name="pwdOld" id="pwdOld" placeholder="************">

				<label for="pwdNew">Votre nouveau mot de passe</label>
				<input type="password" name="pwdNew" id="pwdNew" placeholder="************">

				<label for="pwdConfirm">Confirmez votre nouveau mot de passe</label>
				<input type="password" name="pwdConfirm" id="pwdConfirm" placeholder="************">
			</fieldset>

			<input type="submit" name="btnModifier" value="Modifier">
			<input type="reset" name="btnAnnuler" value="Annuler">

		</fieldset>
	</form>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.pack.js"></script>
	<script src="../../../public/assets/js/vendor/jquery-1.12.4.min.js"></script>
	<script src="../../../public/assets/js/main.js"></script>
	<script src="../../../public/assets/js/modal.js"></script>

</body>
</html>