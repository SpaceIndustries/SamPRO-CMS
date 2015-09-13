<?php include('includes/header.php'); ?>
  <body style="background: url(<?php echo $background; ?>) repeat center fixed; margin:0; padding:0; -webkit-background-size: cover; background-size: cover;">

    <div class="container">
    <div class="row ">
      <?php include('includes/menu.php'); ?>

	      <div class="grey darken-1 z-depth-2">
			  <div class="panel-body">
			  <!-- Accueil -->
			  <div class="col s12">
                <div class="transparent ">
                    <h1 class="color-white center"><span class="fa fa-fw fa-home"></span> Accueil <?php echo $websitename; ?></h1>
                    <div class="panel-body color-white">
						<?php echo $para1; ?>
                    </div>
					
					<div class="center">
                        <a href="samp://<?php echo $ipsamp; ?>:<?php echo $portsamp; ?>"><button class="btn btn-default">Rejoindre le serveur SA-MP <i class="fa fa-angle-double-right"></i></button></a>
						<p class="color-white help-block"><i><?php echo $ipsamp; ?>:<?php echo $portsamp; ?></i></p>
                    </div>
					<div class="center">
                        <a href="ts3server://<?php echo $ipteamspeak3; ?>?port=<?php echo $portteamspeak3; ?>"><button class="btn btn-default">Rejoindre le TeamSpeak 3 <i class="fa fa-angle-double-right"></i></button></a>
						<p class="color-white help-block"><i><?php echo $ipteamspeak3; ?>:<?php echo $portteamspeak3; ?></i></p>
                    </div>
				
					<div class="panel-body color-white">
						<?php echo $para2; ?>
                    </div>
                </div>
				<!-- À propos -->
			    <div class="col s12 m4">
                        <h4 class="color-white"><i class="fa fa-fw fa-info-circle"></i> À propos de nous</h4>
						<p class="color-white"><?php echo $serveurabout; ?> </p>
                        <a href="<?php echo $serveuraboutforum; ?>"><button class="btn btn-default">En savoir plus</button></a>
                </div>
				<!-- Dernières nouvelles -->
				<div class="col s12 m4">
                        <h4 class="color-white"><i class="fa fa-fw fa-info-circle"></i> Dernières nouvelles</h4>
						<p class="color-white"><?php echo $lastnew; ?></p>
                
                        <a href="<?php echo $lastnewforum; ?>"><button class="btn btn-default">En savoir plus</button></a>
                </div>
               
				<!-- Slider -->
				<div class="col s12 m4">
                        <h4 class="color-white"><i class="fa fa-fw fa-camera"></i> Captures d'écran</h4>
					
                        <a href="<?php echo $serveurcaptures; ?>"><button class="btn btn-default">En savoir plus</button></a>
                  
                </div>
              </div>
				<?php require_once('includes/footer.php'); ?>
			  </div>
		  </div>
    </div>
	</div>
<?php require_once('includes/javascript.php'); ?>
  </body>
</html>