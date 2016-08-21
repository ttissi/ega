<?php $this->layout('layout', ['title' => 'Bureau | EGA']) ?>

<?php $this->start('main_content') ?>

	<div class="col-md-10 col-md-offset-1 well">	
	<h1 class="text-center"><strong>Les membres du bureau</strong></h1>
	<p style="text-align: center;"><img title="Les Membres du bureau" onmouseover="this.src='<?= $this->assetUrl('img/bureau/bureau_membres2.png') ?>';" onmouseout="this.src='<?= $this->assetUrl('img/bureau/bureau_membres.png') ?>';" src="<?= $this->assetUrl('img/bureau/bureau_membres.png') ?>" alt="Composition du bureau de l\'association" width="115" height="90" /> </p>
	
	<table class="table table-striped table-hover">
		<tbody>
			<thead class="bkg-vert-clair">
				<th>Le bureau</th>
				<th>Prénom / Nom</th>
				<th>Portable</th>
				<th>Photo</th>
			</thead>
			<tr>
				<td>Président</td>
				<td>Marcel Soares</td>
				<td>06 76 76 88 64</td>
				<td><img title="Marcel Soares" class="img-rounded" src="<?= $this->assetUrl('img/membres/451_SOARES_MARCEL.JPG') ?>" alt="Marcel Soares" height="90" /></td>
			</tr>
			<tr>
				<td>Secrétaire</td>
				<td>Gisèle Grieu</td>
				<td>06 24 36 23 29</td>
				<td><img title="Gisèle Grieu" class="img-rounded" src="<?= $this->assetUrl('img/membres/1029_GRIEU_GISELE.JPG') ?>"	 alt="Gisèle Grieu" height="90" /></td>
			</tr>
			<tr>
				<td>Secrétaires suppléants</td>
				<td>Sylvie Chrétien<br />Sébastien Piguillem</td>
				<td>06 75 51 58 88<br />06 38 01 10 37</td>
				<td><img title="Sylvie Chrétien" class="img-rounded" src="<?= $this->assetUrl('img/membres/906_CHRETIEN_SYLVIE.JPG') ?>" alt="	Sylvie Chrétien" height="90" /><img title="Sébastien Piguillem" src="<?= $this->assetUrl('img/membres/36_PIGUILLEM_SEBASTIEN.JPG') ?>" alt="	Sébastien Piguillem" height="90" /></td>
			</tr>
			<tr>
				<td>Trésorier</td>
				<td>Yannick <span>Morellec</span></td>
				<td>06 78 02 12 08</td>
				<td><img title="Yannick Morellec" class="img-rounded" src="<?= $this->assetUrl('img/membres/864_MORELLEC_YANNICK.JPG') ?>" alt="Yannick Morellec" height="90" /></td>
			</tr>
			<thead class="bkg-vert-clair">
				<th colspan="4">Responsable des adhésions</th>
			</thead>
			<tr>
				<td> </td>
				<td>Didier Pamart</td>
				<td>06 87 30 37 39</td>
				<td><img title="Didier Pamart" class="img-rounded" src="<?= $this->assetUrl('img/membres/230_PAMART_DIDIER.JPG') ?>" alt="Didier Pamart" 	height="90" /></td>
			</tr>
			<thead class="bkg-vert-clair">
				<th colspan="4">Communication / Animations</th>
			</thead>
			<tr>
				<td>Place vacante</td>
				<td> </td>
				<td> </td>
				<td> </td>
			</tr>
			<thead class="bkg-vert-clair">
				<th colspan="4">Commission sportive</th>
			</thead>
			<tr>
				<td>Responsable</td>
				<td>Jean-Claude Jost</td>
				<td>06 67 23 95 31</td>
				<td><img title="Jost Jean-Claude" class="img-rounded" src="<?= $this->assetUrl('img/membres/153_JOST_JEAN_CLAUDE.JPG') ?>" alt="Jost Jean-Claude" height="90" /></td>
			</tr>
			<tr>
				<td>Compétition Femmes</td>
				<td>Sylvie Chrétien </td>
				<td>06 75 51 58 88</td>
				<td><img title="Sylvie Chrétien" class="img-rounded" src="<?= $this->assetUrl('img/membres/906_CHRETIEN_SYLVIE.JPG') ?>" alt="	Sylvie Chrétien" height="90" /></td>
			</tr>
			<thead class="bkg-vert-clair">
				<th colspan="4">Compétitions de classement</th>
			</thead>
			<tr>
				<td>Responsable</td>
				<td>Bernard Lesschaeve</td>
				<td>06 52 25 95 20 </td>
				<td><img title="Bernard Lesschaeve" class="img-rounded" src="<?= $this->assetUrl('img/membres/41_LESSCHAEVE_BERNARD.JPG') ?>" alt="Bernard Lesschaeve" 	height="90" /></td>
			</tr>
			<thead class="bkg-vert-clair">
				<th colspan="4">Responsables du practice</th>

			</thead>
			<tr>
				<td>Vice-Président</td>
				<td>Roger Ghnassia</td>
				<td>06 07 35 27 13</td>
				<td><img title="Roger Ghnassia" class="img-rounded" src="<?= $this->assetUrl('img/membres/13_GHNASSIA_ROGER.JPG') ?>"	 alt="Roger Ghnassia" height="90" /></td>
			</tr>
			<tr>
				<td> </td>
				<td>Fernand <span>Faccenda</span></td>
				<td>06 08 28 79 30</td>
				<td><img title="Fernand Faccenda" class="img-rounded" src="<?= $this->assetUrl('img/membres/2399_FACCENDA_FERNAND.JPG') ?>" alt="Fernand Faccenda" width="79" height="90" /></td>
			</tr>
		</tbody>
	</table>
	</div>

<?php $this->stop('main_content') ?>