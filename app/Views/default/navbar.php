	<nav id="bar-navigation" class="navbar navbar-inverse navbar-fixed-top">
		
		<div class="container">
		    
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-menu" aria-expanded="false" aria-controls="navbar-menu">
		           <span class="sr-only">Toggle navigation</span>
		           <span class="icon-bar"></span>
		           <span class="icon-bar"></span>
		           <span class="icon-bar"></span>
		        </button>
		        <a class="navbar-brand" href="#"><img id="logo-site" src="<?= $this->assetUrl('img/logo_EGA.png') ?>" alt="Logo site EGA" height="100"></a>
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
		        <?php if(isset($w_user)) {?>
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
		         	<?php } ?>
		         	<?php if(isset($w_user['admin']) && ($w_user['admin']==1)) {?>	         	
		          	<li><a href="<?= $this->url('membre_admin'); ?>"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Admin</a></li>
		          	<?php } ?>
		          	<li class="dropdown">
		          		<?php if (!isset($w_user)) { ?>			<!-- Membre NON connecté -->
		          			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
		          			<span class="glyphicon glyphicon-user" aria-hidden="true"></span> Espace Membres <span class="caret"></span></a>
		          		<?php } ?>
		          		<?php if (isset($w_user)) { ?>		<!-- Membre connecté -->
		          			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role=button aria-expanded="false">
							<img class="avatar img-circle" src="<?= $this->assetUrl('img/membres/').$w_user['photo']; ?>" alt="Avatar de <?= ucfirst(strtolower($w_user['prenom'])).' '.strtoupper($w_user['nom']); ?>"> <?= ucfirst(strtolower($w_user['prenom'])); ?> <span class="caret"></span></a>

		          		<?php } ?>
		          	    <ul class="dropdown-menu" role="menu">
							<?php if (!isset($w_user)) { ?>		<!-- Membre NON connecté -->
								<li><a href="<?= $this->url('membre_afficherConnexionModale'); ?>" data-toggle="modal" data-target="#modalNavbar" data-whatever=""><i class="fa fa-toggle-on fa-fw" aria-hidden="true"></i> Se connecter</a></li>
							<?php } ?>
  	   			        	<?php if (isset($w_user)) { ?>		<!-- Membre connecté -->
		          	   			<li><a class="" href="<?= $this->url('membre_modifierProfil', ['idMembre'=>$w_user['id_membre']]); ?>"><i class="fa fa-user fa-fw" aria-hidden="true"></i> Profil</a></li>
							<?php } ?>
							<?php if (isset($w_user)) { ?>		<!-- Membre NON connecté -->
		          	   			<li><a href="<?= $this->url('membre_seDeconnecter') ?>"><i class="fa fa-toggle-off fa-fw" aria-hidden="true"></i> Se déconnecter</a></li>
		          	   		<?php } ?>
		          	 	</ul>
		         	</li>
		        </ul>
		    </div>	<!-- /.navbar-collapse collapse -->
		</div>   	<!-- /.container-fluid -->
	</nav>       	<!-- /.nav -->
	<!-- ============================================================= -->
	<!-- BLOC MODAL pour les appels à partir de la barre de navigation -->
	<!-- ============================================================= -->
	<!-- <div id="modalNavbar" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="connexionModalLabel"> -->
	<div id="modalNavbar" class="modal fade" tabindex="-1" role="dialog">
	    <div class="modal-dialog" role="document">
        	<div class="modal-content">
        		<!-- Ici j'affiche le contenu de ma modale -->
        	</div>		<!-- /.modal-content -->
    	</div> 		<!-- /.modal-dialog -->
    </div>		<!-- /.modal -->