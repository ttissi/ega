<!-- <?php // include_once("default/init.php"); ?> -->

<?php include_once("default/header-start.php"); ?>
	<title><?= $this->e($title) ?></title>
<?php include_once("default/header-end.php"); ?>

<?php include_once("default/navbar.php"); ?>

<!-- <?php // include_once("default/main.php"); ?> -->

<div class="container margin-top-50">
<!-- <div class="container"> -->
	<div class="row">

	  	<div class="col-md-2">
			<section id="panelLeftId" class="container">
				<div class="row no-marge-top">
					<?= $this->section('panel_left') ?>
				</div>
			</section>
		</div>

	  	<div class="col-md-8">		
			<section id="mainContentId" class="container">
				<!-- <div class="row no-marge-top"> -->
					<?= $this->section('main_content') ?>
				<!-- </div> -->
			</section>
	  	</div>  <!-- /.col-md-8 -->

	    <div class="col-md-2 margin-top-20">
			<section id="sidebarRightId" class="container">
					<?= $this->section('sidebar_right') ?>
			</section>
		</div>  <!-- /.col-md-2 -->			

	</div>

			<section id="modalWindowsId" class="container">
					<?= $this->section('modal_windows') ?>
			</section>

</div>  <!--  FIN div container -->

<?php include_once("default/footer.php"); ?>


<?php include_once("default/bas-page.php"); ?>




