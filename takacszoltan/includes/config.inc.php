<?php

$ceg_nev = 'POKET Nonprofit KFT';
$fejlec = array(
    
	'ceg_nev' => $ceg_nev,
	'motto' => 'Zsebkönyvek. Autómatából. És online!'
);

$lablec = array(
    'copyright' => 'Copyright ' . date("Y") . '.',
            'ceg_nev' => $ceg_nev
    
);
$konyvek = array(
    'kep2' => 'konyv.png',
    'kep1' => 'konyv2.png'
);

$oldalak = array(
	'/' => array('fajl' => 'fooldal', 'szoveg' => 'Főoldal', 'menun' => array(1,1)),
    'konyvek' => array('fajl' => 'konyvek', 'szoveg' => 'Könyvek', 'menun' => array(1,1)),
    'kepek' => array('fajl' => 'kepek', 'szoveg' => 'Képek', 'menun' => array(1,1)),
    'kepfeltoltes' => array('fajl' => 'kepfeltoltes', 'szoveg' => 'Kép feltöltés', 'menun' => array(0,0)),
	'kapcsolat' => array('fajl' => 'kapcsolat', 'szoveg' => 'Kapcsolat', 'menun' => array(1,1)),
    'uzenetek' => array('fajl' => 'uzenetek', 'szoveg' => 'Üzenet', 'menun' => array(1,1)),
    'belepes' => array('fajl' => 'belepes', 'szoveg' => 'Bejelentkezés', 'menun' => array(1,0)),
    'kilepes' => array('fajl' => 'kilepes', 'szoveg' => 'Kijelentkezés', 'menun' => array(0,1)),
    'belep' => array('fajl' => 'belep', 'szoveg' => '', 'menun' => array(0,0)),
    'regisztral' => array('fajl' => 'regisztral', 'szoveg' => '', 'menun' => array(0,0)),
    'regisztralas' => array('fajl' => 'regisztralas', 'szoveg' => 'Regisztráció', 'menun' => array(1,0))

);


$MAPPA = './kepek/';
    $TIPUSOK = array ('.jpg', '.png');
    $MEDIATIPUSOK = array('image/jpeg', 'image/png');
    $MAXMERET = 500*1024;
?>
<?php
    
?>

