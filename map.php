<?php include('includes/header.php'); ?>
  <body style="background: url(<?php echo $background ?>) repeat center fixed; margin:0; padding:0; -webkit-background-size: cover; background-size: cover;">

    <div class="container">
    <div class="row ">

      <?php include('includes/menu.php'); ?>

		<div class="grey darken-1 z-depth-2">    
			 
			  <!-- Description de la carte interactive -->
				<div class="col s12">
                
                    <h1 class="color-white text-center"><i class="fa fa-fw fa-map-marker"></i> Carte du serveur</h1>
                    <div class="panel-body color-white">
						<?php echo $mapabouts; ?>
                    </div>
                
                </div>
				<!-- iframe gtamap.net -->
				<div class="col s12">
						
							<h4 class="color-white"><i class="fa fa-fw fa-map-marker"></i> <?php echo $gtamapname; ?></h4><br><center><iframe src="<?php echo $gtamapdotnet; ?>" width="100%" height="400" frameborder="0"></iframe></center>
						
				</div>
			
				<?php require_once('includes/footer.php'); ?>
				</div>
			  </div>
		  </div>
		  </div>
    </div>

<?php require_once('includes/javascript.php'); ?>
  </body>
</html>