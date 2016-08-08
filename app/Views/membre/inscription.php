
	<h1>Formulaire d'inscription</h1>
	
	<form method="post" action="" id="formInscription">
		<fieldset>
		<legend>Formulaire d'inscription</legend>
			<fieldset>
				<legend>Civilité</legend>	
				<input type="radio" name="genre" value="monsieur" id="monsieur">
				<label for="monsieur">Monsieur</label>

				<input type="radio" name="genre" value="madame" id="madame">
				<label for="madame">Madame</label>

				<label for="firstname"></label>
				<input type="text" name="firstname" id="firstname" placeholder="Ex : Albert">

				<label for="lastname"></label>
				<input type="text" name="lastname" id="lastname" placeholder="Ex: Durosier">

				<label for="dateNaissance"></label>
				<input type="date" name="dateNaissance" id="dateNaissance" placeholder="12/05/1970">

				<label for="adresse"></label>
				<input type="text" name="adresse" id="adresse" placeholder="1, allée des Champs">

				<label for="cp"></label>
				<input type="text" name="cp" id="cp" placeholder="Ex : 75000">

				<label for="ville"></label>
				<input type="text" name="ville" id="ville" placeholder="Ex : Paris">

				<label for="telMobile"></label>
				<input type="tel" name="telMobile" id="telMobile" placeholder="Ex :06 01 02 03 04">

				<label for="telFixe"></label>
				<input type="tel" name="telFixe" id="telFixe" placeholder="Ex :01 02 03 04 05">

				<label for="email"></label>
				<input type="email" name="email" id="email" placeholder="Ex: adresse@email.com">
			</fieldset>
				
			<fieldset>
				<legend>Références membre</legend>

				<label for="numEga">N° de membre EGA</label>
				<input type="text" name="numEga" id="numEga">

				<label for="numFFG">N° de membre FFG</label>
				<input type="text" name="numFFG" id="numFFG">
				
				<img src="<?php ?>"  name="photo" id="photo" width="" height="" alt="Photo de membre">
			</fieldset>

			<fieldset>
				<legend>Authentification</legend>
				<input type="password" name="pwd" id="pwd" placeholder="***********">
				<label for="pwd"></label>

				<input type="password" name="pwdConfirm" id="pwdConfirm" placeholder="***********">
				<label for="pwdConfirm"></label>
			</fieldset>

			<label for="cgu">J'ai lu les
				<a href="cgu.php" class="fancybox fancybox.iframe"><abbr title="Conditions générales d'utilisation"> CGU</a>
			</label>
			<input type="checkbox" name="cgu" id="cgu">
				
			
			<input type="submit" class="primary" name="btnInscription" value="S'inscrire">

		</fieldset>
	</form>


