<?php $this->layout('layout', ['title' => ' EGA | Creation d\'une annonce' ]) ?>
  <style>
        p.result {
          margin: 0px;
          padding: 0px;
        }
       /* fieldset {
          width: 45%;
          margin: 15px 0px 25px 0px;
          padding: 15px;
        }     */
        /*fieldset.left {
          float: left;
          clear: left;
        }     
        fieldset.right {
          float: right;
          clear: right;
        }     */
        legend {
          font-weight: bold;
        }
        .button {
          text-align: right;
        }
        .button input {
          font-weight: bold;
        }
        #dnd_drag {
          display: none;
          text-align: center;
          padding: 1em 0;
          margin: 1em 0;
          color: #555;
          border: 2px dashed #888;
          border-radius: 7px;
          cursor: default;
        }
        #dnd_drag.hover {
          border: 2px dashed #000;
        }
        #xhr_status, #dnd_status {
          font-size: 90%;
          font-style: italic;
        }
        .thumb-image{float:left;width:100px;position:relative;padding:5px;}
    </style> 
<?php echo $this->start('main_content') ?>

<div class="container well">
	<p><h1 class=""><strong>ESPACE DE VENTE CREATION</strong></h1></p>
	<form method="post"  name="my_form" enctype="multipart/form-data">
		<div class="row">
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-8">
					<div class="form-group">
        					<div class="input-group">
            					<span class="input-group-addon"><i class="glyphicon glyphicon-camera"></i></span>
            					<strong><input type="text" class="form-control" name="intitule" value="" id="intitule" placeholder="Désignation Article"></strong>
          					</div>
            			</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
        					<div class="input-group">
            					<span class="input-group-addon"><i class="glyphicon glyphicon-question-sign"></i></span>
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
				<div class="row">
					<div class="col-md-4">
					<div class="form-group">
	            					<div class="input-group">
	                					<span class="input-group-addon"><i class="glyphicon glyphicon-folder-open"></i></span>
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
	                					<span class="input-group-addon"><i class="fa fa-hand-paper-o"></i></span>
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
	                					<span class="input-group-addon"><i class="fa fa-transgender"></i></span>
	                					<strong><select for="sexe" name="sexe" class="form-control" >
								          <option ><label  disabled>Sexe</label></option>
								          <option value="Homme">Homme</option>
								          <option value="Femme">Femme</option>
								        </select></strong>
	              					</div>
	            				</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-offset-8 col-md-4">
					<div class="form-group">
				                <div class="input-group">
				                  <input type="number" class="form-control" name="prix" placeholder="Prix">
				                  <span class="input-group-addon"><i class="glyphicon glyphicon-euro"></i></span>
				                </div>
    						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
					<div class="form-group">
			              		<label for="description" class="control-label">Description :</label>
                				<textarea id="description" name="description" class="form-control" rows="4" placeholder="Description de votre matériel => limitez-vous à 5 lignes maximum SVP"></textarea>
			            	</div>
					</div>
				</div>
				<div class="row">
<div class="col-md-12">
<p><input id="fileUpload" type="file" size="32" name="image1" value="" /></p>
<p><input id="fileUpload2" type="file" size="32" name="image2" value="" /></p>
<p><input id="fileUpload3" type="file" size="32" name="image3" value="" /></p>
<p class="button"><input type="hidden" name="action" value="multiple" />
<input type="submit" name="Submit" value="upload" /></p>
<!-- </form> -->
<div id="wrapper" style="margin-top: 20px;">

<div id="image-holder"></div>
<div id="image-holder2"></div>
<div id="image-holder3"></div>
</div>
<script>
$(document).ready(function() {
        $("#fileUpload").on('change', function() {
          //Get count of selected files
          var countFiles = $(this)[0].files.length;
          var imgPath = $(this)[0].value;
          var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
          var image_holder = $("#image-holder");
          image_holder.empty();
          if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
            if (typeof(FileReader) != "undefined") {
              //loop for each file selected for uploaded.
              for (var i = 0; i < countFiles; i++) 
              {
                var reader = new FileReader();
                reader.onload = function(e) {
                  $("<img />", {
                    "src": e.target.result,
                    "class": "thumb-image"
                  }).appendTo(image_holder);
                }
                image_holder.show();
                reader.readAsDataURL($(this)[0].files[i]);
              }
            } else {
              alert("This browser does not support FileReader.");
            }
          } else {
            alert("Pls select only images");
          }
        });
      });
