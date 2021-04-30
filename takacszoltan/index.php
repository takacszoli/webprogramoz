<?php
include('./includes/config.inc.php');


$keres = $oldalak['/'];
if (isset($_GET['oldal'])) {
	if (isset($oldalak[$_GET['oldal']]) && file_exists("./templates/pages/{$oldalak[$_GET['oldal']]['fajl']}.tpl.php")) {
		$keres = $oldalak[$_GET['oldal']];
	}
	else if (isset($extrak[$_GET['oldal']]) && file_exists("./templates/pages/{$extrak[$_GET['oldal']]['fajl']}.tpl.php")) {
		$keres = $extrak[$_GET['oldal']];
	}
	
}

include('./templates/index.tpl.php'); 

?>
