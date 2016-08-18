<?php $this->layout('layout', ['title' => 'EGA | Connexion']) ?>

<!-- Affichage du contenu de la barre latérale droite -->
<?php $this->start('modalWindowsId') ?>	  

	<div id="connexionModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="connexionModalLabel">
	    <div class="modal-dialog" role="document">
	        <div class="modal-content">
	          	<div class="modal-header btn-primary">
	            	<button type="button" class="close" data-dismiss="modal">x</button>
	            	<p><i class="fa fa-key fa-3x" aria-hidden="true"></i>&nbsp; <span class="modal-title police-1-5em" id="connexionModalLabel">Connexion au site</span></p>
	            	<p class="text-right"><small><span class="souligne">Rappel</span> : L'espace Membres est exclusivement réservé aux membres actifs d'EGA.</small></p>
	          	</div>
	          	<div class="modal-body">
		            <form id="connexionForm" method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">

		              	<div class="container">
		                  	<label class="control-label" for="login"> N° de membre EGA</label>
		                  	<div class="form-group">
		                    	<div class="input-group">
		                          	<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		                        	<input class="form-control" type="text" id="login" name="login" placeholder="0000" value="3022" autofocus>
		                      	</div>
		                    </div>

		                    <label class="control-label" for="pwd"> Mot de passe</label>
		                  	<div class="form-group">
		                    	<div class="input-group">
		                          	<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
		                        	<input class="form-control" type="password" id="pwd" name="pwd" placeholder="***************" value="517841160">
		                      	</div>
		                    </div>

		                  	<div class="row form-group pull-right">
		                    	<input type="reset" value="Réinitialiser" class="btn btn-primary">
		                    	<input type="submit" value="Se connecter" class="btn btn-success">
		                  	</div>
		                  	<span class="clearfix"></span>
	    				</div>
	    				<div class="container">
	            			<a href="#" class="">Première connexion ?</a>
	                	</div>

		            </form>
	          	</div>
	        </div>
	    </div>
	</div>	 

<?php $this->stop('modalWindowsId') ?>


	
