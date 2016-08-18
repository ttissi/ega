<?php $this->layout('layout', ['title' => ' EGA | Change']) ?>

<?php echo $this->start('main_content') ?>

	<form id="newPwdForm" method="POST">

	  	<div class="container">
			<div class="col-md-4 col-md-offset-4">

				<h1>Création d'un nouveau mot de passe.</h1>
				<p><small><em>En particulier lors de votre première connexion...</em></small></p>

		        <label class="control-label" for="pwdNew"> Nouveau mot de passe</label>
		      	<div class="form-group">
		        	<div class="input-group">
		              	<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
		            	<input class="form-control" type="password" id="pwdNew" name="pwdNew" placeholder="" autofocus>
		          	</div>
		        </div>
		        <span class="help-block alert-danger text-center"></span>

		      	<label class="control-label" for="pwdConfirm"> Confirmez</label>
		      	<div class="form-group">
		        	<div class="input-group">
		              	<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
		            	<input class="form-control" type="password" id="pwdConfirm" name="pwdConfirm" placeholder="">
		          	</div>
		        </div>
		        <span class="help-block alert-danger text-center"><?php if (isset($error)) echo $error; ?></span>

		      	<div class="row form-group pull-right">
		        	<input type="reset" value="Réinitialiser" class="btn btn-primary">
		        	<input type="submit" value="Se connecter" class="btn btn-success">
		      	</div>
		      	<span class="clearfix"></span>

	      	</div>
	    </div>

	</form>

<?php echo $this->stop('main_content') ?>


