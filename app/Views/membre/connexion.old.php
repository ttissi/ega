<!doctype html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Connexion</title>
	<link rel="stylesheet" href="<?php $this->assetUrl('css/vendor/bootstrap-3.3.7.min.css'); ?>">
</head>
<body>
	
	<form>
		<fieldset>
			<legend>Connexion</legend>

			<input type="text" name="login" id="login" placeholder="0000">
			<label for="">N° de membre</label>

			<input type="password" name="pwd" id="pwd" placeholder="***************">
			<label for="pwd"></label>

			<input type="submit" name="btnConnexion" value="Se connecter" class="btn btn-primary">
			
		</fieldset>
	</form>

	<div>
		<p>Vous est membre de l'EGA mais pas encore inscrit sur notre site ? Il suffit d'aller sur la <a href="inscription.php<?php ?>">page d'inscription</a></p>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.pack.js"></script>
	<script src="../../../public/assets/js/vendor/jquery-1.12.4.min.js"></script>
	<script src="../../../public/assets/js/main.js"></script>
	<script src="../../../public/assets/js/modal.js"></script>
	
</body>
</html>
