<!-- La connexion d'un utilisateur s'effectue dans une fenêtre modale -->

<!DOCTYPE html>
<html>

	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<title>Formulaire de connnexion</title>  
	</head>

	<body>

      	<div class="modal-header btn-primary">
        	<button type="button" class="close" data-dismiss="modal">x</button>
        	<p><i class="fa fa-key fa-3x" aria-hidden="true"></i>&nbsp; <span class="modal-title police-1-5em" id="connexionModalLabel">Connexion au site</span></p>
        	<p class="text-right"><em><small><span class="souligne">Rappel</span> : L'espace Membres est exclusivement réservé aux membres actifs d'EGA.</small></em></p>
      	</div>		<!-- /modal-header -->

      	<div class="modal-body no-padding-top">

            <span class="help-block alert-success text-right"><?php if (empty($error)) echo '* Saisie obligatoire des 2 champs'; ?></span>

            <form id="connexionModaleForm" method="POST" action="<?= $this->url('membre_seConnecter'); ?>">

              	<div class="container">
                  	<label class="control-label" for="login"> N° de membre EGA*</label>
                  	<div class="form-group">
                    	<div class="input-group">
                          	<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        	<input class="form-control" type="text" id="login" name="login" placeholder="0000" autofocus>
                      	</div>
                    </div>
                    <span class="help-block alert-danger text-center"><?php if (!empty($error)) echo $error; ?></span>
                    

                    <label class="control-label" for="pwd"> Mot de passe*</label>
                  	<div class="form-group">
                    	<div class="input-group">
                          	<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        	<input class="form-control" type="password" id="pwd" name="pwd" placeholder="***************">
                      	</div>
                    </div>
                    <span class="help-block alert-danger text-center"><?php if (!empty($error)) echo $error; ?></span>

                  	<div class="row form-group pull-right">
                    	<input type="reset" value="Réinitialiser" class="btn btn-primary">
                    	<input type="submit" value="Se connecter" class="btn btn-success">
                  	</div>
                  	<span class="clearfix"></span>
				        </div>

            </form>

      	</div>		<!-- /modal-body -->
      	
        <div class="modal-footer">
          <div class="container">
              <a href="<?= $this->url('membre_resetMotDePasse'); ?>" class="">Mot de passe oublié ?</a>
              </div>
        </div>  		<!-- /modal-footer -->
		
	</body>
</html>