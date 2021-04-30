<?php
session_start();
unset($_SESSION['csnev']);
unset($_SESSION['unev']);
$csnev = "";
$unev = "";

header("Location:index.php");
?>