<?php $this->layout('layout', ['title' => ' Visualisation d\'une annonce | EGA' ]) ?>

<?php echo $this->start('main_content') ?>

<div class="container well">
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
            					<strong><input type="text" class="form-control" name="etat" value="<?= $produit->getETAT(); ?>" id="etat" disabled></strong>
          					</div>
        				</div>		
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
					<div class="form-group">
	            					<div class="input-group">
	                					<span class="input-group-addon"><i class="glyphicon glyphicon-folder-open"></i></span>
	                					<strong><input type="text" class="form-control" name="categorie" value="<?= $produit->getCATEGORIE(); ?>" id="categorie"  disabled></strong>
	              					</div>
	            				</div>
					</div>
					<div class="col-md-4">
					<div class="form-group">
	            					<div class="input-group">
	                					<span class="input-group-addon"><i class="fa fa-hand-paper-o"></i></span>
	                					<strong><input type="text" class="form-control" name="dexterite" value="<?= $produit->getDEXTERITE(); ?>" id="dexterite"  disabled></strong>
	              					</div>
	            				</div>	
					</div>
					<div class="col-md-4">
					<div class="form-group">
	            					<div class="input-group">
	                					<span class="input-group-addon"><i class="fa fa-transgender"></i></span>
	                					<strong><input type="text" class="form-control" name="sexe" value="<?= $produit->getSEXE(); ?>" id="sexe"  disabled></strong>
	              					</div>
	            				</div>
					</div>
				</div>
			<div class="row">
					<div class="col-md-offset-8 col-md-4">
					<div class="form-group">
				                <div class="input-group">
				                  <strong><input value="<?= $produit->getPRIX(); ?>" id="prix" name="prix" class="form-control" disabled></strong>
				                  <span class="input-group-addon"><i class="glyphicon glyphicon-euro"></i></span>
				                </div>
    						</div>
					</div>
				</div>
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
			            <label for="description" class="control-label">Description :</label>
                		<strong><textarea type="text"  name="description" rows="5" class="form-control"  disabled><?= $produit->getDESCRIPTION(); ?></textarea></strong>
			        </div>
				</div>
			</div>
			<div class="row">
					<div class="col-md-12">
						<p>N° Membre : <?php echo $w_user['num_ega']; ?></p>
					</div>
					<div class="col-md-12">
						<p>Nom Complet : <?php echo $w_user['prenom']; ?> - <?php echo $w_user['nom']; ?></p>
					</div>

					<div class="col-md-12">
					<div class="form-group primary">
		              		<div class="input-group">
		                		<span class="input-group-addon info"><i class="glyphicon glyphicon-earphone"></i></span>
		                		<input type="text" class="form-control" name="tel_contact" id="tel_contact" value="<?= $produit->getTEL_CONTACT() ?>" disabled>
		              		</div>
		            	</div>
		            	<div class="form-group">
		              		<div class="input-group">
		                		<span class="input-group-addon success"><i class="glyphicon glyphicon-envelope"></i></span>
		                		<input type="text" class="form-control" name="email_contact" id="email_contact" value="<?= $produit->getEMAIL_CONTACT() ?>" disabled>
		              		</div>
		            	</div>
		            </div>
				</div>
		</div>
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-12">
					<!-- Passer au format français -->
					<p>Parue le : <?= $produit->getDATE_PUBLICATION(); ?></p>
					<p>Annonce N° : <?= $produit->getID_PRODUIT(); ?></p>
				</div>
			</div>

			<div class="row">
				<div class="col-md-offset-2 col-md-10" >
					<div>
						<?php if (!empty($produit->getIMAGE_PRODUIT1())) {
							echo '<img class="img-thumbnail text-center" src="' . $this->assetUrl('img/ventes/') . $produit->getIMAGE_PRODUIT1() . '" width="200" height="200"></img>' .
							'<div class="text-center"><span>Photo 1</span></div>'; } 
						?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div>
						<?php if (!empty($produit->getIMAGE_PRODUIT2())) {
							echo '<img class="img-thumbnail" src="' . $this->assetUrl('img/ventes/') . $produit->getIMAGE_PRODUIT2() . '" width="150" height="150"></img>' .
							'<div class="text-center"><span>Photo 2</span></div>'; } 
						?>
					</div>
				</div>
				<div class="col-md-6">
					<div>
						<?php if (!empty($produit->getIMAGE_PRODUIT3())) {
							echo '<img class="img-thumbnail" src="' . $this->assetUrl('img/ventes/') . $produit->getIMAGE_PRODUIT3() . '" width="150" height="150"></img>' .
							'<div class="text-center"><span>Photo 3</span></div>'; } 
						?>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<h3>Informations sur la vente</h3>
      	        <ul>
		          <li>Seuls les matériels et accessoires de golf des membres EGA sont permis à la vente.</li>
		          <li>EGA ne permet que la relation entre 2 membres souhaitant faire affaire.</li>
		          <li>Ega ne gére en aucune maniére la vente et décline toute responsabilité en cas de problème lors de la transaction.</li>
		        </ul>
		</div>
	</div>
</div>
<?php echo $this->stop('main_content') ?>