<!doctype html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>EGA || Produit</title>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
	<!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
	<script>
	$( function() {
		$( "#slider-range" ).slider({
			range: true,
			min: 0,
			max: 10000,
			values: [ 10, 300 ],
			slide: function( event, ui ) {
				$( "#amount" ).val( "€" + ui.values[ 0 ] + " - €" + ui.values[ 1 ] );
			}
		});
		$( "#amount" ).val( "€" + $( "#slider-range" ).slider( "values", 0 ) +
			" - €" + $( "#slider-range" ).slider( "values", 1 ) );
	} );
	</script>
</head>
<body>


</head>
<body>

	
	<h2>Bienvenue <?php  ?> sur la page produit.</h2>
	
	<form method="post" action="" id="formProduit">
		<fieldset>
			<legend>ESPACE DE VENTE DU MATERIEL DE GOLF</legend>

			<fieldset>
				<legend>Rechercher un matériel</legend>	

				<select class="form-control" >
					<option><label disabled>Catégorie</label></option>
					<option value="un">Un</option>
					<option value="deux">Deux</option>
					<option value="trois">Trois</option>
				</select>

				<select class="form-control" >
					<option><label disabled>Etat</label></option>
					<option value="un">Un</option>
					<option value="deux">Deux</option>
					<option value="trois">Trois</option>
				</select>

				<select class="form-control" >
					<option ><label disabled>Sexe</label></option>
					<option value="un">Un</option>
					<option value="deux">Deux</option>
					<option value="trois">Trois</option>
				</select>

				<select class="form-control" >
					<option ><label disabled>Dextérité</label></option>
					<option value="un">Un</option>
					<option value="deux">Deux</option>
					<option value="trois">Trois</option>
				</select>
			<br />
			<label>Echelle de prix</label><br />
			<input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
			<div id="slider-range"></div>

			</fieldset>
				
			<fieldset>
				<legend>MES ANNONCES</legend>
			
				<span>
				<h4>date_publication</h4>
				<img src="?">Photo1
				<p>Désignation...</p>
				<p>état - Prix (€)</p>
				</span>

				<span>
				<h4>date_publication</h4>
				<img src="?">Photo2
				<p>Désignation...</p>
				<p>état - Prix (€)</p>
				</span>

				<span>
				<h4>date_publication</h4>
				<img src="?">Photo3
				<p>Désignation...</p>
				<p>état - Prix (€)</p>
				</span>
			</fieldset>

			<fieldset>
				<legend>Les dernières annonces / Résultat de votre recherche</legend>
				
				<span>
				<h4>date_publication</h4>
				<img src="?">Photo1
				<p>Désignation...</p>
				<p>état - Prix (€)</p>
				</span>

				<span>
				<h4>date_publication</h4>
				<img src="?">Photo2
				<p>Désignation...</p>
				<p>état - Prix (€)</p>
				</span>

				<span>
				<h4>date_publication</h4>
				<img src="?">Photo3
				<p>Désignation...</p>
				<p>état - Prix (€)</p>
				</span>

				<span>
				<h4>date_publication</h4>
				<img src="?">Photo4
				<p>Désignation...</p>
				<p>état - Prix (€)</p>
				</span>

				<span>
				<h4>date_publication</h4>
				<img src="?">Photo5
				<p>Désignation...</p>
				<p>état - Prix (€)</p>
				</span>

			</fieldset>

			<h3>Informations sur la vente</h3>
			<div>
				<ul>
					<li>Seuls les matériels et accessoires de golf des membres EGA sont permis à la vente.</li>
					<li>EGA ne permet que la relation entre 2 membres souhaitant faire affaire.</li>
					<li>Ega ne gére en aucune maniére la vente et décline toute responsabilité en cas de problème lors de la transaction.</li>
				</ul>
			</div>
			
		</fieldset>
	</form>
