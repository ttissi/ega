<?php $this->layout('layout', ['title' => 'EGA | Accueil']) ?>

<?php $this->start('main_content') ?>
	
	<div class="row">
  
	  	<div class="col-md-9 col-md-offset-1">
	      	<?php include('caroussel.php') ?>
	  	</div>  <!-- /.col-md-9 -->
	  
	    <div id="sidebar_right" class="col-md-2">
	        <div class="row">
            	<div class="col-xs-6 text-center">	        
					<h1 class="police-2em text-center">Favoris</h1>
	        	</div>
            	<div class="col-xs-6 text-center">
	              	<p><a href="http://www.ega.asso.fr"><img src="assets/img/reservations_ega.jpg" style="width:50%" alt="Image-lien vers site de réservations EGA"><br>Réservations</a></p>
	            </div>
			</div>
			<div class="row">
            	<div class="col-xs-12 text-center well">
              		<p>Votre météo sur <strong><?php if (isset($_POST['golf'])) { echo $_POST['golf']; } else { echo 'Eaubonne'; } ?><strong></p>
              		<?php include('meteo.php') ?>
            	</div>
          	</div>
		</div>  <!-- /.col-md-3 -->

	</div>

<?php $this->stop('main_content') ?>
