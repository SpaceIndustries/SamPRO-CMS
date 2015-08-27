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
		
		fclose($fp);
	}
?>