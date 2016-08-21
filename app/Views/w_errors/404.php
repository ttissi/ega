<?php $this->layout('layout', ['title' => 'Loupé !']) ?>

<?php $this->start('main_content'); ?>

	<h1>OUPS ! Erreur 404</h1>
	<p>La page recherchée n'a pas été trouvée...<br>
	Ré-essaye encore, c'est comme le swing, c'est jamais gagné, il faut persévérer à l'entrainement !<br><br>
	Si l'erreur se reproduit, merci de prendre contact avec l'administrateur du site.<br>
	Le lien contact se situe en bas de la page.<br><br>
	Bon swing ;)</p>
	<img src="<?= $this->assetUrl('img/divers/erreur404.jpg'); ?>" alt="Erreur 404" height="300">

<?php $this->stop('main_content'); ?>
