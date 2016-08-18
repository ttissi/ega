
<?php include_once("default/header-start.php"); ?>
	<title><?= $this->e($title) ?></title>
<?php include_once("default/header-end.php"); ?>

<div class="container margin-top-50">

	<div class="row">
	  	<div>
			<section id="modalContent" class="container">
				<div class="row no-marge-top">
					<?= $this->section('modal_content') ?>
				</div>
			</section>
		</div>
	</div>


</div>  <!--  FIN div container -->

<?php include_once("default/bas-page.php"); ?>




