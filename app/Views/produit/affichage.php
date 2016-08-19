<div class="container-fluid">
	<div class="row">
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
    					<div class="input-group">
        					<span class="input-group-addon"><i class="glyphicon glyphicon-folder-open"></i></span>
        					<select  for="categorie"  name="categorie" class="form-control" >
					          <option selected disabled>Categorie</option>
					          <option value="Chaussure">Chaussure</option>
					          <option value="Accessoire de golf">Accessoire de Golf</option>
					          <option value="Voiture de golf">Voiture de Golf</option>
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
					          <option value="En bon état">Bon état</option>
					          <option value="Passable">Passable</option>
					          <option value="Usé">Usé</option>
					        </select>
      					</div>
    				</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
				</div>
				<div class="col-md-6">
				</div>
			</div>
			<div class="row">
				<label>Echelle de prix</label>
				<div id="slider-range" class="col-md-12">
					<input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
				</div>
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
			</div>
			<div class="row">
				<div class="col-md-12">
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-4">
				</div>
				<div class="col-md-4">
				</div>
				<div class="col-md-4">
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
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-2">
				</div>
				<div class="col-md-2">
				</div>
				<div class="col-md-2">
				</div>
				<div class="col-md-2">
				</div>
				<div class="col-md-2">
				</div>
				<div class="col-md-2">
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
	<div class="row">
		<div class="col-md-12">
		</div>
	</div>
</div>