<?php include('includes/core.php'); ?>
<?php include('includes/teamspeak/teamspeak_infos.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo $websitetitle; ?></title>
    <link rel="icon" href="<?php echo $favicon; ?>">
    <meta name="description" content="<?php echo $websitedescription; ?>">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/materialize.min.css">
	<link href="HQ/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
	<link href="HQ/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="HQ/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
	<link href="HQ/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
    <link href="css/HQ.css" rel="stylesheet">
	<link href="css/sampro.css" rel="stylesheet">
	<link href="navbar.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  </head>
  <body>

  <nav class="grey darken-4" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">SamPRO-CMS</a>
      <ul class="right hide-on-med-and-down">
         <li class="color-white"><a href="<?php echo $urlsite; ?>"><i class="fa fa-home"></i></a></li>
        <li class="color-white"><a href="<?php echo $forum; ?>"><i class="fa fa-comments"></i></a></li>
        <li class="color-white"><a href="<?php echo $panel; ?>"><i class="fa fa-gears"></i></a></li>
        <li class="color-white"><a href="<?php echo $boutique; ?>"><i class="fa fa-shopping-cart"></i></a></li>
        <li class="color-white"><a href="<?php echo $topsite; ?>"><i class="fa fa-star"></i></a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
         <li class="color-white"><a href="<?php echo $urlsite; ?>"><i class="fa fa-home"></i></a></li>
        <li class="color-white"><a href="<?php echo $forum; ?>"><i class="fa fa-comments"></i></a></li>
        <li class="color-white"><a href="<?php echo $panel; ?>"><i class="fa fa-gears"></i></a></li>
        <li class="color-white"><a href="<?php echo $boutique; ?>"><i class="fa fa-shopping-cart"></i></a></li>
        <li class="color-white"><a href="<?php echo $topsite; ?>"><i class="fa fa-star"></i></a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <br><br><br>
  <div class="row center">
  <a href="/"><img class="logo" src="<?php echo $logo; ?>" height="<?php echo $taillelogo; ?>" /></a>
  </div>
  <br><br>
  </body>