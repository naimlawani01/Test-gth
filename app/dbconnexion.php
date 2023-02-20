<?php

$host = 'eu-cdbr-west-03.cleardb.net' ;
$dbname= 'heroku_f9faca63e83c36f';
$dbuser= 'bda5240d70b1f3';
$dbpwd= '8957a2ce';
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
try {
    $pdo = new PDO('mysql:host='.$host.';dbname='.$dbname, $dbuser, $dbpwd , $options);
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>