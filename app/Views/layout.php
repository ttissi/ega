<?php include_once("default/init.php"); ?>
<!-- <?php // include_once("default/haut-page.php"); ?> -->

<?php include_once("default/header.php"); ?>
<?php include_once("default/navbar.php"); ?>

<?php // include_once("default/main.php"); ?>

	<section>
		<?= $this->section('panel_left') ?>
	</section>	

	<section>
		<?= $this->section('main_content') ?>
	</section>

	<section>
		<?= $this->section('sidebar_right') ?>
	</section>	

	<section>
        <?= $this->section('footer_content') ?>
	</section>

<?php include_once("default/footer.php"); ?>
<?php include_once("default/bas-page.php"); ?>




