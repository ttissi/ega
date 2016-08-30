<?php $this->layout('layout', ['title' => 'Plan de site | EGA']) ?>

<?php echo $this->start('main_content') ?>

	<div id="content-planSite">
		<h1>Plan de site</h1>
		
		<ul>
			<li><a href="<?= $this->url('default_home') ?>">Accueil</li>
			<li><a href="<?= $this->url('practice_accesPractice') ?>">Accès practice</a></li>
			<li><a href="<?= $this->url('practice_horairesPractice') ?>">Horaires Practice</a></li>
			<li><a href="<?= $this->url('golf_initialiseCarte') ?>">Golfs Partenaires</li>
			<li><a href="<?= $this->url('produit_affichage') ?>">Espace de vente</li>
			<li><a href="<?= $this->url('bureau_about') ?>">Qui sommes nous ?</li>
			<li><a href="<?= $this->url('bureau_compositionBureau') ?>">Composition du bureau</li>
			<li><a href="<?= $this->url('bureau_mentionsLegales') ?>">Mentions légales</a></li>
		</ul>

	</div>

<?php echo $this->stop('main_content') ?>