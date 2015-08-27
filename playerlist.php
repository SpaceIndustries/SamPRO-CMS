<?php include('includes/header.php'); ?>
  <body style="background-image: url('<?php echo $background ?>'); background-repeat: no-repeat; background-attachment: fixed; background-size: 100%;">

    <div class="container">

      <?php include('includes/menu.php'); ?>

	      <div class="panel panel-default" style="background-color : rgba(<?php echo $backgroundrgba ?>,0.8); border: black 1px solid;">
			  <div class="panel-body">
				<div class="row">
							<!-- /.panel-heading -->
							<div class="panel-body color-white">
							<!-- Liste des joueurs -->
							<div class="col-md-12">
							<div class="panel panel-default" style="background-color : rgba(0,0,0,0.8); border: black 1px solid;">
								<h1 class="color-white text-center"><i class="fa fa-th-list"></i> Liste des joueurs connectés (<?php echo $plr_count ?> / <?php echo $max_plrs ?>)</h1>
								<div class="panel-body color-white">
								<div class="table-responsive">
									<?php
										if (!isset($ip))
											$ip = '51.254.10.217'; // Adresse IP du serveur SA-MP
										if (!isset($port))
											$port = 9999; // Port du serveur SA-MP

										$fp = fsockopen('udp://' . $ip, $port, $errno, $errstr);
										if (!$fp)
										{
											echo "<tr><td bgcolor=\"#2B5486\">Socket Error: $errno - $errstr</td></tr>\n";
										}
										else
										{
											$packet = 'SAMP';
											$packet .= chr(strtok($ip, '.'));
											$packet .= chr(strtok('.'));
											$packet .= chr(strtok('.'));
											$packet .= chr(strtok('.'));
											$packet .= chr($port & 0xFF);
											$packet .= chr($port >> 8 & 0xFF);

											fwrite($fp, $packet.'i');
											fread($fp, 11);
											$is_passworded = ord(fread($fp, 1));
											$plr_count   = ord(fread($fp, 2));
											$max_plrs   = ord(fread($fp, 2));
											$strlen    = ord(fread($fp, 4));
											$hostname   = fread($fp, $strlen);
											$strlen    = ord(fread($fp, 4));
											$gamemode   = fread($fp, $strlen);
											$strlen    = ord(fread($fp, 4));
											$mapname    = fread($fp, $strlen);

											fwrite($fp, $packet.'c');
											fread($fp, 11);
											$plr_count = ord(fread($fp, 2));
											if ($plr_count > 0)
											{
												echo '  </table><br>'."\n";
												echo '  <table class="table color-white">'."\n";
												echo '  <thead><tr><th><i class="fa fa-user"></i> <b>Joueurs connectés</b></th><th><i class="fa fa-trophy"></i> <b>Niveaux</b></th></tr></thead>'."\n";
												echo '  <tbody>';
												for ($i=0; $i<$plr_count; $i++)
												{
													$strlen = ord(fread($fp, 1));
													$plrname = fread($fp, $strlen);
													$score = ord(fread($fp, 4));
													echo '   <tr><td>' . $plrname . '</td><td>' . $score . '</td></tr>'."\n";
												}
												echo ' </tbody>';
											}
											fclose($fp);
										}
									?>
								</div>
							</div>
							</div>
							
						    </div>
				</div>
			  </div>
			  <?php include('includes/footer.php'); ?>
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