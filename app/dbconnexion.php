<?php

$host = 'localhost' ;
$dbname= 'naimimranelawani';
$dbuser= 'root';
$dbpwd= '';
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
try {
    $pdo = new PDO('mysql:host='.$host.';dbname='.$dbname, $dbuser, $dbpwd , $options);
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>