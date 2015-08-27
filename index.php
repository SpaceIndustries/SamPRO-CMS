<?php include('includes/header.php'); ?>
  <body style="background: url(<?php echo $background ?>) no-repeat center fixed; margin:0; padding:0; -webkit-background-size: cover; background-size: cover;">

    <div class="container">

      <?php include('includes/menu.php'); ?>

	      <div class="panel panel-default" style="background-color : rgba(<?php echo $backgroundrgba ?>,0.5); border: black 1px solid;">
			  <div class="panel-body">
			  <!-- Accueil -->
			  <div class="col-md-12">
                <div class="panel panel-default" style="background-color : rgba(0,0,0,0.8); border: black 1px solid;">
                    <h1 class="color-white text-center"><i class="fa fa-fw fa-home"></i> Accueil HightQualityCMS</h1>
                    <div class="panel-body color-white">
						<p>Et quia Mesopotamiae tractus omnes crebro inquietari sueti praetenturis et stationibus servabantur agrariis, laevorsum flexo itinere Osdroenae subsederat extimas partes, novum parumque
						aliquando temptatum commentum adgressus. quod si impetrasset, fulminis modo cuncta vastarat. erat autem quod cogitabat huius modi. </p>
                    </div>
					<div class="panel-body color-white text-center">
                        <a href="samp://<?php echo $ipsamp ?>:<?php echo $portsamp ?>"><button class="btn btn-default">Rejoindre le serveur SA-MP <i class="fa fa-angle-double-right"></i></button></a> ou <a href="ts3server://<?php echo $ipteamspeak3 ?>?port=<?php echo $portteamspeak3 ?>"><button class="btn btn-default">Rejoindre le TeamSpeak 3 <i class="fa fa-angle-double-right"></i></button></a>
                    </div>
					<div class="panel-body color-white">
						<p>Equitis Romani autem esse filium criminis loco poni ab accusatoribus neque his iudicantibus oportuit neque defendentibus nobis. Nam quod de pietate dixistis, est quidem ista nostra existimatio, sed iudicium certe parentis; quid nos opinemur, audietis ex iuratis; quid parentes sentiant, lacrimae matris incredibilisque maeror, squalor patris et haec praesens maestitia, quam cernitis, luctusque declarat.</p>
						<p>Proinde die funestis interrogationibus praestituto imaginarius iudex equitum resedit magister adhibitis aliis iam quae essent agenda praedoctis, et adsistebant hinc inde notarii, quid quaesitum esset, quidve responsum, cursim ad Caesarem perferentes, cuius imperio truci, stimulis reginae exsertantis aurem subinde per aulaeum, nec diluere obiecta permissi nec defensi periere conplures.</p>
						<p>Has autem provincias, quas Orontes ambiens amnis imosque pedes Cassii montis illius celsi praetermeans funditur in Parthenium mare, Gnaeus Pompeius superato Tigrane regnis Armeniorum abstractas dicioni Romanae coniunxit.</p>
                    </div>
                </div>
                </div>
				<!-- À propos -->
			    <div class="col-md-4">
                <div class="panel panel-default" style="background-color : rgba(0,0,0,0.8); border: black 1px solid;">
                    <div class="panel-heading" style="background-color : rgba(0,0,0,0.8); border: black 1px solid;">
                        <h4 class="color-white"><i class="fa fa-fw fa-info-circle"></i> À propos de nous</h4>
                    </div>
                    <div class="panel-body color-white fixed-panel">
						<p>Et quia Mesopotamiae tractus omnes crebro inquietari sueti praetenturis et stationibus servabantur agrariis, laevorsum flexo itinere Osdroenae subsederat extimas partes, novum parumque
						aliquando temptatum commentum adgressus. quod si impetrasset, fulminis modo cuncta vastarat. erat autem quod cogitabat huius modi. </p>
                    </div>
					<div class="panel-footer" style="background-color : rgba(0,0,0,0.8); border: black 1px solid; text-align:right;">
                        <a href="<?php echo $serveurabout ?>"><button class="btn btn-default">En savoir plus</button></a>
                    </div>
                </div>
                </div>
				<!-- gDernières nouvelles -->
				<div class="col-md-4">
                <div class="panel panel-default" style="background-color : rgba(0,0,0,0.8); border: black 1px solid;">
                    <div class="panel-heading" style="background-color : rgba(0,0,0,0.8); border: black 1px solid;">
                        <h4 class="color-white"><i class="fa fa-fw fa-info-circle"></i> Dernières nouvelles</h4>
                    </div>
                    <div class="panel-body color-white fixed-panel">
						<p><?php echo $lastnew ?></p>
                    </div>
					<div class="panel-footer" style="background-color : rgba(0,0,0,0.8); border: black 1px solid; text-align:right;">
                        <a href="<?php echo $lastnewforum ?>"><button class="btn btn-default">En savoir plus</button></a>
                    </div>
                </div>
                </div>
				<!-- Slider -->
				<div class="col-md-4">
                <div class="panel panel-default" style="background-color : rgba(0,0,0,0.8); border: black 1px solid;">
                    <div class="panel-heading" style="background-color : rgba(0,0,0,0.8); border: black 1px solid;">
                        <h4 class="color-white"><i class="fa fa-fw fa-camera"></i> Captures d'écran</h4>
                    </div>
                    <div class="panel-body color-white fixed-panel">
						<div id="myCarousel" class="carousel slide" data-ride="carousel">
						  <!-- Indicators -->
						  <ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
							<li data-target="#myCarousel" data-slide-to="3"></li>
							<li data-target="#myCarousel" data-slide-to="4"></li>
							<li data-target="#myCarousel" data-slide-to="5"></li>
						  </ol>

						  <!-- Wrapper for slides -->
						  <div class="carousel-inner" role="listbox">
							<div class="item active">
							  <img src="images/bg_night_1.jpg">
							</div>

							<div class="item">
							  <img src="images/bg_night_2.jpg">
							</div>

							<div class="item">
							  <img src="images/bg_night_3.jpg">
							</div>
							
							<div class="item">
							  <img src="images/bg_night_1.jpg">
							</div>

							<div class="item">
							  <img src="images/bg_night_2.jpg">
							</div>
							
							<div class="item">
							  <img src="images/bg_night_3.jpg">
							</div>
						  </div>

						  <!-- Left and right controls -->
						  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Précédent</span>
						  </a>
						  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Suivant</span>
						  </a>
						</div>
                    </div>
					<div class="panel-footer" style="background-color : rgba(0,0,0,0.8); border: black 1px solid; text-align:right;">
                        <a href="<?php echo $serveurcaptures ?>"><button class="btn btn-default">En savoir plus</button></a>
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