<?php include('includes/header.php'); ?>
<?php
require "includes/sa-mp/SampQueryAPI.php";
$query = new SampQueryAPI($ipsamp, $portsamp);
if($query->isOnline())
{
$aInformation = $query->getInfo();
$aServerRules = $query->getRules();
?>
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
								<h1 class="color-white text-center"><i class="fa fa-th-list"></i> Liste des joueurs connectés (<?= $aInformation['players'] ?> / <?= $aInformation['maxplayers'] ?>)</h1>
								<div class="panel-body color-white">
								<div class="table-responsive">
										<?php
										
										$aPlayers = $query->getDetailedPlayers();
										
										if(!is_array($aPlayers) || count($aPlayers) == 0)
										{
											echo '<br /><i>La liste n\'affiche pas plus de 100 joueurs, le serveur en compte actuellement '.$aInformation['players'].' </i>';
										}
										else
										{
											?>
											<table class="table color-white">
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
										
											echo '</table>';
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