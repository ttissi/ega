<?php $this->layout('layout', ['title' => ' EGA | Creation d\'une annonce' ]) ?>

<?php echo $this->start('main_content') ?>

<div class="container well">
	<p><h1 class=""><strong>ESPACE DE VENTE CREATION</strong></h1></p>
	<form id="formCreation" method="POST" enctype="multipart/form-data" >
		<div class="row">
			<div class="col-md-7">
				<div class="row">
					<div class="col-md-8">
					<div class="form-group">
        					<div class="input-group">
            					<span class="input-group-addon"><i class="glyphicon glyphicon-camera"></i></span>
            					<input type="text" class="form-control" name="intitule" value="" id="" placeholder="Désignation Article">
          					</div>
            			</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
        					<div class="input-group">
            					<span class="input-group-addon"><i class="glyphicon glyphicon-question-sign"></i></span>
            					<select for="etat" name="etat" class="form-control" >
						          <option selected disabled>Etat</option>
						          <option value="Neuf">Neuf</option>
						          <option value="En bon état">Bon état</option>
						          <option value="Passable">Passable</option>
						          <option value="Usé">Usé</option>
						        </select>
          					</div>
        				</div>		
					</div>
				</div>
				<div class="row">
					<div class="col-md-8">
					<div class="form-group">
	            					<div class="input-group">
	                					<span class="input-group-addon"><i class="glyphicon glyphicon-folder-open"></i></span>
	                					<select  for="categorie"  name="categorie" class="form-control" >
								          <option selected disabled>Catégorie</option>
								          <option value="Chaussure">Chaussure</option>
								          <option value="Accessoire">Accessoire de Golf</option>
								          <option value="Voiture">Voiture de Golf</option>
								        </select>
	              					</div>
	            				</div>
					</div>
					<div class="col-md-4">
					<div class="form-group">
	            					<div class="input-group">
	                					<span class="input-group-addon"><i class="fa fa-transgender"></i></span>
	                					<select for="sexe" name="sexe" class="form-control" >
								          <option selected disabled>Sexe</option>
								          <option value="Homme">Homme</option>
								          <option value="Femme">Femme</option>
								        </select>
	              					</div>
	            				</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-5 col-md-offset-3">
								<div class="form-group">
	            					<div class="input-group">
	                					<span class="input-group-addon"><i class="fa fa-hand-paper-o"></i></span>
	                					<select for="dexterite" name="dexterite" class="form-control" >
								          <option selected disabled>Dextérité</option>
								          <option value="Droitier">Droitier</option>
								          <option value="Gaucher">Gaucher</option>
								          <option value="Non applicable">Non applicable</option>
								        </select>
	              					</div>
	            				</div>	
					</div>
					<div class="col-md-4">
						<div class="form-group">
			                <div class="input-group">
			                	<span class="input-group-addon"><i class="glyphicon glyphicon-euro"></i></span>
			                  <input type="number" class="form-control" name="prix" placeholder="Prix">
			               	</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
					<div class="form-group">
			              		<label for="description" class="control-label">Description</label>
                				<textarea type="text" id="description" class="form-control" name="description" rows="5" placeholder="Description de votre matériel => limitez-vous à 5 lignes maximum SVP"></textarea>
			            	</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
					<div class="fileinput fileinput-new" data-provides="fileinput">
						<div class="fileinput-new thumbnail" style="width: 125px; height: 125px;">
						    <img src="<?php echo $this->assetUrl('img/membres/'.$w_user['photo']); ?>" alt="Photo du membre" style="max-width: 150px; max-height: 150px;">
						</div> 
						<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 150px; max-height: 150px;"></div>
						<div>
						    <span class="btn btn-default btn-file"><span class="fileinput-new"><small>Choisir une photo</small></span><span class="fileinput-exists"><small>Changer</small></span><input type="file" name="image1"></span>
						    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput"><small>Supprimer</small></a>
						</div>
					</div>
					</div>
					<div class="col-md-4">
					<div class="fileinput fileinput-new" data-provides="fileinput">
						<div class="fileinput-new thumbnail" style="width: 125px; height: 125px;">
						    <img src="<?php echo $this->assetUrl('img/membres/'.$w_user['photo']); ?>" alt="Photo du membre" style="max-width: 150px; max-height: 150px;">
						</div> 
						<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 150px; max-height: 150px;"></div>
						<div>
						   <span class="btn btn-default btn-file"><span class="fileinput-new"> <small>Choisir une photo</small></span><span class="fileinput-exists"> <small>Changer</small></span><input type="file" name="image2"></span>
						    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput"> <small>Supprimer</small></a>
						</div>
					</div>
					</div>
					<div class="col-md-4">
					<div class="fileinput fileinput-new" data-provides="fileinput">
						<div class="fileinput-new thumbnail" style="width: 125px; height: 125px;">
						    <img src="<?php if (isset($w_user)) { echo $this->assetUrl('img/membres/'.$w_user['photo']);} ?>" alt="Photo du membre" style="max-width: 150px; max-height: 150px;">
						</div> 
						<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 150px; max-height: 150px;"></div>
						<div>
						    <span class="btn btn-default btn-file"><span class="fileinput-new"><small>Choisir une photo</small></span><span class="fileinput-exists"><small>Changer</small></span><input type="file" name="image3"></span>
						    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput"><small>Supprimer</small></a>
						</div>
					</div>
					</div>
				</div>
			</div>
			<div class="col-md-5">
				<div class="row">
					<div class="col-md-12 text-right">
							<p>Date de publication:
	            			<strong><?php echo date('d/m/Y'); ?></strong></p><br>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<p>N° Membre: </p>
					</div>
					<div class="col-md-12">
						<p>Contact vendeur: </p>
					</div>

					<div class="col-md-12">
						<div class="form-group primary">
		              		<div class="input-group">
		                		<span class="input-group-addon info"><i class="glyphicon glyphicon-earphone"></i></span>
		                		<input type="text" class="form-control" name="tel_contact" id="tel_contact" placeholder="Telephone Modifiable">
		              		</div>
		            	</div>
		            	<div class="form-group">
		              		<div class="input-group">
		                		<span class="input-group-addon success"><i class="glyphicon glyphicon-envelope"></i></span>
		                		<input type="text" class="form-control" name="email_contact" id="email_contact" placeholder="Email modifiable">
		              		</div>
		            	</div>
		            </div>

				</div><br>
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
			</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-2 col-md-offset-1">
					<button type="submit" class="btn btn-danger" name="btnAnnuler" value="supprimer"><span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span> Supprimer</button>
				</div>
				<div class="col-md-2">
					<button type="submit" class="btn btn-default" name="btnAnnuler" value="visualiser"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Visualiser</button>
				</div>
				<div class="col-md-3">
					<button type="reset" class="btn btn-warning" name="btnAnnuler" value="Annuler vos modifications"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Annuler vos modifications</button>
				</div>
				<div class="col-md-3 col-md-offset-1">
					<button type="submit" class="btn btn-primary" name="btnAnnuler" value="Valider l'annonce"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Valider l'annonce</button>
				</div>
			</div>
		</form>
</div>
<?php $this->stop('main_content') ?>
