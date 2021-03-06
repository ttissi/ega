<?php $this->layout('layout', ['title' => 'EGA | Accueil']) ?>

<!-- Affichage du contenu de la zone principale centrale -->
<?php $this->start('main_content') ?>

  <div class="container">
      <div class="row no-marge-top no-padding-top no-padding-bottom well">
          <h1>Bienvenue sur le <strong>site d'Ermont Golf Association</strong></h1>
          <p class="text-right"><small><span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span><em> L'accès à l'espace privé nécessite une connexion des membres.</em></small></p>
      </div>
  </div>

	<?php include('caroussel.php') ?>


	<div class="container">
  
  	<hr>
  
  	<div class="row">
        <div class="col-md-4">
          <div class="panel panel-default">
            <div class="panel-heading"><h3>Bonnes vacances à tous</h3></div>
            <div class="panel-body text-justify">Le practice EGA sera fermé du <strong>dimanche 24 juillet à 12h00 au Lundi 22 août</strong>.<br>Quelques compétitions seront organisées cet été. Vous pouvez vous y inscrire via le module de Réservation.<br>Nous vous retrouverons à la rentrée... en pleine forme.
            </div>
          </div>
        </div>
      	<div class="col-md-4">
        	<div class="panel panel-default">
            <div class="panel-heading"><h3>Compétitions estivales</h3></div>
            <div class="panel-body text-justify">
        		<ul>
        			<li>Golf de Domont - 16 juillet 2016<br>(formule Stableford)</li>
        			<li>Golf de Fontainebleau - 3 ou 4 août 2016<br>(formule Stableford)</li>
        		</ul>
        		<hr>
        		<p>Pensez-y et contactez-les... nos golfs partenaires proposent également de nombreuses compétitions individuelle et en équipe durant tout l'été.</p>
            </div>
          </div>
        </div>
      	<div class="col-md-4">
        	<div class="panel panel-default">
            <div class="panel-heading"><h3>Hello.</h3></div>
            <div class="panel-body text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
            Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
            dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
            Aliquam in felis sit amet augue.
            </div>
          </div>
        </div>
    </div>

<?php $this->stop('main_content') ?>

<!-- Affichage du contenu de la barre latérale droite -->
<?php $this->start('sidebar_right') ?>	  

	<div class="row">

		<div class="panel panel-default">
			
			<div class="panel-heading">
				<h1 class="panel-title police-1-5em">Favoris</h1>
			</div>
			<div class="panel-body text-center">
				<p><a href="http://www.ega.asso.fr"><img src="<?= $this->assetUrl('img/reservations_ega.jpg') ?>" style="width:25%" alt="Image-lien vers site de réservations EGA"><br>Réservations</a></p>
			</div>

        	<div class="panel-heading text-center">
				<p>Votre météo sur <strong><?php if (isset($_POST['golf'])) { echo $_POST['golf']; } else { echo 'Eaubonne'; } ?></strong></p>
			</div>
          	<div class="panel-body text-center">
          		<?php include('meteo.php') ?>
          	</div>

       	</div>
       	
	</div>

<?php $this->stop('sidebar_right') ?>

