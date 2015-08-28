<?php include('includes/header.php'); ?>
  <body style="background: url(<?php echo $background ?>) repeat center fixed; margin:0; padding:0; -webkit-background-size: cover; background-size: cover;">

    <div class="container">

      <?php include('includes/menu.php'); ?>

	      <div class="panel panel-default" style="background-color : rgba(<?php echo $backgroundrgba ?>,0.5); border: black 1px solid;">
			  <div class="panel-body">
			  <!-- Description de la carte interactive -->
				<div class="col-md-12">
                <div class="panel panel-default" style="background-color : rgba(0,0,0,0.8); border: black 1px solid;">
                    <h1 class="color-white text-center"><i class="fa fa-fw fa-map-marker"></i> Carte du serveur</h1>
                    <div class="panel-body color-white">
						<?php echo $mapabouts ?>
                    </div>
                </div>
                </div>
				<!-- iframe gtamap.net -->
				<div class="col-md-12">
					<div class="panel panel-default" style="background-color : rgba(0,0,0,0.8); border: black 1px solid;">
						<div class="panel-body">
							<h4 class="color-white"><i class="fa fa-fw fa-map-marker"></i> <?php echo $gtamapname ?></h4><br><center><iframe src="<?php echo $gtamapdotnet ?>" width="50%" height="50%" frameborder="0"></iframe></center>
						</div>
					</div>
				</div>
				<?php require_once('includes/footer.php'); ?>
			  </div>
		  </div>

    </div>

<?php require_once('includes/javascript.php'); ?>
  </body>
</html>