
	<div id="panelMembre" class="tab-pane fade in active">
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
							<td><a class="glyphicon glyphicon-edit" href="'.$this->url('membre_modifierProfil', ['idMembre' => $value['id_membre']]).'" title="Modifier le profil de ce membre"></a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="glyphicon glyphicon-remove" href="'.$this->url('membre_changeActivite', ['idMembre' => $value['id_membre']]).'" title="Modifier le statut actif"></a></td>

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