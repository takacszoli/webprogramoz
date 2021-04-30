<?php session_start(); ?>
<?php if(file_exists('./logicals/'.$keres['fajl'].'.php')) { include("./logicals/{$keres['fajl']}.php"); } ?>
<!DOCTYPE html>
<html lang="hu">
<head>
<meta charset="utf-8">
<title><?=  $ceg_nev ?></title>
	<link rel="stylesheet" href="./styles/index.css" type="text/css">
	<?php if(file_exists('./styles/'.$keres['fajl'].'.css')) { ?><link rel="stylesheet" href="./styles/<?= $keres['fajl']?>.css" type="text/css"><?php } ?>
    <link rel="stylesheet" href="./styles/tablazat.css" type="text/css">
	<?php if(file_exists('./styles/'.$keres['fajl'].'.css')) { ?><link rel="stylesheet" href="./styles/<?= $keres['fajl']?>.css" type="text/css"><?php } ?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title><?=  $ceg_nev . $csnev . $unev?></title>

	
</head>
<body>


<div class="jumbotron text-center" style="margin-bottom:0">
        <h1><?= $fejlec['ceg_nev'] ?></h1>
        <br>    
        <h2><?= $fejlec['motto'] ?></h2>
        <p><?php if(isset($_SESSION['login'])) { ?><p class="bejelentkezett">Be van jelentkezve mint: <strong><?= $_SESSION['csnev']." ".$_SESSION['unev']." (".$_SESSION['login'].")" ?></strong></p><?php } ?></p>


    </div>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark" div="valami">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="nav navbar-nav">
	  <?php foreach ($oldalak as $url => $oldal) { ?>
						<?php if(! isset($_SESSION['login']) && $oldal['menun'][0] || isset($_SESSION['login']) && $oldal['menun'][1]) { ?>
							<li<?= (($oldal == $keres) ? ' class="active"' : '') ?>>
							<a href="<?= ($url == '/') ? '.' : ('?oldal=' . $url) ?>">
							<?= $oldal['szoveg'] ?></a>
							</li>
						<?php } ?>
					<?php } ?>
      </ul>
      
    </div>
</nav>
  
<div class="container" style="margin-top:30px">
        <div class="row">
	<?php include("./templates/pages/{$keres['fajl']}.tpl.php"); ?>
      <hr>
      
    </div>
    
</div>

<footer class="jumbotron text-center" style="margin-bottom:0">
        <?= $lablec['copyright']?>
        <?= "Jogok fentartva a " . $lablec['ceg_nev'] . " álltal!" ?>
    </footer>

</body>
</html>
