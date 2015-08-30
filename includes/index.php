<?php
 
date_default_timezone_set("Europe/Paris");
require_once("libraries/TeamSpeak3/TeamSpeak3.php");
TeamSpeak3::init();
 
header('Content-Type: text/html; charset=utf8');
 
$status = "offline";
$count = 0;
$max = 0;
 
try {
    $ts3 = TeamSpeak3::factory("serverquery://serveradmin1:lRNAyClP@92.222.3.13:10011/?server_port=9987&use_offline_as_virtual=1&no_query_clients=1");
    $status = $ts3->getProperty("virtualserver_status");
    $count = $ts3->getProperty("virtualserver_clientsonline") - $ts3->getProperty("virtualserver_queryclientsonline");
    $max = $ts3->getProperty("virtualserver_maxclients");
}
catch (Exception $e) {
    echo '<div style="background-color:red; color:white; display:block; font-weight:bold;">QueryError: ' . $e->getCode() . ' ' . $e->getMessage() . '</div>';
}
echo '<span class="ts3status">TS3 Server Status: ' . $status . '</span><br/><span class="ts3_clientcount">Clients online: ' . $count . '/' . $max . '</span>';
 
?>