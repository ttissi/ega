<!-- Favori Module Météo -->

<div class="panel-heading text-center">
        <h2 class="panel-title police-1-5em">Votre météo sur <strong><?php if (isset($_POST['golf'])) { echo $_POST['golf']; } else { echo 'Eaubonne'; } ?></strong></h2>
</div>

<div class="panel-body text-center">

	<div class="container">
		<div class="row text-center">
			
			<!-- widget meteo -->
			<div id="widget_meteo" class="col-md-12 text-center">
			<span id="l_meteo"><a href="http://www.my-meteo.fr/previsions+meteo+france/ermont.html">My-Meteo.fr</a></span>
				<script type="text/javascript">
				(function() {
					var my = document.createElement("script"); my.type = "text/javascript"; my.async = true;
					my.src = "http://services.my-meteo.fr/widget/js-design.php?ville=33540&format=vertical&nb_jours=1&ombre1=000000&c1=ffffff&c2=a9a9a9&c3=ffffff&c4=ffffff&c5=ffffff&police=0&t_icones=2&fond=6&masque=3&x=160&y=150&id=meteo";
					var z = document.getElementsByTagName("script")[0]; z.parentNode.insertBefore(my, z);
				})();
				</script>
			</div>
			<!-- widget meteo -->
		</div>
	</div>
</div>
