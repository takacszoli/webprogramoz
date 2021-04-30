
<?php   
    $kepek = array();
    $olvaso = opendir($MAPPA);
    while (($fajl = readdir($olvaso)) !== false)
        if (is_file($MAPPA.$fajl)) {
            $vege = strtolower(substr($fajl, strlen($fajl)-4));
            if (in_array($vege, $TIPUSOK))
                $kepek[$fajl] = filemtime($MAPPA.$fajl);            
        }
    closedir($olvaso);
?>
<div id="fogaleria">
    <h1 class="galeria">Képgaléria</h1>
    <hr>
    <?php
    arsort($kepek);
    foreach($kepek as $fajl => $datum)
    {
    ?>
        <div id="kep">
            <a href="<?php echo $MAPPA.$fajl ?>">
                <img src="<?php echo $MAPPA.$fajl ?>">
            </a>            
        </div>
    <?php
    }
    ?>
    </div>
<div id="feltolt">

<p><?php if(isset($_SESSION['login'])) { ?><h3>Itt tud képet feltölteni: <a href="?oldal=kepfeltoltes"><input type="button" value="Feltöltés" /></a></h3><?php } ?></p>

    
</div>

