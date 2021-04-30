<?php

$servername = "mysql.omega";
$username = "takacszoltan";
$password = "123456";


if(isset($_POST['fn']) && isset($_POST['pw'])) {
    try {
        $dbh = new PDO("mysql:host=$servername;dbname=takacszoltan", "$username", "$password" ,
                        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
        
        $sqlSelect = "select id, csaladi_nev, uto_nev from felhasznalok where bejelentkezes = :bejelentkezes and jelszo = sha1(:jelszo)";
        $sth = $dbh->prepare($sqlSelect);
        $sth->execute(array(':bejelentkezes' => $_POST['fn'], ':jelszo' => $_POST['pw']));
        $row = $sth->fetch(PDO::FETCH_ASSOC);
        if($row) {
            $_SESSION['csnev'] = $row['csaladi_nev']; $_SESSION['unev'] = $row['uto_nev']; $_SESSION['login'] = $_POST['fn'];
        }
    }
    catch (PDOException $e) {
        $errormessage = "Hiba: ".$e->getMessage();
    }      
}
else {
    header("Location: .");
}
?>
