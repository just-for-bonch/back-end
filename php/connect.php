<?php
    $bd = mysql_connect ("localhost","admin","GoldFace1");	
if (!$bd)
    die('Could not connect: ' . mysql_error());
else 
	mysql_select_db ("hakaton",$bd);
	mysql_set_charset("utf8");	
?>