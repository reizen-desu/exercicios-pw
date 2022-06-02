<?php
    $includes_url = '../';

    session_start();
    $host='localhost';
    $dbname='eventos';
    $dbusuario='root';
    $dbpass='';
function conectar(){
    GLOBAL $host, $dbname,$dbusuario, $dbpass;

    try {
    $pdo=new PDO("mysql:host=$host; dbname=$dbname", $dbusuario, $dbpass);
    } catch (Exception $exc) {
        #echo $exc->getTraceAsString();
        echo $exc->getMessage();
    }

    return $pdo;
}
$pdo = conectar();


$db = mysqli_connect($host, $dbusuario, $dbpass, $dbname);
