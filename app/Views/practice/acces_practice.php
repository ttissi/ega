<?php $this->layout('layout', ['title' => 'Accès Practice | EGA']) ?>

<?php $this->start('main_content') ?>

	<div class="col-md-8 col-md-offset-2 text-justify well">	
			
		<h1>Plan d'accès Practice </h1>
		
		<h2><a title="Plan d'Ermont" href="http://ermont.plan-interactif.com/" target="_blank">Plan d'Ermont (vue plan)</a></h2>
		<p><strong>Coordonnées GPS</strong><br>Latitude : 48° 59' 1"<br>Longitude : 2° 14' 42"</p>
		<p><img title="Plan Paris/Practice" src="http://www.ega.asso.fr/docs/practice_plan1.jpg" alt="Plan Practice" width="490" height="515"></p>
		
		<br><img style="border: black 1px solid;" title="Accès Practice" src="http://www.ega.asso.fr/docs/acces_practice.jpg" alt="Accès Practice" width="490" height="505"><br><br>

		<h2>Vue aérienne</h2>
		<p><img style="border: 0px;" title="Clic sur point rouge (Accueil practice)" src="http://www.ega.asso.fr/docs/practice_plan.jpg" alt="Accueil practice" width="498" height="657" usemap="#FPMap0"></p>
		
		<h2><a title="Practice" href="http://www.ega.asso.fr/docs/src_swf/practice.html" target="_blank"><strong>Panorama du practice</strong></a></h2>
		
		<p>
			<ul>
				<li>Direction Taverny A115</li>
				<li>Sortie Ermont</li>
				<li>Boulevard de Cernay</li>
				<li>Avenue du président Georges Pompidou</li>
				<li>Direction lycée professionnel Gustave Eiffel</li>
			</ul>
		</p>
		<p> </p>
		<p>
			<map name="FPMap0"> 
				<area shape="rect" coords="116, 276, 172, 333" href="<?= $this->url('practice_horairesPractice') ?>" />
		 	</map>
		</p>

	</div>

<?php $this->stop('main_content') ?>
