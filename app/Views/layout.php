<?php include_once("default/header-start.php"); ?>

	<title><?= $this->e($title) ?></title>

<?php include_once("default/header-end.php"); ?>

<?php include_once("default/navbar.php"); ?>

<!-- <?php // include_once("default/main.php"); ?> -->

<div class="container margin-top-50">
<!-- <div class="container"> -->
	<div class="row">

	  	<div class="col-md-2">
	  		<?php 
	  			if (isset($titlePanelLeft)) {
	  				echo 	'<h2 class="visuallyhidden">'.$this->e($titlePanelLeft).'</h2>'.
							'<section id="panelLeftId" class="container">'.
								'<div class="row no-marge-top">'.
									$this->section('panel_left').
								'</div>'.
							'</section>';
				}
			?>
		</div>    <!-- /.col-md-2 -->

	  	<div class="col-md-8">		
			<section id="mainContentId" class="container">
				<div class="row margin-top-20">
					<?= $this->section('main_content') ?>
				</div>
			</section>
	  	</div>  <!-- /.col-md-8 -->

	    <div class="col-md-2 margin-top-20">
	    	<?php 
	    		if (isset($titleSidebarRight)) {
	    			echo 	'<h2 class="text-right">'.$this->e($titleSidebarRight).'</h2>'.
							'<section id="sidebarRightId" class="container">'.
								$this->section('sidebar_right').
							'</section>';
				} 
			?>
		</div>  <!-- /.col-md-2 -->			

	</div>

	<?php include_once("default/footer.php"); ?>

</div>  <!--  FIN div container -->

<?php include_once("default/bas-page.php"); ?>




