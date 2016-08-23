<?php $this->layout('layout', ['title' => 'Affichage annonce | EGA' ]) ?>

<?php echo $this->start('main_content') ?>

<form method="post" action="" id="formAffichageProduit">

	<div class="container-fluid">

		<div class="row">

			<h1><legend>ESPACE DE VENTE - MATERIEL DE GOLF</legend></h1>

			<!-- Bloc de recherche de matériel de golf -->
			<div class="col-md-6">
				<div class="row">
					<h2><legend>Rechercher un matériel</legend></h2>
					<div class="col-md-6">
						<div class="form-group">
							<label for="categorie"></label>
	    					<div class="input-group">
	        					<span class="input-group-addon"><i class="glyphicon glyphicon-folder-open"></i></span>
	        					<select name="categorie" class="form-control" >
						          <option class="text-hide" selected disabled>Categorie</option>
						          <option value="Accessoire">Accessoire</option>
						          <option value="Chariot">Chariot</option>
						          <option value="Chariot">Chaussures</option>
						          <option value="Club à l'unité">Club à l'unité</option>
						          <option value="Sac de golf">Sac de golf</option>
						          <option value="Série de fers">Série de fers</option>
						          <option value="Vêtement">Vêtement</option>
						          <option value="Voiturette">Voiturette</option>
						        </select>
	      					</div>
	    				</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="etat"></label>
	    					<div class="input-group">
	        					<span class="input-group-addon"><i class="glyphicon glyphicon-question-sign"></i></span>
	        					<select name="etat" class="form-control" >
						          <option class="text-hide" selected disabled>Etat</option>
						          <option value="Neuf">Neuf</option>
						          <option value="Bon état">Bon état</option>
						          <option value="Passable">Passable</option>
						          <option value="Usé">Usé</option>
						        </select>
	      					</div>
	    				</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="sexe"></label>
	    					<div class="input-group">
	        					<span class="input-group-addon"><i class="fa fa-transgender"></i></span>
	        					<select name="sexe" class="form-control" >
						          <option class="text-hide" selected disabled>Sexe</option>
						          <option value="Homme">Homme</option>
						          <option value="Femme">Femme</option>
						          <option value="Mixte">Mixte</option>
						        </select>
	      					</div>
	    				</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="dexterite"></label>
	    					<div class="input-group">
	        					<span class="input-group-addon"><i class="fa fa-hand-paper-o"></i></span>
	        					<select name="dexterite" class="form-control" >
						          <option class="text-hide" selected disabled>Dextérité</option>
						          <option value="Droitier">Droitier</option>
						          <option value="Gaucher">Gaucher</option>
						          <option value="Non applicable">Non applicable</option>
						        </select>
	      					</div>
	    				</div>	
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-right">
						<button class="btn btn-primary" type="submit" name="btnrecherche">Lancer la recherche&nbsp;&nbsp;<span class="glyphicon glyphicon-search"></span></button>
					</div>
				</div>
			</div>

			<!-- Bloc d'affichage de mes 3 dernières annonces -->
			<div class="col-md-6">
				<h2><legend>MES ANNONCES</legend></h2>
				<div class="row text-center well">
					<p><strong><em>Les 3 dernières publiées</em></strong></p>
					<?php
						foreach ($MesDerniersProduits as $key => $value) {
							echo '<div class="col-md-4">'.
									'<p><em>Parue le :<br>'. date('d/m/Y H:i', strtotime($MesDerniersProduits[$key]['date_publication'])) . '</em></p>';
							echo	'<a href="' . $this-> assetUrl('img/ventes/' . $MesDerniersProduits[$key]['image_produit1']) . '">' .
									'<img alt="Photo produit de golf en vente" src="' . $this-> assetUrl('img/ventes/' . $MesDerniersProduits[$key]['image_produit1']) . '" class="img-thumbnail">' . '</a>';
							echo	'<p><strong>'. $MesDerniersProduits[$key]['intitule'] . '</strong><br>' . $MesDerniersProduits[$key]['etat'] . ' - ' . $MesDerniersProduits[$key]['prix'] . ' €' . '</p>';
							echo '</div>';
						}			
					?>
					<ul class="pagination">
						<li>
							<a href="#">Prev</a>
						</li>
						<li>
							<a href="#">1</a>
						</li>
						<li>
							<a href="#">2</a>
						</li>
						<li>
							<a href="#">3</a>
						</li>
						<li>
							<a href="#">4</a>
						</li>
						<li>
							<a href="#">5</a>
						</li>
						<li>
							<a href="#">Next</a>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<!-- Bloc d'affichage du résultat de ma rercherche ou à défaut les 6 dernières annonces publiées -->
		<div id="lastPosts" class="row">
			<h2><legend >LES DERNIERES ANNONCES / Résultat de votre recherche</legend></h2>
			
			<div class="col-md-12 well">
				<div class="row text-center">	
					<?php 
						foreach ($DerniersProduits as $key => $value) {
							echo '<div class="col-md-2">'.
									'<p><em>Parue le :<br>'. date('d/m/Y H:i', strtotime($DerniersProduits[$key]['date_publication'])) . '</em></p>';
							echo	'<a href="' . $this-> assetUrl('img/ventes/' . $DerniersProduits[$key]['image_produit1']) . '">' .
									'<img alt="Photo produit de golf en vente" src="' . $this-> assetUrl('img/ventes/' . $DerniersProduits[$key]['image_produit1']) . '" class="img-thumbnail" width="150">' . '</a>';
							echo	'<p><strong>'. $DerniersProduits[$key]['intitule'] . '</strong><br>' . $DerniersProduits[$key]['etat'] . ' - ' . $DerniersProduits[$key]['prix'] . ' €' . '</p>';
							echo '</div>';
						}
					?>
				</div>
				<div class="row text-center">
					<ul class="pagination">
						<li>
							<a href="#lastPosts">Prev</a>
						</li>
						<li>
							<a href="#lastPosts">1</a>
						</li>
						<li>
							<a href="#lastPosts">2</a>
						</li>
						<li>
							<a href="#lastPosts">3</a>
						</li>
						<li>
							<a href="#lastPosts">4</a>
						</li>
						<li>
							<a href="#lastPosts">5</a>
						</li>
						<li>
							<a href="#lastPosts">Next</a>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<!-- Bloc d'informations sur les CGV sur le site EGA -->
		<div class="row">
			<div class="col-md-12 bkg-vert-clair well">
				<strong>Informations sur la vente</strong>
	     		<div>
	        		<ul>
	          		<li>Seuls les matériels et accessoires de golf des membres EGA sont permis à la vente.</li>
	          		<li>EGA ne permet que la relation entre 2 membres souhaitant faire affaire.</li>
	          		<li>Ega ne gére en aucune maniére la vente et décline toute responsabilité en cas de problème lors de la transaction.</li>
	        		</ul>
	      		</div>
			</div>
		</div>
	</div>		<!-- Fin /.container-fluid -->

</form>

<?php $this->stop('main_content') ?>