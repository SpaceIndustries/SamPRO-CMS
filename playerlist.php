<?php include('includes/header.php'); ?>
  <body style="background: url(<?php echo $background; ?>) repeat center fixed; margin:0; padding:0; -webkit-background-size: cover; background-size: cover;">

<?php
require "includes/sa-mp/SampQueryAPI.php";
$query = new SampQueryAPI($ipsamp, $portsamp);
if($query->isOnline())
{
$aInformation = $query->getInfo();
$aServerRules = $query->getRules();
?>

    <div class="container">

      <?php include('includes/menu.php'); ?>

	      <div class="grey darken-4 z-depth-2" >
			  <div class="panel-body">
				<div class="row">
							<!-- /.panel-heading -->
							<div class="panel-body color-white">
							<!-- Liste des joueurs -->
							<div class="col s12 center-align ">
							<div class="panel panel-default">
								<h4 class="color-white text-center"><i class="fa fa-th-list"></i> Liste des joueurs connectés (<?= $aInformation['players'] ?> / <?= $aInformation['maxplayers'] ?>)</h4>
								<div class="panel-body center-align color-white">
								<div class="table-responsive ">
										<?php
										
										$aPlayers = $query->getDetailedPlayers();
										
										if(!is_array($aPlayers) || count($aPlayers) == 0)
										{
											echo '<br /><i>La liste n\'affiche pas plus de 100 joueurs, le serveur en compte actuellement '.$aInformation['players'].' </i>';
										}
										else
										{
											?>
											<div class="">
											<table class="col s6  table color-white">
												<tr>
													<td><i class="fa fa-sort-amount-asc"> <b>ID</b></td>
													<td><i class="fa fa-user"></i> <b>Prénom_Nom</b></td>
													<td><i class="fa fa-trophy"> <b>Niveaux</b></td>
													<td><i class="fa fa-signal"></i> <b>Ping</b></td>
												</tr>
											<?php
											foreach($aPlayers as $sValue)
											{
												?>
												<tr>
													<td><?= $sValue['playerid'] ?></td>
													<td><?= htmlentities($sValue['nickname']) ?></td>
													<td><?= $sValue['score'] ?></td>
													<td><?= $sValue['ping'] ?></td>
												</tr>
												<?php
											}
										
											echo '</table></div>';
										}
									}
									?>
								</div>
							</div>
							</div>
							
						    </div>
				</div>
			  </div>
			  <?php require_once('includes/footer.php'); ?>
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