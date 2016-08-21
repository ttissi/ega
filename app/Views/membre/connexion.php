<?php $this->layout('layout', ['title' => 'Connexion | EGA']) ?>

<?php echo $this->start('main_content') ?>

	<h1>Formulaire de connexion</h1>

	<?php if ($_POST && !empty($succes) && empty($error)) 
			{
				echo '<div class="alert alert-success">
  						<strong>Bravo !</strong>' . $succes . '</div>';
  			}
  			else if ($_POST && empty($succes) && empty($error)) 
  			{
  				echo '<div class="alert alert-danger">' . $error . '</div>';
  			}
  	?>

	<form id="connexionForm" method="POST" action="<?= $this->url('membre_seConnecter'); ?>">

      	<div class="container">
          	<label class="control-label" for="login"> N° de membre EGA*</label>
          	<div class="form-group">
            	<div class="input-group">
                  	<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                	<input class="form-control" type="text" id="login" name="login" placeholder="0000" autofocus>
              	</div>
            </div>
            
            <label class="control-label" for="pwd"> Mot de passe*</label>
          	<div class="form-group">
            	<div class="input-group">
                  	<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                	<input class="form-control" type="password" id="pwd" name="pwd" placeholder="***************">
              	</div>
            </div>

          	<div class="row form-group pull-right">
            	<input type="reset" value="Réinitialiser" class="btn btn-primary">
            	<input type="submit" value="Se connecter" class="btn btn-success">
          	</div>
          	<span class="clearfix"></span>
		</div>

    </form>

<?php echo $this->stop('main_content') ?>

	
