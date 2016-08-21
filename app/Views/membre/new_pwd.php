<?php $this->layout('layout', ['title' => 'Change | EGA']) ?>

<?php echo $this->start('main_content') ?>

	<div class="col-md-6 col-md-offset-3">

		<h1>Changement de mot de passe pour le membre n°: <?= $numEgaMembre; ?></h2>
		<p class="text-right"><em>Rappel: étape exigée lors de votre première connexion.<em></p>

    	<div class="container">

        <!-- Zone d'affichage pour le message de validation ou non -->
	        <?php if ($error != '') 
		        {
		          echo '<div class="alert alert-danger">ERREUR : ' . $error . '</div>';
		        } else if ($success != '')
		        {
		          echo '<div class="alert alert-success">
		                <strong>Bravo !</strong><br>' . $success . '</div>';
		        } 
	        ?>

			<form id="newPwdForm" method="POST" action="<?= $this->url('membre_pwdNew', ['numEgaMembre' => $numEgaMembre]); ?>">

		      	<label class="control-label" for="login"> Nouveau mot de passe*</label>
		      	<div class="form-group">
		        	<div class="input-group">
		              	<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
		            	<input type="password" class="form-control" name="pwdNew" id="pwdNew">
		          	</div>
			        <span class="help-block alert-success text-right"><?php if (empty($error)) echo '* Saisie obligatoire des 2 champs'; ?></span>
		        </div>

		        <label class="control-label" for="pwd"> Resaisir mot de passe*</label>
		      	<div class="form-group">
		        	<div class="input-group">
		              	<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
		            	<input type="password" class="form-control" name="pwdConfirm" id="pwdConfirm">
		          	</div>
		        </div>

		      	<div class="row form-group pull-right">
		        	<input type="reset" value="Réinitialiser" class="btn btn-primary">
		        	<input type="submit" value="Valider" class="btn btn-success">
		      	</div>
		      	<span class="clearfix"></span>

			</form>

  		</div>        <!-- /.container -->

	</div>    <!-- /.col-md-6 -->

<?php echo $this->stop('main_content') ?>
