<?php $this->layout('layout', ['title' => ' EGA | Connexion']) ?>

<?php echo $this->start('main_content') ?>

	<h2>Se connecter à son compte EGA.</h2>
	<form method="post">
		<fieldset>
			<legend>Connexion</legend>

			<input type="text" name="login" id="login" value="3022" placeholder="0000">
			<label for="">N° de membre</label>

			<input type="password" name="pwd" id="pwd" value="517841160" placeholder="***************">
			<label for="pwd">Mot de passe</label>

			<input type="submit" name="btnConnexion" value="Se connecter" class="btn btn-primary">
			<input type="reset" value="Recommencer" class="btn btn-primary">
			
		</fieldset>
	</form>

<!-- debug($w_user); -->

<?php echo $this->stop('main_content') ?>

	
