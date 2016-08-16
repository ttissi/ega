<?php $this->layout('layout', ['title' => ' EGA | Profil']) ?>

<?php echo $this->start('main_content') ?>

	<h1>Page profil</h1>
	<h2>Bienvenue <?php echo ucfirst(strtolower($w_user['prenom'])) ?> sur votre page profil.</h2>
	
	<?php // print_r($w_user); ?>

	<form method="post" id="formProfil">
		<fieldset>
			<legend>Mon profil</legend>

			<fieldset>
				<legend>Civilité</legend>	
				<input type="radio" name="genre" value="monsieur" id="monsieur" <?php if($w_user['civilite'] == '') {echo 'checked disabled';} ?>>
				<label for="monsieur">Monsieur</label>

				<input type="radio" name="genre" value="madame" id="madame" <?php if($w_user['civilite'] == 'f') {echo 'checked disabled';} ?>>
				<label for="madame">Madame</label>

				<label for="firstname"></label>
				<input type="text" name="firstname" id="firstname" placeholder="Ex : Albert" disabled value="<?php echo $w_user['prenom'] ?>" >

				<label for="lastname"></label>
				<input type="text" name="lastname" id="lastname" placeholder="Ex: Durosier" disabled value="<?php echo $w_user['nom'] ?>">

				<label for="dateNaissance"></label>
				<input type="date" name="dateNaissance" id="dateNaissance" placeholder="20/12/1965" disabled value="<?php echo date("d/m/Y", strtotime($w_user['date_naissance'])) ?>">

				<label for="adresse"></label>
				<input type="text" name="adresse" id="adresse" placeholder="1, allée des Champs" value="<?php echo $w_user['adresse'] ?>">

				<label for="cp"></label>
				<input type="text" name="cp" id="cp" placeholder="Ex : 75000" value="<?php echo $w_user['code_postal'] ?>">

				<label for="ville"></label>
				<input type="text" name="ville" id="ville" placeholder="Ex : Paris" value="<?php echo $w_user['ville'] ?>">

				<label for="telMobile"></label>
				<input type="tel" name="telMobile" id="telMobile" placeholder="Ex :06 01 02 03 04" value="<?php echo $w_user['mobile'] ?>">

				<label for="telFixe"></label>
				<input type="tel" name="telFixe" id="telFixe" placeholder="Ex :01 02 03 04 05" value="<?php echo $w_user['fixe'] ?>">

				<label for="email"></label>
				<input type="email" name="email" id="email" placeholder="Ex: adresse@email.com" value="<?php echo $w_user['email'] ?>">
			</fieldset>
				
			<fieldset>
				<legend>Références membre</legend>

				<p>N° de carte EGA : <?php echo $w_user['num_ega'] ?></p>
				<p>N° de carte FFG : <?php echo $w_user['num_ffg'] ?></p>
				<img src="<?php echo $this->assetUrl('img/membres/'.$w_user['photo']); ?>" width="" height="" alt="Photo de membre">
				
			</fieldset>

			<fieldset>
				<legend><a href="<?= $this->url('membre_pwdNew'); ?>">Changer de mot de passe</a></legend>
				<!-- <label for="pwdOld">Mot de passe actuel</label>
				<input type="password" name="pwdOld" id="pwdOld" placeholder="************">

				<label for="pwdNew">Votre nouveau mot de passe</label>
				<input type="password" name="pwdNew" id="pwdNew" placeholder="************">

				<label for="pwdConfirm">Confirmez votre nouveau mot de passe</label>
				<input type="password" name="pwdConfirm" id="pwdConfirm" placeholder="************"> -->
			</fieldset>

			<input type="submit" name="btnModifier" value="Enregistrer">
			<input type="reset" name="btnAnnuler" value="Annuler">

		</fieldset>
	</form>

<?php echo $this->stop('main_content') ?>