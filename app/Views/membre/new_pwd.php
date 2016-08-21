<?php $this->layout('layout', ['title' => 'Change | EGA']) ?>

<?php echo $this->start('main_content') ?>
	<h1>Changement de mot de passe.</h2>
	<p class="text-right"><em>Rappel: étape exigée lros de votre première connexion.<em></p>

	<div class="alert alert-success">
  		<?php if ($_POST && !empty($succes)) echo '<strong>Bravo ! </strong>'.$succes; ?> 
	</div>

<form id="newPwdForm" method="POST" action="">

  	<div class="container">
      	<label class="control-label" for="login"> N° de membre EGA</label>
      	<div class="form-group">
        	<div class="input-group">
              	<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            	<input type="text" class="form-control" name="pwdNew" id="pwdNew" placeholder="Nouveau mot de passe" value="61">
          	</div>
	        <span class="help-block alert-danger text-center"><?php if (!empty($error)) echo $error; ?></span>
	        <span class="help-block alert-success text-right"><?php if (empty($error)) echo '*Saisie obligatoire des 2 champs'; ?></span>
        </div>

        <label class="control-label" for="pwd"> Mot de passe</label>
      	<div class="form-group">
        	<div class="input-group">
              	<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            	<input type="password" class="form-control" name="pwdConfirm" id="pwdConfirm" placeholder="Resaisir mot de passe" value="toto">
          	</div>
          	<span class="help-block alert-danger text-center"><?php if (!empty($error)) echo $error; ?></span>
        </div>


      	<div class="row form-group pull-right">
        	<input type="reset" value="Réinitialiser" class="btn btn-primary">
        	<input type="submit" value="Valider" class="btn btn-success">
      	</div>
      	<span class="clearfix"></span>
	</div>

</form>



<?php echo $this->stop('main_content') ?>
