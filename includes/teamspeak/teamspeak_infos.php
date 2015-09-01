<?php
 
date_default_timezone_set("Europe/Paris");
require_once("libraries/TeamSpeak3/TeamSpeak3.php");
TeamSpeak3::init();
 
header('Content-Type: text/html; charset=utf8');
 
$status = "offline";
$count = 0;
$max = 0;
 
try {
    $ts3 = TeamSpeak3::factory("serverquery://".$ts3queryuser.":".$ts3querypassword."@".$ipteamspeak3.":".$ts3queryport."/?server_port=".$portteamspeak3."&use_offline_as_virtual=1&no_query_clients=1");
    $status = $ts3->getProperty("virtualserver_status");
    $count = $ts3->getProperty("virtualserver_clientsonline") - $ts3->getProperty("virtualserver_queryclientsonline");
    $max = $ts3->getProperty("virtualserver_maxclients");

}
catch (Exception $e) {
} 
?>
