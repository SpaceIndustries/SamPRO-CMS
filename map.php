<?php include('includes/header.php'); ?>
  <body style="background: url(<?php echo $background ?>) no-repeat center fixed; margin:0; padding:0; -webkit-background-size: cover; background-size: cover;">

    <div class="container">

      <?php include('includes/menu.php'); ?>

	      <div class="panel panel-default" style="background-color : rgba(<?php echo $backgroundrgba ?>,0.5); border: black 1px solid;">
			  <div class="panel-body">
			  <!-- Description de la carte interactive -->
				<div class="col-md-12">
                <div class="panel panel-default" style="background-color : rgba(0,0,0,0.8); border: black 1px solid;">
                    <h1 class="color-white text-center"><i class="fa fa-fw fa-map-marker"></i> Carte du serveur</h1>
                    <div class="panel-body color-white">
						<p>Et quia Mesopotamiae tractus omnes crebro inquietari sueti praetenturis et stationibus servabantur agrariis, laevorsum flexo itinere Osdroenae subsederat extimas partes, novum parumque
						aliquando temptatum commentum adgressus. quod si impetrasset, fulminis modo cuncta vastarat. erat autem quod cogitabat huius modi. </p>
                    </div>
                </div>
                </div>
				<!-- iframe gtamap.net -->
				<div class="col-md-12">
					<div class="panel panel-default" style="background-color : rgba(0,0,0,0.8); border: black 1px solid;">
						<div class="panel-body">
							<h4 class="color-white"><i class="fa fa-fw fa-map-marker"></i> <?php echo $gtamapname ?></h4><br><center><iframe src="<?php echo $gtamapdotnet ?>" width="500" height="500" frameborder="0"></iframe></center>
						</div>
					</div>
				</div>
				<?php require_once('includes/footer.php'); ?>
			  </div>
		  </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>