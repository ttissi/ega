	<nav id="bar-navigation" class="navbar navbar-inverse navbar-static-top"">
		
		<div class="container">
		    
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		           <span class="sr-only">Toggle navigation</span>
		           <span class="icon-bar"></span>
		           <span class="icon-bar"></span>
		           <span class="icon-bar"></span>
		        </button>
		        <a class="navbar-brand" href="#"><img id="logo-site" src="assets/img/logo_EGA.png" alt="Logo site EGA" height="100px"></a>
	        </div>	<!-- Fin DIV navbar-header -->

			<div id="navbar-menu" class="navbar-collapse collapse">
	        	
	        	<ul class="nav navbar-nav navbar-left">
	        		<li><a href="#"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Accueil</a></li>
	        		<li><a href="#"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Bureau</a></li>
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
		                	<li><a href="#">Last News</a></li>
		                	<li><a href="#">Archives</a></li>
		                	<li class="divider"></li>
		          	   		<li><a href="<?= $this->url('golf_initialiseCarte') ?>">Golfs Partenaires</a></li>
		          	   		<li><a href="#">Autres Offres</a></li>
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
		                	<li><a class="fancybox fancybox.iframe" href="<?= $this->url('membre_seConnecter') ?>">Se connecter</a></li>
		          	   		<li class="divider"></li>
		          	   		<li><a class="fancybox fancybox.iframe" href="<?= $this->url('membre_inscription') ?>">S'inscrire</a></li>
		          	   		<li><a class="fancybox fancybox.iframe" href="<?= $this->url('membre_modifierProfil') ?>">Profil</a></li>
		          	   		<li><a href="<?= $this->url('membre_seDeconnecter') ?>">Se déconnecter</a></li>
		          	 	</ul>
		         	</li>
		        </ul>

		    </div>	<!-- /.navbar-collapse collapse -->

		</div>   	<!-- /.container-fluid -->

	</nav>       	<!-- /.nav -->

<div class="container">