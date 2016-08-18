<?php $this->layout('layout', ['title' => ' EGA | Creation d\'une annonce' ]) ?>

<?php echo $this->start('main_content') ?>

<div class="container well">
	<p><h1 class=""><strong>ESPACE DE VENTE CREATION</strong></h1></p>
	<form method="post"  name="my_form" enctype="multipart/form-data">
		<div class="row well">
			<div class="col-md-6">
				<div class="row well">
					<div class="col-md-8">
					<div class="form-group">
        					<div class="input-group">
            					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            					<strong><input type="text" class="form-control" name="intitule" value="" id="intitule" placeholder="Désignation Article"></strong>
          					</div>
            			</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
        					<div class="input-group">
            					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            					<strong><select for="etat" name="etat" class="form-control" >
						          <option><label disabled>Etat</label></option>
						          <option value="Neuf">Neuf</option>
						          <option value="En bon état">Bon état</option>
						          <option value="Passable">Passable</option>
						          <option value="Usé">Usé</option>
						        </select></strong>
          					</div>
        				</div>		
					</div>
				</div>
				<div class="row well">
					<div class="col-md-4">
					<div class="form-group">
	            					<div class="input-group">
	                					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	                					<strong><select  for="categorie"  name="categorie" class="form-control" >
								          <option><label  disabled>Catégorie</label></option>
								          <option value="Chaussure">Chaussure</option>
								          <option value="Accessoire">Accessoire de Golf</option>
								          <option value="Voiture">Voiture de Golf</option>
								        </select></strong>
	              					</div>
	            				</div>
					</div>
					<div class="col-md-4">
					<div class="form-group">
	            					<div class="input-group">
	                					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	                					<strong><select for="dexterite" name="dexterite" class="form-control" >
								          <option ><label disabled>Dextérité</label></option>
								          <option value="Droitier">Droitier</option>
								          <option value="Gaucher">Gaucher</option>
								          <option value="Non applicable">Non applicable</option>
								        </select></strong>
	              					</div>
	            				</div>	
					</div>
					<div class="col-md-4">
					<div class="form-group">
	            					<div class="input-group">
	                					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	                					<strong><select for="sexe" name="sexe" class="form-control" >
								          <option ><label  disabled>Sexe</label></option>
								          <option value="Homme">Homme</option>
								          <option value="Femme">Femme</option>
								        </select></strong>
	              					</div>
	            				</div>
					</div>
				</div>
				<div class="row well">
					<div class="col-md-offset-8 col-md-4">
					<div class="form-group">
				                <div class="input-group">
				                  <input type="number" class="form-control" name="prix" placeholder="Prix">
				                  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
				                </div>
    						</div>
					</div>
				</div>
				<div class="row well">
					<div class="col-md-12">
					<div class="form-group">
			              		<label for="adresse" class="control-label">Description :</label>
                				<textarea id="adresse" class="form-control" rows="4" placeholder="Description de votre matériel => limitez-vous à 5 lignes maximum SVP"></textarea>
			            	</div>
					</div>
				</div>
				<div class="row well">
					<div class="col-md-4">
					<div class="fileinput fileinput-new" data-provides="fileinput">
						<div class="fileinput-new thumbnail" style="width: 150px; height: 150px;">
						    <img src="<?php echo $this->assetUrl('img/membres/'.$w_user['photo']); ?>" alt="Photo du membre" style="max-width: 150px; max-height: 150px;">
						</div> 
						<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 200px;"></div>
						<div>
						    <span class="btn btn-default btn-file"><span class="fileinput-new">Choisir une photo</span><span class="fileinput-exists">Changer</span><input type="file" name="photoMembre"></span>
						    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Supprimer</a>
						</div>
					</div>
					</div>
					<div class="col-md-4">
					<div class="fileinput fileinput-new" data-provides="fileinput">
						<div class="fileinput-new thumbnail" style="width: 150px; height: 150px;">
						    <img src="<?php echo $this->assetUrl('img/membres/'.$w_user['photo']); ?>" alt="Photo du membre" style="max-width: 150px; max-height: 150px;">
						</div> 
						<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 200px;"></div>
						<div>
						    <span class="btn btn-default btn-file"><span class="fileinput-new">Choisir une photo</span><span class="fileinput-exists">Changer</span><input type="file" name="photoMembre"></span>
						    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Supprimer</a>
						</div>
					</div>
					</div>
					<div class="col-md-4">
					<div class="fileinput fileinput-new" data-provides="fileinput">
						<div class="fileinput-new thumbnail" style="width: 150px; height: 150px;">
						    <img src="<?php echo $this->assetUrl('img/membres/'.$w_user['photo']); ?>" alt="Photo du membre" style="max-width: 150px; max-height: 150px;">
						</div> 
						<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 200px;"></div>
						<div>
						    <span class="btn btn-default btn-file"><span class="fileinput-new">Choisir une photo</span><span class="fileinput-exists">Changer</span><input type="file" name="photoMembre"></span>
						    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Supprimer</a>
						</div>
					</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="row well">
					<div class="col-md-12">
					<div class="col-xs-8 text-right">Date de publication:</div>
	            		<div class="col-xs-4"><strong><?php echo date('d/m/Y'); ?></strong></div>
					</div>
				</div>
				<div class="row well">
					<div class="col-md-12">
					<div class="form-group primary">
		              		<div class="input-group">
		                		<span class="input-group-addon info"><i class="glyphicon glyphicon-lock"></i></span>
		                		<input type="text" class="form-control" name="pwdOld" id="pwdOld" placeholder="Ancien mot de passe">
		              		</div>
		            	</div>
		            	<div class="form-group">
		              		<div class="input-group">
		                		<span class="input-group-addon success"><i class="glyphicon glyphicon-lock"></i></span>
		                		<input type="text" class="form-control" name="pwdNew" id="pwdNew" placeholder="Nouveau mot de passe">
		              		</div>
		            	</div>
		            	<div class="form-group">
		              		<div class="input-group">
		                		<span class="input-group-addon success"><i class="glyphicon glyphicon-lock"></i></span>
		                		<input type="text" class="form-control" name="pwdConfirm" id="pwdConfirm" placeholder="Confirmez votre nouveau mot de passe">
		              		</div>
		            	</div>
					</div>
				</div>
				<div class="row well">
					<div class="col-md-12">
						<h3>Informations sur la vente</h3>
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
	<div class="row well">
		<div class="col-md-3">
			<button type="button" class="btn btn-warning" name="btnAnnuler" value="Supprimer"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Supprimer</button>
		</div>
		<div class="col-md-3">
			<button type="button" class="btn btn-warning" name="btnAnnuler" value="Visualiser"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Visualiser</button>
		</div>
		<div class="col-md-3">
			<button type="button" class="btn btn-warning" name="btnAnnuler" value="Annuler vos modifications"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Annuler vos modifications</button>
		</div>
		<div class="col-md-3">
			<button type="button" class="btn btn-warning" name="btnAnnuler" value="Valider l'annonce"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Valider l'annonce</button>
		</div>
	</div>
</div>
		</div>
<?php $this->stop('main_content') ?>
