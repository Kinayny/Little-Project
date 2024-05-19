<?php 

// lien vers notre base de donné >
$dsn = 'mysql:host=localhost;dbname=tutocrudphp;charset=utf8';

$user = 'root';
$pass = "";

try {
    $cnx == new PDO( $dsn, $user, $pass );
    $cnx->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
}catch( PDOException $e ) {
    echo"une erreur et survenue: ".$e->getMessage();
    };


