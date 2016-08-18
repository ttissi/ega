<?php $this->layout('layout', ['title' => ' EGA | Profil']) ?>

<?php echo $this->start('main_content') ?>

<?php 
	// Fonction qui détermine l'âge d'une personne à la date du jour
	function age($dateNaissance)  {

		list ($annee, $mois, $jour) = explode('-', $dateNaissance);

		$aujourdhui['jour'] 	= date('d');
		$aujourdhui['mois'] 	= date('m');
		$aujourdhui['annee'] 	= date('Y');	

		$monAge = $aujourdhui['annee'] - $annee;
		
		if ($aujourdhui['mois'] <= $mois) {
		  	if ($mois == $aujourdhui['mois']) {
		    	if ($jour > $aujourdhui['jour'])
		      		$monAge--;
		    }
		  	else
		    	$monAge--;
		}
		return $monAge;
	}
?>


<div class="well">

	<p><h1 class=""><strong>Page profil</strong></h1></p>
	<p>Bienvenue <strong><em><?php echo ucfirst(strtolower($w_user['prenom'])); ?></em></strong>, vous pouvez modifier vos informations sur cette page.</p>
	
	<form id="formProfil" method="POST" action="">

		<!-- Récupération des n° de carte EGA et n° de licence FFGolf -->
		<div class="row">
            <div class="col-md-3 col-md-offset-5 col-sm-4 col-sm-offset-4">
            	<div class="row">
            		<div class="col-xs-8 text-right">N° carte EGA:</div>
            		<div class="col-xs-4"><strong><?php echo $w_user['num_ega']; ?></strong></div>
            	</div>
            </div>
        </div>

		<div class="row">
            <div class="col-md-3 col-md-offset-5 col-sm-4 col-sm-offset-4">
            	<div class="row">
            		<div class="col-xs-8 text-right">N° licence FFG:</div>
            		<div class="col-xs-4"><strong><?php echo $w_user['num_ffg']; ?></strong></div>
            	</div>
            </div>
        </div>    <!-- Fin bloc numéros de carte EGA et FFG -->

		<!-- Affichage de la civilité du membre connecté -->
     	<div class="row">
        	<div class="col-md-4">
          		<div class="form-group">
		            <input type="radio" name="genre" value="monsieur" id="monsieur" <?php if($w_user['civilite'] == '') {echo 'checked disabled';} ?>>
		            <label for="monsieur">Monsieur</label>

		            <input type="radio" name="genre" value="madame" id="madame" <?php if($w_user['civilite'] == 'f') {echo 'checked disabled';} ?>>
		            <label for="madame">Madame</label>
         		 </div>
        	</div>
	     </div>		<!-- Fin Bloc civilité -->


		<!-- Identité du membre -->
        <div class="row">

        	<div class="container">
        		
        		<div class="col-md-6">
        			<div class="container">
        				
						<!-- Affiche les nom et prénom du membre -->
        				<div class="row">
        					<div class="col-md-8">
								<div class="form-group">
	            					<div class="input-group">
	                					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	                					<strong><input type="text" class="form-control" name="nom" id="nom" placeholder="Ex: Durosier" value="<?php echo $w_user['nom']; ?>" disabled></strong>
	              					</div>
	            				</div>
					            <div class="form-group">
					                <div class="input-group">
					                  	<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					                  	<strong><input type="text" class="form-control" name="prenom" id="prenom" placeholder="Ex: Albert" value="<?php echo $w_user['prenom']; ?>" disabled></strong>
					                </div>
					            </div> 
				            </div>          				
        				</div>
						<!-- Affiche la date de naissance et l'âge du membre -->
        				<div class="row">
        					<div class="col-md-8">
								<div class="form-group">
						            <label class="control-label" for="date">Date de naissance</label>
					                <div class="input-group">
					                  <input type="date" class="form-control" name="date" id="date" value="<?php echo $w_user['date_naissance']; ?>" disabled>
					                  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
					                </div>
        						</div>
        					</div>
        					<div class="col-md-4">
					          	<div class="form-group">
					          	<label class="control-label" for="age">Age</label>
						            <div class="input-group">
						                <!-- Calculer l'âge du membre en fonction de sa date de naissance et le jour courant -->
						                <!-- echo age($w_user['date_naissance']) -->
						                <input type="text" class="form-control" name="age" id="age" value="<?= age($w_user['date_naissance']); ?>" disabled>
						                <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
						            </div>
					          	</div>
        					</div>
        				</div>

        			</div>
        		</div>

        		<div class="col-md-4 col-md-offset-2">
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
        </div>		<!-- Fin Bloc Identité du membre -->


        <div class="row">

			<!-- Coordonnées du membre -->
        	<div class="container">
      		
        		<div class="col-md-6">
        		
        			<div class="container">
    			        <div class="row">
				            <div class="col-md-12">
				          		<div class="form-group">
				              		<label for="adresse" class="control-label">Adresse :</label>
                    				<textarea id="adresse" class="form-control" rows="4" placeholder="1, allée des Champs"> <?php echo $w_user['adresse']; ?> </textarea>
				            	</div>
				          	</div>
				        </div>

        				<div class="row">
        					<div class="col-md-4">
								<div class="form-group">
					              	<div class="input-group">
					                	<span class="input-group-addon"><i class="fa fa-university" aria-hidden="true"></i></span>
					                	<input type="text" class="form-control" name="cp" id="nom" placeholder="Ex: 95120" value="<?php echo $w_user['code_postal']; ?>">
					              	</div>
        						</div>
        					</div>
        					<div class="col-md-8">
					          	<div class="form-group">
					              	<div class="input-group">
					                	<span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
					                	<input type="text" class="form-control" name="ville" id="nom" placeholder="Ex: Ermont" value="<?php echo $w_user['ville']; ?>">
					              	</div>
					            </div>
        					</div>
        				</div>

					    <div class="row">
					        <div class="col-md-6">
					        	<div class="form-group">
					            	<div class="input-group">
						              	<span class="input-group-addon"><i class="fa fa-mobile" aria-hidden="true"></i></span>
						              	<input type="text" class="form-control" name="telMobile" id="telMobile" placeholder="Ex :0601020304" value="<?php echo $w_user['mobile']; ?>">
						            </div>
					        	</div>
					        </div>
					        <div class="col-md-6">
					        	<div class="form-group">
					            	<div class="input-group">
						              	<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
						              	<input type="text" class="form-control" name="telFixe" id="telFixe" placeholder="Ex: 0102030405" value="<?php echo $w_user['fixe']; ?>">
						            </div>
					        	</div>
					        </div>
					    </div>
					      
					    <div class="row">
						    <div class="col-md-12">
					        	<div class="form-group">
						            <div class="input-group">
							            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
							            <input type="text" class="form-control" name="email" id="email" placeholder="Ex: adresse@email.com" value="<?php echo $w_user['email']; ?>">
						            </div>
						        </div>
					        </div>
					    </div>

        			</div>
        		</div>

        		<div class="col-md-6">
			        <div class="row">
			        	<p><br></p>
			        </div>
			    </div>

				<!-- Bloc Mots de passe -->
	        	 <div class="col-md-4 col-md-offset-1 well bkg-vert-clair">
			        <div class="row text-center">
			        	<p><i class="glyphicon glyphicon-exclamation-triangle"></i><em>Ne renseigner qu'en cas de changement de mot de passe</em></p>
			        </div>
			        <div class="row">
			            <div class="col-md-8 col-md-offset-2">
			          		<div class="form-group primary">
			              		<div class="input-group">
			                		<span class="input-group-addon info"><i class="glyphicon glyphicon-lock"></i></span>
			                		<input type="text" class="form-control" name="pwdOld" id="pwdOld" placeholder="Ancien mot de passe">
			              		</div>
			            	</div>
			          	</div>
			        </div>

			        <div class="row">
			            <div class="col-md-8 col-md-offset-2">
			          		<div class="form-group">
			              		<div class="input-group">
			                		<span class="input-group-addon success"><i class="glyphicon glyphicon-lock"></i></span>
			                		<input type="text" class="form-control" name="pwdNew" id="pwdNew" placeholder="Nouveau mot de passe">
			              		</div>
			            	</div>
			          	</div>
			        </div>

			        <div class="row">
			            <div class="col-md-8 col-md-offset-2">
			          		<div class="form-group">
			              		<div class="input-group">
			                		<span class="input-group-addon success"><i class="glyphicon glyphicon-lock"></i></span>
			                		<input type="text" class="form-control" name="pwdConfirm" id="pwdConfirm" placeholder="Confirmez votre nouveau mot de passe">
			              		</div>
			            	</div>
			          	</div>
			        </div>

	        	 </div>
        	</div>		<!-- Fin Bloc Coordonnées du membre -->


       	</div>

		<div class="row">
			<div class="col-md-2 col-md-offset-3">
        		<button type="button" class="btn btn-warning" name="btnAnnuler" value="Annuler"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Fermer et revenir à l'accueil</button>
			</div>
       		<div class="col-md-2 col-md-offset-2">
      			<button type="button" class="btn btn-success" name="btnModifier" value="Modifier"><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span> Appliquer les changements</button>
        	</div>
        </div>

	</form>

</div>

<?php $this->stop('main_content') ?>
