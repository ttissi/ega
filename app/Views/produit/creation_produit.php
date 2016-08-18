<?php $this->layout('admin_layout', ['title' => 'Creation Produit']) ?>

<?php $this->start('main_content') ?>

<div class="creationProduitForm">
	<form method="POST" enctype="multipart/form-data" name="my_form" action="">
        <div class="form-group">
	    	
	    	<label for="produit">Cave</label>
	    	<select class="form-control" name="produit" id="produit">
<?php   	foreach($etats as $etat) { ?>
  				<option value="<?php echo $produit['id_produit']; ?>"><?php echo $produit['']; ?></option>
<?php
  			}
?>
			
<select for="etat" name="etat" class="form-control" >
          <option><label disabled>Etat</label></option>
          <option value="Neuf">Neuf</option>
          <option value="En bon état">En bon état</option>
          <option value="Passable">Passable</option>
          <option value="Usé">Usé</option>
        </select>

        <select for="categorie" name="categorie" class="form-control" >
          <option><label disabled>Catégorie</label></option>
          <option value="Chaussure">Chaussure</option>
          <option value="Accessoire">Accessoire de Golf</option>
          <option value="Voiture">Voiture de Golf</option>
        </select>

        <select for="dexterite" name="dexterite" class="form-control" >
          <option ><label disabled>Dextérité</label></option>
          <option value="Droitier">Droitier</option>
          <option value="Gaucher">Gaucher</option>
          <option value="Non applicable">Non applicable</option>
        </select>

        <select for="sexe" name="sexe" class="form-control" >
          <option ><label disabled>Sexe</label></option>
          <option value="Homme">Homme</option>
          <option value="Femme">Femme</option>
        </select>

        <input type="number" name="prix" placeholder="Prix"></input>

        <label>Description</label>
        <textarea name="description" placeholder="Description de votre matériel => limitez-vous à 5 lignes maximum SVP"></textarea>
    </fieldset>


			</select>
 	 	</div>
 		<div class="form-group">
	    	<label for="">Nom du produit FR</label>
	    	<input type="text" class="form-control" name="nomProduitFR" id="nomProduitFR" placeholder="Nom du produit FR">
	 	</div>
	  	<div class="form-group">
	    	<label for="nomProduitEN">Nom du produit EN</label>
	    	<input type="text" class="form-control" name="nomProduitEN" id="nomProduitEN" placeholder="Nom du produit EN">
	 	</div>
	 	<div class="form-group">
	    	<label for="prixUnitaire">Prix unitaire</label>
	    	<input type="number" class="form-control" name="prixUnitaire" id="prixUnitaire" placeholder="Prix unitaire">
	 	</div>
	 	<div class="form-group">
	    	<label for="descriptionFR">Description FR</label>
	    	<textarea class="form-control" rows="5" name="descriptionFR" id="descriptionFR" placeholder="Description FR"></textarea>
	 	</div>
	 	<div class="form-group">
	    	<label for="descriptionEN">Description EN</label>
	    	<textarea class="form-control" rows="5" name="descriptionEN" id="descriptionEN" placeholder="Description EN"></textarea>
	 	</div>
	 	<div class="form-group">
	    	<label for="qte">Quantité</label>
	    	<input type="number" class="form-control" name="qte" id="qte" placeholder="Quantité">
	 	</div>
	 	<div class="form-group">
   			<label for="imageProduit">Image</label>
    		<input type="file" id="imageProduit" name="imageProduit">
    		<p class="help-block">Image du produit.</p>
  		</div>
	  	<button type="submit" class="btn btn-default">Valider</button>
	</form>
</div>

<?php $this->stop('main_content'); ?>
</div>