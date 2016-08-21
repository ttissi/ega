<?php $this->layout('layout', ['title' => 'Administration | EGA']) ?>

<?php echo $this->start('main_content') ?>

<h2>Back office</h2>
<ul class="nav nav-pills nav nav-tabs">
	<li class="active"><a data-toggle="pill" href="#membre">Membres</a></li>
	<li><a data-toggle="pill" href="#vente">Ventes</a></li>
	<li><a data-toggle="pill" href="#location">Locations</a></li>
	<li><a data-toggle="pill" href="#competition">Compétitions</a></li>
</ul>

<div class="tab-content">
	
	<div id=membre class="tab-pane fade in active">
		<div class="row">
			<div class="col-md-6">
				<h3>Membre</h3>
			</div>
			<div class="col-md-6">
				<form class="navbar-form navbar-right inline-form">
			      	<div class="form-group">
			        	<input type="search" class="input-sm form-control" placeholder="N° de membre">
			        	<button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-search"></span></button>
			      	</div>
			      	<div class="form-group">
			        	<input type="search" class="input-sm form-control" placeholder="Nom du membre">
			        	<button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-user"></span></button>
			      	</div>
			    </form>
			</div>			
		</div>
	
		<table id="tableListeMembre" class="table table-condensed table-striped table-hover">
			<tbody>
				<thead class="bkg-vert-clair">
						<th class="vmiddle">N°</th>
						<th class="vmiddle">N° EGA</th>
						<th class="vmiddle">N° FFG</th>
						<th class="vmiddle">Nom</th>
						<th class="vmiddle">Prénom</th>
						<!-- <th>Adresse</th> -->
						<!-- <th>Code postal</th> -->
						<!-- <th>Ville</th> -->
						<th class="vmiddle">Tél. mobile</th>
						<th class="vmiddle">Tél. fixe</th>
						<th class="vmiddle">Email</th>
						<!-- <th>Photo</th> -->
						<th class="vmiddle">Actif</th>
						<th class="vmiddle">Admin</th>
						<th class="vmiddle">Déja connecté</th>
						<th class="vmiddle">Action</th>
				</thead>
				<?php 
					$i = 1; // Variable pour numéroter chaque ligne.
					foreach ($ListeMembres as $value) 
					{
						echo '<tr>
							<td>'.$i++.'</td>
							<td>'.$value['num_ega'].'</td>
							<td>'.$value['num_ffg'].'</td>
							<td>'.$value['nom'].'</td>
							<td>'.$value['prenom'].'</td>
							<td>'.$value['mobile'].'</td>
							<td>'.$value['fixe'].'</td>
							<td>'.$value['email'].'</td>
							<td>'.$value['actif'].'</td>
							<td>'.$value['admin'].'</td>
							<td>';
							if($value['premiere_connexion']==1){echo 'Non';} else{echo 'Oui';}
							echo '</td>
							<td><a class="glyphicon glyphicon-edit" href="'.$this->url('membre_modifierProfil', ['idMembre'=>$value['id_membre']]).'" title="Modifier le profil de ce membre"></a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="glyphicon glyphicon-remove" href="?action=desactiver&'.$value['id_membre'].'" title="Modifier le statut actif"></a></td>

						</tr>';
					}

						// Affichage adresse, code postal et ville
						//<td>'.$value['adresse'].'</td>
						//<td>'.$value['code_postal'].'</td>
						//<td>'.$value['ville'].'</td>
						// Affichage image
						//<td><img src="'.$this->assetUrl('img/membres/'.$value['photo']).'" width="70" heigth="100"></td>
				?>
			</tbody>
		</table>
			
	</div>	

	<div id=vente class="tab-pane fade">
		<h3>Vente</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat.</p>
	</div>	

	<div id=location class="tab-pane fade">
		<h3>Location</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat.</p>
	</div>

	<div id=competition class="tab-pane fade">
		<h3>Compétition</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat.</p>
	</div>

</div>



<?php echo $this->stop('main_content') ?>