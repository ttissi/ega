<?php $this->layout('layout', ['title' => ' EGA | Creation d\'une annonce' ]) ?>
				
				

<?php echo $this->start('main_content') ?>
<form method="post" action="" id="formAffichageProduit">
		

<div class="container-fluid">
	<div class="row well">
			<legend>ESPACE DE VENTE DU MATERIEL DE GOLF</legend>
		<div class="col-md-6">
			<div class="row">
				<legend>Rechercher un matériel</legend>
				<div class="col-md-6">
					<div class="form-group">
    					<div class="input-group">
        					<span class="input-group-addon"><i class="glyphicon glyphicon-folder-open"></i></span>
        					<select  for="categorie"  name="categorie" class="form-control" >
					          <option selected disabled>Categorie</option>
					          <option value="Chaussure">Chaussure</option>
					          <option value="Accessoire de Golf">Accessoire de Golf</option>
					          <option value="Voiture de Golf">Voiture de Golf</option>
					        </select>
      					</div>
    				</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
    					<div class="input-group">
        					<span class="input-group-addon"><i class="glyphicon glyphicon-question-sign"></i></span>
        					<select for="etat" name="etat" class="form-control" >
					          <option selected disabled>Etat</option>
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
    					<div class="input-group">
        					<span class="input-group-addon"><i class="fa fa-transgender"></i></span>
        					<select for="sexe" name="sexe" class="form-control" >
					          <option selected disabled>Sexe</option>
					          <option value="Homme">Homme</option>
					          <option value="Femme">Femme</option>
					          <option value="Mixte">Mixte</option>
					        </select>
      					</div>
    				</div>
				</div>
				<div class="col-md-6">
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
			</div>

			<div class="row">
				<div class="col-md-12">
					
					
				</div>
			</div>
			<div class="row ">
				<div class="col-md-12">
					<button type="submit" name="btnrecherche" >Lancer la recherche</button>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<legend>MES ANNONCES</legend>
			<div class="row well">
				<div class="col-md-4">
					<p>Date de publication :</p>
					<img alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/" class="img-thumbnail" />
					<p></p>
					<p> -  €</p>
				</div>
				<div class="col-md-4">
					<p>Date de publication :</p>
					<img alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/" class="img-thumbnail" />
					<p></p>
					<p> -  €</p>
				</div>
				<div class="col-md-4">
					<p>Date de publication :</p>
					<img alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/" class="img-thumbnail" />
					<p></p>
					<p> -  €</p>
				</div>
			</div>
			<ul class="pagination pagination-sm">
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
	<div  id="lastPosts" class="row well">
		<div class="col-md-12">
			<div class="row well">
			<legend >Les dernières annonces / Résultat de votre recherche</legend>
			<?php 

			foreach ($ObjetAllProduit as $ObjetProduit => $value) {
	
	
				echo 	'<div class="col-md-2">';
				echo	'<p>' . 'Publication:' . '</p>';
				echo	'<p>'. $ObjetAllProduit[$ObjetProduit]['date_publication'] . '</p>';
				echo	'<a href="'.$this->assetUrl('img/ventes/'.$ObjetAllProduit[$ObjetProduit]['image_produit1']).'">'
						.'<img alt="Bootstrap Image Preview" src="'.$this->assetUrl('img/ventes/'.$ObjetAllProduit[$ObjetProduit]['image_produit1']).'" 	 
							class="img-thumbnail" />'.'</a>';
	 			
				echo	'<p>'. $ObjetAllProduit[$ObjetProduit]['etat'] .' - '.$ObjetAllProduit[$ObjetProduit]['prix']. '€' . '</p>';
				
				// echo	<p>état - Prix (€)</p>	
				echo	'</div>';
}


				
		echo '</div>';
?>
			
			<ul class="pagination pagination-sm">
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

</form>


<?php

// echo '<pre>';
// print_r($db); 
// echo '</pre>';
// echo '<pre>';
// 	print_r($ObjetProduit);
// 	echo '</pre>';

// echo '<pre>';
// 	print_r($sth);
// 	echo '</pre>';
	// echo '<pre>';
	// print_r($ObjetAllProduit);
	// echo '</pre>';
echo '<pre>';
	// print_r($MembreProduit);
echo '</pre>';

// echo '<pre>';
// print_r($_SESSION['user']); 
// echo '</pre>';

// echo '<pre>';
// print_r($w_user['id_membre']); 
// echo '</pre>';

// $w_user['id_membre']

?>



<?php $this->stop('main_content') ?>