<?php

  ## ONT INCLUS NOS FICHIERS LES PLUS IMPORTANTS ##

  require_once('includes/config.php');
  require_once('includes/samp_infos.php');
  require_once('includes/SampQueryAPI.php');
  
  #################################################


?>
<?php 
$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
$first_part = $components[1];
?>