$(document).ready(function() {
        $("#fileUpload2").on('change', function() {
          //Get count of selected files
          var countFiles = $(this)[0].files.length;
          var imgPath = $(this)[0].value;
          var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
          var image_holder2 = $("#image-holder2");
          image_holder2.empty();
          if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
            if (typeof(FileReader) != "undefined") {
              //loop for each file selected for uploaded.
              for (var i = 0; i < countFiles; i++) 
              {
                var reader = new FileReader();
                reader.onload = function(e) {
                  $("<img />", {
                    "src": e.target.result,
                    "class": "thumb-image"
                  }).appendTo(image_holder2);
                }
                image_holder2.show();
                reader.readAsDataURL($(this)[0].files[i]);
              }
            } else {
              alert("This browser does not support FileReader.");
            }
          } else {
            alert("Pls select only images");
          }
        });
      });
$(document).ready(function() {
        $("#fileUpload3").on('change', function() {
          //Get count of selected files
          var countFiles = $(this)[0].files.length;
          var imgPath = $(this)[0].value;
          var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
          var image_holder3 = $("#image-holder3");
          image_holder3.empty();
          if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
            if (typeof(FileReader) != "undefined") {
              //loop for each file selected for uploaded.
              for (var i = 0; i < countFiles; i++) 
              {
                var reader = new FileReader();
                reader.onload = function(e) {
                  $("<img />", {
                    "src": e.target.result,
                    "class": "thumb-image"
                  }).appendTo(image_holder3);
                }
                image_holder3.show();
                reader.readAsDataURL($(this)[0].files[i]);
              }
            } else {
              alert("This browser does not support FileReader.");
            }
          } else {
            alert("Pls select only images");
          }
        });
      });
</script>
					<!-- </div>
					<div class="col-md-4">
					<div class="fileinput fileinput-new" data-provides="fileinput">
						<div class="fileinput-new thumbnail" style="width: 125px; height: 125px;">
						    <img src="" alt="Photo du membre" style="max-width: 150px; max-height: 150px;">
						</div> 
						<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 150px; max-height: 150px;"></div>
						<div>
						    <span class="btn btn-default btn-file"><span class="fileinput-new">Choisir une photo</span><span class="fileinput-exists">Changer</span><input type="file" size="32" name="image2" value=""></span>
						    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Supprimer</a>
						</div>
					</div>
					</div>
					<div class="col-md-4">
					<div class="fileinput fileinput-new" data-provides="fileinput">
						<div class="fileinput-new thumbnail" style="width: 125px; height: 125px;">
						    <img src="" alt="Photo du membre" style="max-width: 150px; max-height: 150px;">
						</div> 
						<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 150px; max-height: 150px;"></div>
						<div>
						    <span class="btn btn-default btn-file"><span class="fileinput-new">Choisir une photo</span><span class="fileinput-exists">Changer</span><input type="file" size="32" name="image3" value=""></span>
						    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Supprimer</a>

						</div>
						<input type="hidden" name="action" value="multiple" />
             -->
					</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-12">
					<div class="col-xs-8 text-right">Date de publication:</div>
	            		<div class="col-xs-4"><strong><?php echo date('d/m/Y'); ?></strong></div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<p name="id_membre">N° Membre : </p>
					</div>
					<div class="col-md-12">
						<p>Votre Nom Complet : </p>
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
				</div>
				<div class="row">
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
			<div class="row">
				<div class="col-md-2">
					<!-- <button type="submit" class="btn btn-warning" name="btnAnnuler" value="Supprimer"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Supprimer</button> -->
					<input type="submit" value="Valider l'annonce">
				</div>
				<div class="col-md-2">
					<button type="button" class="btn btn-warning" name="btnAnnuler" value="Visualiser"><span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>Visualiser</button>
				</div>
				<div class="col-md-3 col-md-offset-1">
					<button type="button" class="btn btn-warning" name="btnAnnuler" value="Annuler vos modifications"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Annuler vos modifications</button>
				</div>
				<div class="col-md-3 col-md-offset-1">
					<button type="button" class="btn btn-warning" name="btnAnnuler" value="Valider l'annonce"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Valider l'annonce</button>
				</div>
			</div>
		</form>
</div>
<?php $this->stop('main_content') ?>
