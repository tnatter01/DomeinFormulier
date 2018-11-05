<?php
set_time_limit(0);
ob_start();

$extensions = array(
    '.nl' => array('whois.domain-registry.nl','is free'), #!
    '.be' => array('whois.dns.be','Status:	AVAILABLE'), #!
    '.com' => array('whois.crsnic.net','No match for'),
    '.net' => array('whois.crsnic.net','No match for'),
    '.org' => array('whois.publicinterestregistry.net','NOT FOUND'),
    '.info' => array('whois.afilias.net','NOT FOUND'),
    '.eu' => array('whois.eu','Status: AVAILABLE'), #!
    '.de' => array('whois.denic.de','FREE'),
);

if(isset($_GET['domain']))
{
	$domain = str_replace(array('www.', 'http://', '.nl', '.com', '.net','.org','.be','.info','.eu','.de'), NULL, $_GET['domain']);

	if(strlen($domain) > 0)
	{
		foreach($extensions as $extension => $who)
		{
			$buffer = NULL;

			$sock = fsockopen($who[0], 43) or die('Error Connecting To Server:' . $server);
			fputs($sock, $domain.$extension . "\r\n");

				while( !feof($sock) )
				{
				  	$buffer .= fgets($sock,128);

				}

			fclose($sock);

			if(eregi($who[1], $buffer))
			{
				$extzonderpunt = str_replace(".", "", $extension);
					$domeinmetext = "$domain$extension";
					echo '<h4 class="available"><input type="checkbox" id="aanvraagcheck" " value="'.$extzonderpunt.'" >  <span>Beschikbaar</span>' .
						$domain. '<b>' . $extension .'</b> is vrij 
							</h4>';
			}
			else
			{
				echo '<h4 class="taken"><input type="checkbox" disabled>  <span>In gebruik </span>' . $domain . '<b>' .$extension .'</b> is in 						gebruik</h4>';
			}
			echo '<br />';
			ob_flush();
			flush();
			sleep(0.3);
		}
	}
	else
	{
		echo 'Vul een domeinnaam in.';
	}
			echo '<span>Selecteer de domeinen die u wilt aanvragen en klik op de knop hieronder.<br></span><button id="aanvraagbutton" onclick="aanvraag()">Aanvragen</button>';
}
?>
