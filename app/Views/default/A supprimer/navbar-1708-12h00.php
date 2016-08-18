	<nav id="bar-navigation" class="navbar navbar-inverse navbar-fixed-top"">
		
		<div class="container">
		    
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-menu" aria-expanded="false" aria-controls="navbar">
		           <span class="sr-only">Toggle navigation</span>
		           <span class="icon-bar"></span>
		           <span class="icon-bar"></span>
		           <span class="icon-bar"></span>
		        </button>
		        <a class="navbar-brand" href="#"><img id="logo-site" src="assets/img/logo_EGA.png" alt="Logo site EGA" height="100px"></a>
	        </div>	<!-- Fin DIV navbar-header -->

			<div id="navbar-menu" class="navbar-collapse collapse">
	        	
	        	<ul class="nav navbar-nav navbar-left">
	        		<li><a href="<?= $this->url('default_accueil') ?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Accueil</a></li>
	        		<li><a href="<?= $this->url('bureau_compositionBureau') ?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Bureau</a></li>
	            	<li class="dropdown">
		          		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-tent" aria-hidden="true"></span> Practice <span class="caret"></span></a>
		          	    <ul class="dropdown-menu" role="menu">
		                	<li><a href="#">Horaires</a></li>
		                	<li><a href="#">Plan d'accès</a></li>
		          	 	</ul>
		         	</li>
	        	</ul>
	   
		        <ul class="nav navbar-nav navbar-right">
		        	<li class="dropdown">
		          		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span> Actualités <span class="caret"></span></a>
		          	    <ul class="dropdown-menu" role="menu">
		                	<li><a href="#">[Last News]</a></li>
		                	<li><a href="#">[Archives]</a></li>
		                	<li class="divider"></li>
		          	   		<li><a href="<?= $this->url('golf_initialiseCarte') ?>">Golfs Partenaires</a></li>
		          	   		<li><a href="#">[Autres Offres]</a></li>
		          	 	</ul>
		         	</li>
		          	<li><a href="#"><span class="glyphicon glyphicon-flag" aria-hidden="true"></span> Compétitions</a></li>
		          	<li class="dropdown">
		          		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-tags" aria-hidden="true"></span> Echanges <span class="caret"></span></a>
		          	    <ul class="dropdown-menu" role="menu">
		                	<li><a href="#">Vente Matériel</a></li>
		                	<li class="divider"></li>
		          	   		<li><a href="#">[Locations appartements]</a></li>
		          	   		<li><a href="#">[Album Photos]</a></li>
		          	 	</ul>
		         	</li>
		          	<li><a href="#"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Admin</a></li>
		          	<li class="dropdown">
		          		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Espace Membres <span class="caret"></span></a>
		          	    <ul class="dropdown-menu" role="menu">

							<li><a class="" href="<?= $this->url('membre_seConnecter') ?>"><i class="fa fa-toggle-on fa-fw" aria-hidden="true"></i> Se connecter</a></li>
		                	<li><a id="connexionLink" class="" href="#" data-toggle="modal" data-target="#connexionModal"><i class="fa fa-toggle-on fa-fw" aria-hidden="true"></i> (Se connecter)</a></li>
		          	   		<li><a class="" href="<?= $this->url('membre_inscription') ?>"><i class="fa fa-list-alt fa-fw" aria-hidden="true"></i> S'inscrire</a></li>
		          	   		<li><a class="" href="<?= $this->url('membre_modifierProfil') ?>"><i class="fa fa-user fa-fw" aria-hidden="true"></i> Profil</a></li>
		          	   		<li><a class="" href="<?= $this->url('membre_modifierProfilIntegration') ?>"><i class="fa fa-user fa-fw" aria-hidden="true"></i> (Profil Intégration)</a></li>		          	   		
		          	   		<li><a href="<?= $this->url('membre_seDeconnecter') ?>"><i class="fa fa-toggle-off fa-fw" aria-hidden="true"></i> Se déconnecter</a></li>

		          	 	</ul>
		         	</li>
		        </ul>

		    </div>	<!-- /.navbar-collapse collapse -->

		</div>   	<!-- /.container-fluid -->

	</nav>       	<!-- /.nav -->


	<div id="connexionModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="connexionModalLabel">
	    <div class="modal-dialog" role="document">
	        <div class="modal-content">
	          	<div class="modal-header btn-primary">
	            	<button type="button" class="close" data-dismiss="modal">x</button>
	            	<p><i class="fa fa-key fa-3x" aria-hidden="true"></i>&nbsp; <span class="modal-title police-1-5em" id="connexionModalLabel">Connexion au site</span></p>
	            	<p class="text-right"><em><small><span class="souligne">Rappel</span> : L'espace Membres est exclusivement réservé aux membres actifs d'EGA.</small></em></p>
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
		                    <span class="help-block alert-danger text-center"></span>

		                    <label class="control-label" for="pwd"> Mot de passe</label>
		                  	<div class="form-group">
		                    	<div class="input-group">
		                          	<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
		                        	<input class="form-control" type="password" id="pwd" name="pwd" placeholder="***************" value="517841160">
		                      	</div>
		                    </div>
		                    <span class="help-block alert-danger text-center"></span>

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



