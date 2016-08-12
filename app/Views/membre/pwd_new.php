<?php $this->layout('layout', ['title' => 'EGA | New password']) ?>

<?php echo $this->start('main_content') ?>
	<h2>Création d'un nouveau mot de passe.</h2>
	<h3>Vous devez insérer un nouveau mot de passe pour votre première connexion.</h3>

<form method="post">
	<fieldset>
		<legend>Nouveau mot de passe</legend>
		
		<input type="password" name="pwdNew" id="pwdNew" placeholder="***************">
		<label for="pwdNew">Nouveau mot de passe</label>

		<input type="password" name="pwdConfirm" id="pwdConfirm" placeholder="***************" >
		<label for="pwdConfirm">Confirmez</label>

		<input type="submit" name="btnValider" value="Valider" class="btn btn-primary">
		<input type="reset" value="Recommencer" class="btn btn-primary">

	</fieldset>
</form>

<?php echo $this->stop('main_content') ?>
