<?php
//constantes de connexion
define('DB_HOST','localhost');//adresse du serveur
define('DB_USER','admin');//login de connexion à la BD
define('DB_PASS','admin'); //mot de passe de connexion à la BD
define('DB_NAME','master_enspd');//nom de la  BD

try {
    $dbh = new PDO("mysql:host=".DB_HOST.
    ";dbname=".DB_NAME,DB_USER,DB_PASS,
    array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES 'utf8'"));
    echo "connexion établie";
}
catch(PDOException $e)
{
    exit("error : ".$e->getMessage());
    echo $e->getMessage();
}