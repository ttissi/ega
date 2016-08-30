<?php $this->layout('layout', ['title' => 'Espace Vente | EGA']) ?>

<?php echo $this->start('main_content') ?>

<form method="POST" id="formAffichageProduit">

	<div class="container-fluid">

		<div class="row">

			<h1 class="legend">ESPACE DE VENTE - MATERIEL DE GOLF</h1>

			<!-- Bloc de recherche de matériel de golf -->
			<div class="col-md-6">
				<div class="row">
					<h2 class="legend">Rechercher un matériel</h2>
					<div class="col-md-6">
						<div class="form-group">
							<label for="categorie"></label>
	    					<div class="input-group">
	        					<span class="input-group-addon"><i class="glyphicon glyphicon-folder-open"></i></span>
	        					<select id="categorie" name="categorie" class="form-control" >
						          <option class="text-hide" selected disabled>Categorie</option>
						          <option value="Accessoire">Accessoire</option>
						          <option value="Chariot">Chariot</option>
						          <option value="Chaussures">Chaussures</option>
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
	        					<select id="etat" name="etat" class="form-control" >
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
	        					<select id="sexe" name="sexe" class="form-control" >
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
	        					<select id="dexterite" name="dexterite" class="form-control" >
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
						<p><br></p>
					</div>
				</div>
					<?php
						if (isset($ProduitsTrouves)) {
							echo '<div class="row well bkg-vert-clair">
							<h3>Résultat de ma recherche</h3>';
							$nbLignes = count($ProduitsTrouves);
							$arret = $nbLignes-1;

							while ($arret > -1) {
								echo '<div class="col-md-4">'.
										'<p><em>Parue le :<br>'. date('d/m/Y H:i', strtotime($ProduitsTrouves[$arret]['date_publication'])) . '</em></p>';
								echo	'<a href="' . $this-> url('produit_visualisation', ['id' => $ProduitsTrouves[$arret]['id_produit']]) . '">' .
										'<img alt="Photo produit de golf en vente" src="' . $this-> assetUrl('img/ventes/' . $ProduitsTrouves[$arret]['image_produit1']) . '" class="img-thumbnail" width="150" height="150">' . '</a>';
								echo	'<p><strong>'. $ProduitsTrouves[$arret]['intitule'] . '</strong><br>' . $ProduitsTrouves[$arret]['etat'] . ' - ' . $ProduitsTrouves[$arret]['prix'] . ' €' . '</p>';
								echo '</div>';
								$arret--;
							}
							echo '</div>';
						}			
					?>
				<div class="row">
					<h2 class="legend">Autres actions</h2>
					<div>
						<div class="col-md-12 text-left">
							<a class="btn btn-success" href="<?= $this->url('produit_creation'); ?>"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp;&nbsp;Créer une annonce</a>
						</div>
					</div>
				</div>
			</div>

			<!-- Bloc d'affichage de mes 3 dernières annonces -->
			<div class="col-md-6">
				<h2 class="legend">MES ANNONCES</h2>
				<div class="row text-center well">
					<!-- Les 3 dernières annonces publiées -->
					<ul class="nav nav-pills nav nav-tabs">
						<li class="active"><a data-toggle="pill" href="#3DernieresAnnonces">Dernières publiées</a></li>
						<li><a data-toggle="pill" href="#toutesMesAnnonces">Toutes mes annonces</a></li>
					</ul>

					<div class="tab-content">
						<div id="3DernieresAnnonces" class="tab-pane fade in active">
							<div class="row">
								<div class="col-md-12">
								<h3>Mes trois dernières annonces</h3>
								<?php
									$nbLignes = count($MesDerniersProduits);
									$arret = $nbLignes-1;
									while ($arret > $nbLignes-4) {
										echo '<div class="col-md-4">'.
												'<p><em>Parue le :<br>'. date('d/m/Y H:i', strtotime($MesDerniersProduits[$arret]['date_publication'])). '</em></p>';
										echo	'<a href="' . $this-> url('produit_visualisation', ['id' => $MesDerniersProduits[$arret]['id_produit']]) . '">' .
												'<img alt="Photo produit de golf en vente" src="' . $this-> assetUrl('img/ventes/' . $MesDerniersProduits[$arret]['image_produit1']) . '" class="img-thumbnail" width="150" height="150">' . '</a>';
										echo	'<p><strong>'. $MesDerniersProduits[$arret]['intitule'] . '</strong><br>' . $MesDerniersProduits[$arret]['etat'] . ' - ' . $MesDerniersProduits[$arret]['prix'] . ' €' . '</p>';
										echo '</div>';
										$arret--;
									}
								?>
								</div>
							</div>
						</div>

						<div id="toutesMesAnnonces" class="tab-pane fade">
							<div class="row">
								<!-- <div class="col-md-6"> -->
									<h3>Toutes mes annonces</h3>
									<?php
									$nbLignes = count($MesDerniersProduits);
									$arret = $nbLignes-1;

									while ($arret > -1) {
										echo '<div class="col-md-4">'.
												'<p><em>Parue le :<br>'. date('d/m/Y H:i', strtotime($MesDerniersProduits[$arret]['date_publication'])) . '</em></p>';
										echo	'<a href="' . $this-> url('produit_visualisation', ['id' => $MesDerniersProduits[$arret]['id_produit']]) . '">' .
												'<img alt="Photo produit de golf en vente" src="' . $this-> assetUrl('img/ventes/' . $MesDerniersProduits[$arret]['image_produit1']) . '" class="img-thumbnail" width="150" height="150">' . '</a>';
										echo	'<p><strong>'. $MesDerniersProduits[$arret]['intitule'] . '</strong><br>' . $MesDerniersProduits[$arret]['etat'] . ' - ' . $MesDerniersProduits[$arret]['prix'] . ' €' . '</p>';
										echo '</div>';
										$arret--;
									}			
								?>
								<!-- </div> -->
							</div>
						</div>
					</div>	

				</div>
			</div>
		</div>

		<!-- Bloc d'affichage du résultat de ma rercherche ou à défaut les 6 dernières annonces publiées -->
		<div id="lastPosts" class="row">
			<h2 class="legend">LES DERNIERES ANNONCES</h2>
			
			<div class="row text-center">	
				<?php 
					// foreach ($DerniersProduits as $key => $value) {
					// for ($i=0; $i<=5; $i++) {
						$nbLignes = count($DerniersProduits);
						$arret = $nbLignes-1;

						while ($arret > $nbLignes-7) {
						echo '<div class="col-md-2">'.
								'<p><em>Parue le :<br>'. date('d/m/Y H:i', strtotime($DerniersProduits[$arret]['date_publication'])) . '</em></p>';
						echo	'<a href="' . $this-> url('produit_visualisation', ['id' => $DerniersProduits[$arret]['id_produit']]) . '">' .
								'<img alt="Photo produit de golf en vente" src="' . $this-> assetUrl('img/ventes/' . $DerniersProduits[$arret]['image_produit1']) . '" class="img-thumbnail" width="150" height="150">' . '</a>';
						echo	'<p><strong>'. $DerniersProduits[$arret]['intitule'] . '</strong><br>' . $DerniersProduits[$arret]['etat'] . ' - ' . $DerniersProduits[$arret]['prix'] . ' €' . '</p>';
						echo '</div>';
						$arret--;
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