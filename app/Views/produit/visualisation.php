<?php $this->layout('layout', ['title' => ' Visualisation d\'une annonce | EGA' ]) ?>

<?php echo $this->start('main_content') ?>

<div class="container">
	<p><h1 class=""><strong>VISUALISATION DE VOTRE ANNONCE</strong></h1></p>

    <!-- Zone d'affichage pour le message de validation ou non -->
    <?php if (!empty($error))  
      {
        echo '<div class="alert alert-danger">ERREUR : ' . $error . '</div>';
      } else if (!empty($success))
      {
        echo '<div class="alert alert-success">
              <strong>Bravo ! </strong><br>' . $success . '</div>';
      } 
    ?>
	
	<form id="formProfil" method="POST" action="">
		<div class="row">
			<div class="col-md-6">
				<div class="row">
						<div class="col-md-8">
						<div class="form-group">
	        					<div class="input-group">
	            					<span class="input-group-addon"><i class="glyphicon glyphicon-camera"></i></span>
	            					<strong><input type="text" class="form-control" name="intitule" value="<?= $produit->getINTITULE(); ?>" id="intitule" disabled></strong>
	          					</div>
	            			</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
	        					<div class="input-group">
	            					<span class="input-group-addon"><i class="glyphicon glyphicon-question-sign"></i></span>
	            					<input type="text" class="form-control" name="etat" value="<?= $produit->getETAT(); ?>" id="etat" disabled>
	          					</div>
	        				</div>		
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
						<div class="form-group">
		            					<div class="input-group">
		                					<span class="input-group-addon"><i class="glyphicon glyphicon-folder-open"></i></span>
		                					<input type="text" class="form-control" name="categorie" value="<?= $produit->getCATEGORIE(); ?>" id="categorie"  disabled>
		              					</div>
		            				</div>
						</div>
						<div class="col-md-4">
						<div class="form-group">
		            					<div class="input-group">
		                					<span class="input-group-addon"><i class="fa fa-hand-paper-o"></i></span>
		                					<input type="text" class="form-control" name="dexterite" value="<?= $produit->getDEXTERITE(); ?>" id="dexterite"  disabled>
		              					</div>
		            				</div>	
						</div>
						<div class="col-md-4">
						<div class="form-group">
		            					<div class="input-group">
		                					<span class="input-group-addon"><i class="fa fa-transgender"></i></span>
		                					<input type="text" class="form-control" name="sexe" value="<?= $produit->getSEXE(); ?>" id="sexe"  disabled>
		              					</div>
		            				</div>
						</div>
					</div>
				<div class="row">
						<div class="col-md-offset-8 col-md-4">
						<div class="form-group">
					                <div class="input-group">
					                  <input value="<?= $produit->getPRIX(); ?>" id="prix" name="prix" class="form-control" disabled>
					                  <span class="input-group-addon"><i class="glyphicon glyphicon-euro"></i></span>
					                </div>
	    						</div>
						</div>
					</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
				            <label for="description" class="control-label">Description :</label>
	                		<textarea id="description" name="description" rows="5" class="form-control"  disabled><?= $produit->getDESCRIPTION(); ?></textarea>
				        </div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<p>Nom Complet : <strong><?php echo $w_user['prenom']; ?> - <?php echo $w_user['nom']; ?></strong></p>
					</div>
					<div class="col-md-12">
						<div class="form-group">
		              		<div class="input-group">
		                		<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
		                		<input type="text" class="form-control" name="tel_contact" id="tel_contact" value="<?= $produit->getTEL_CONTACT() ?>" disabled>
		              		</div>
		            	</div>
		            	<div class="form-group">
		              		<div class="input-group">
		                		<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
		                		<input type="text" class="form-control" name="email_contact" id="email_contact" value="<?= $produit->getEMAIL_CONTACT() ?>" disabled>
		              		</div>
		            	</div>
		            </div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-12">
						<p>Parue le : <?= date('d/m/Y H:i', strtotime($produit->getDATE_PUBLICATION())); ?></p>
						<p>Annonce N° : <strong><?= $produit->getID_PRODUIT(); ?></strong></p>
					</div>
				</div>

				<div class="row text-center">
					<div class="col-md-offset-1 col-md-10" >
						<div>
							<?php 
							if (!empty($produit->getIMAGE_PRODUIT1())) {
								echo '<a class="fancybox-thumb" rel="gallery1" href="' . $this->assetUrl('img/ventes/') . $produit->getIMAGE_PRODUIT1() . '" title="Photo 1 - produit de golf en vente"><img class="img-thumbnail text-center" src="' . $this->assetUrl('img/ventes/') . $produit->getIMAGE_PRODUIT1() . '" width="200" height="200" alt="Photo 1 - produit de golf en vente"><br>Cliquer sur les photos pour les agrandir</a><br>';	
							}
							if (!empty($produit->getIMAGE_PRODUIT2())) {
								echo '<a class="fancybox-thumb" rel="gallery1" href="' . $this->assetUrl('img/ventes/') . $produit->getIMAGE_PRODUIT2() . '" title="Photo 2 - produit de golf en vente"><img class="img-thumbnail text-center" src="' . $this->assetUrl('img/ventes/') . $produit->getIMAGE_PRODUIT2() . '" width="150" height="150" alt="Photo 2 - produit de golf en vente"></a>';
							}
							if (!empty($produit->getIMAGE_PRODUIT3())) {
								echo '<a class="fancybox-thumb" rel="gallery1" href="' . $this->assetUrl('img/ventes/') . $produit->getIMAGE_PRODUIT3() . '" title="Photo 3 - produit de golf en vente"><img class="img-thumbnail text-center" src="' . $this->assetUrl('img/ventes/') . $produit->getIMAGE_PRODUIT3() . '" width="150" height="150" alt="Photo 3 - produit de golf en vente"></a>';
							}
							?>
						</div>
					</div>
				</div>

			</div>
		</div>
		<div class="row">
			<div class="col-md-12 bkg-vert-clair well">
				<strong>Informations sur la vente</strong>
	      	        <ul>
			          <li>Seuls les matériels et accessoires de golf des membres EGA sont permis à la vente.</li>
			          <li>EGA ne permet que la relation entre 2 membres souhaitant faire affaire.</li>
			          <li>Ega ne gére en aucune maniére la vente et décline toute responsabilité en cas de problème lors de la transaction.</li>
			        </ul>
			</div>
		</div>
		<div class="row text-center">
			<div class="col-md-2 col-md-offset-1">
				<?php if ($produit->getID_MEMBRE() == $w_user['id_membre']) {
						$idProduit = $produit->getID_PRODUIT();
						echo '<button type="submit" class="btn btn-danger" name="btnSupprimer" value="supprimer"  onclick="document.location.href="' . $this->url('produit_suppression', ['idProduit' => $idProduit]) .'" value="Supprimer l\'annonce"><span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span> Supprimer l\'annonce</button>';
				}
				?>
			</div>
			<div class="form-group">
					<a class="btn btn-primary" onclick="history.back()"><i class="glyphicon glyphicon-backward"></i>&nbsp;&nbsp;Retour page précédente</a>
			</div>
		</div>

	</form>
</div>

<?php echo $this->stop('main_content') ?>