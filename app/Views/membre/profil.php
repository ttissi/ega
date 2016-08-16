<?php $this->layout('layout', ['title' => ' EGA | Profil']) ?>

<?php echo $this->start('main_content') ?>

	<h1>Page profil</h1>
	<p>Bienvenue <?= '[prénom]' ?> sur votre page profil.</p>
	
	<form id="formProfil" method="post" action="">



				<input type="radio" name="genre" value="monsieur" id="monsieur" <?php if($w_user['civilite'] == 'm') {echo 'checked';} ?>>
				<label for="monsieur">Monsieur</label>

				<input type="radio" name="genre" value="madame" id="madame">
				<label for="madame">Madame</label>

				<label for="firstname"></label>
				<input type="text" name="firstname" id="firstname" placeholder="Ex : Albert" value="<?php echo $w_user['prenom'] ?>" >

				<label for="lastname"><?php  ?></label>
				<input type="text" name="lastname" id="lastname" placeholder="Ex: Durosier" value="<?php echo $w_user['nom'] ?>">

				<label for="dateNaissance"><?php  ?></label>
				<input type="date" name="dateNaissance" id="dateNaissance" placeholder="20/12/1965" value="<?php  ?>">

				<label for="adresse"><?php  ?></label>
				<input type="text" name="adresse" id="adresse" placeholder="1, allée des Champs" value="<?php  ?>">

				<label for="cp"><?php  ?></label>
				<input type="text" name="cp" id="cp" placeholder="Ex : 75000" value="<?php  ?>">

				<label for="ville"><?php  ?></label>
				<input type="text" name="ville" id="ville" placeholder="Ex : Paris" value="<?php  ?>">

				<label for="telMobile"><?php  ?></label>
				<input type="tel" name="telMobile" id="telMobile" placeholder="Ex :06 01 02 03 04" value="<?php  ?>">

				<label for="telFixe"><?php  ?></label>
				<input type="tel" name="telFixe" id="telFixe" placeholder="Ex :01 02 03 04 05" value="<?php  ?>">

				<label for="email"><?php  ?></label>
				<input type="email" name="email" id="email" placeholder="Ex: adresse@email.com" value="<?php  ?>">


				<p>N° de carte EGA : <?php ?></p>
				<p>N° de carte FFG : <?php ?></p>

				<img src="<?php ?>" width="" height="" alt="Photo de membre">

				<legend><a href="<?= $this->url('membre_pwdNew'); ?>">Changer de mot de passe</a></legend>
				<!-- <label for="pwdOld">Mot de passe actuel</label>
				<input type="password" name="pwdOld" id="pwdOld" placeholder="************">

				<label for="pwdNew">Votre nouveau mot de passe</label>
				<input type="password" name="pwdNew" id="pwdNew" placeholder="************">

				<label for="pwdConfirm">Confirmez votre nouveau mot de passe</label>
				<input type="password" name="pwdConfirm" id="pwdConfirm" placeholder="************"> -->


			<input type="submit" name="btnModifier" value="Modifier">
			<input type="reset" name="btnAnnuler" value="Annuler">


	</form>

<?php echo $this->stop('main_content') ?>